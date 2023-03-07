<?php

/* 
 * *
 */

class CityModel extends Model
{
    function getAll()
    {
        return $this->select('*', 'city');
    }

    function getById($id)
    {
        $result = array();
        $sql = "SELECT * FROM `city` WHERE id = '" . $id . "'";
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
        $sql = "SELECT * FROM `city` WHERE `name` = '" . $name . "'";
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
