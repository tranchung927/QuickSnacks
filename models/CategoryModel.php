
<?php

/* 
 * *
 */

class CategoryModel extends Model {
    function getAll() {
        return $r = $this->select('*', 'category');
    }
    function findById($id) {
        return $r = $this->selectOne('*','category',"id=".$id);
    }
}
