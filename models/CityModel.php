<?php

/* 
 * *
 */

class CityModel extends Model {
    function getAll(){
        return $r = $this->select('*', 'city');
    }
    
    function find($id) {
        return $r = $this->selectOne('*', 'city', "id=".$id);
  }
}
