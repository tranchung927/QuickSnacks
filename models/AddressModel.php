<?php

/* 
 * *
 */

class AddressModel extends Model
{
    function getById($id)
    {
        $result = array();
        $sql = "SELECT * FROM `address` WHERE id = '" . $id . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }

    function createAddress($firstName, $lastName, $phone, $cityId, $districtId, $address)
    {
        $now = new DateTime('now', new DateTimeZone('ASIA/Ho_Chi_Minh'));
        $now = $now->format('Y-m-d H:i:s');
        if ($this->insert(
            'address',
            array($firstName, $lastName, $phone, $cityId, $districtId, $address),
            array('first_name', 'last_name', 'phone', 'city_id', 'district_id', 'address')
        )) {
            $id = $this->getLastInsertID();
            return $this->getById($id);
        } else {
            return 0;
        }
        
    }

    function updateAddress($id, $firstName, $lastName, $phone, $cityId, $districtId, $address)
    {
        return $this->update(
            'address',
            array('first_name', 'last_name', 'phone', 'city_id', 'district_id', 'address'),
            array($firstName, $lastName, $phone, $cityId, $districtId, $address),
            "id=" . $id
        );
    }
}
