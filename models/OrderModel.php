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
                return $this->insert(
                    'order_item',
                    array($items[$i]["id"], $orderId, $items[$i]["quantity"], $items[$i]["orginal_price"], $items[$i]["price"], $now),
                    array('product_id', 'order_id', 'quantity', 'orginal_price', 'price', 'created_date')
                );
            }
        }
        return 0;
    }
}
