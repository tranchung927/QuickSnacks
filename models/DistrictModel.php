<?php

/* 
 * *
 */

class DistrictModel extends Model
{
    function getAll()
    {
        return $this->select('*', 'district');
    }

    function getByCityId($cityId)
    {
        return $this->select('*', 'district', "city_id=" . $cityId);
    }

    function getByCityName($name)
    {

        $sql = "SELECT * FROM `city` WHERE `name` = '" . $name . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            $result = array();
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $this->getByCityId($result["id"]);
        }
    }

    function getById($id)
    {
        $result = array();
        $sql = "SELECT * FROM `district` WHERE id = '" . $id . "'";
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
        $result = array();
        $sql = "SELECT * FROM `district` WHERE `name` = '" . $name . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }

    function getByNameAndCityId($name, $cityId)
    {
        $result = array();
        $sql = "SELECT * FROM `district` WHERE `name` = '". $name . "'"." AND city_id = " .$cityId;
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
