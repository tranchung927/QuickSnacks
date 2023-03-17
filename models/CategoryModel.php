<?php

/* 
 * *
 */

class CategoryModel extends Model
{
    function getAll()
    {
        return $r = $this->select('*', 'category');
    }

    function getById($id)
    {
        $result = array();
        $sql = "SELECT * FROM category WHERE id = '" . $id . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }

    function getByName($name)
    {
        if (empty($name)) {
            return false;
        }
        $result = array();
        $sql = "SELECT * FROM `category` WHERE `name` = '" . $name . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }

    function createCategory($name, $image)
    {
        $now = (new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh')))->format('Y-m-d H:i:s');
        $sql = "INSERT INTO `category` (`name`,`image`,`created_date`,`status`) VALUES ('" . $name . "','" . $image . "','" . $now . "','active')";
        if ($this->exe_query($sql)) {
            $categoryId = $this->getLastInsertID();
            return $categoryId;
        }
        return false;
    }

    function updateCategory($id, $name, $image = null)
    {
        $now = (new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh')))->format('Y-m-d H:i:s');
        if (isset($image)) {
            return $this->update(
                '`category`',
                array('`name`', '`image`', '`modified_date`'),
                array($name, $image, $now),
                "id=" . $id
            );
        } else {
            return $this->update(
                '`category`',
                array('`name`', '`modified_date`'),
                array($name, $now),
                "id=" . $id
            );
        }
    }

    function deleteById($id)
    {
        return $this->delete('`category`', '`id`=' . $id);
    }
}
