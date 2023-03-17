<?php

/* 
 * *
 */

class OrderModel extends Model
{
    function createOrder($accountId, $addressId, $items)
    {
        $now = new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh'));
        $now = $now->format('Y-m-d H:i:s');
        $sql = "INSERT INTO `order` (`account_id`,`address_id`,`created_date`,`status`) VALUES (" . $accountId . "," . $addressId . ",'" . $now . "','waiting')";
        if ($this->exe_query($sql)) {
            $orderId = $this->getLastInsertID();
            for ($i = 0; $i < count($items); $i++) {
                $this->insert(
                    'order_item',
                    array($items[$i]["id"], $orderId, $items[$i]["quantity"], $items[$i]["orginal_price"], $items[$i]["price"], $now),
                    array('product_id', 'order_id', 'quantity', 'orginal_price', 'price', 'created_date')
                );
            }
            return 1;
        }
        return 0;
    }

    function getAll()
    {
        $orders = $this->select(
            '`order`.`id`, `order`.`status`, `address`.`first_name`, `address`.`last_name`, `district`.`name` AS district,`address`.`address`, `address`.`phone`, `order`.`created_date`',
            '`order` INNER JOIN `address` ON `order`.`address_id` = `address`.`id` INNER JOIN `district` ON `address`.`district_id` = `district`.`id`',
            null,
            'ORDER BY created_date DESC'
        );
        for ($i = 0; $i < count($orders); $i++) {
            $orders[$i]["items"] = $this->select(
                '`order_item`.`id`, `product`.`name`, `product`.`image`,`order_item`.`quantity`, `order_item`.`price`',
                '`order_item` INNER JOIN `product` ON `order_item`.`product_id` = `product`.`id`',
                '`order_id`=' . $orders[$i]['id']
            );
        }
        return $orders;
    }

    function updateStatusById($id, $status)
    {
        $now = (new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh')))->format('Y-m-d H:i:s');
        return $this->update(
            '`order`',
            array('`status`', '`modified_date`'),
            array($status, $now),
            "id=" . $id
        );
    }

    function deleteById($id)
    {
        if ($this->delete('order_item', '`order_id`=' . $id)) {
            return $this->delete('`order`', '`id`=' . $id);
        }
        return 0;
    }

    function getTotalToday()
    {
        $now = (new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh')))->format('Y-m-d');
        $rs = $this->select('COUNT(`id`) AS `neworder`','`order`',"DATE(`created_date`) = '".$now."'");
        return $rs[0]['neworder'];
    }
}
