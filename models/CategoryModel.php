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
}
