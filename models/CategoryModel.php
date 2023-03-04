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

    function find($id)
    {
        return $r = $this->selectOne('*', 'city', "id=" . $id);
    }
}
