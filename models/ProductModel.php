<?php

/* 
 * *
 */

class ProductModel extends Model
{

    function getAll()
    {
        return $this->select("*", "`product`");
    }

    function get($page, $limit, $sortColumn = "created_date", $sortOrder = "DESC")
    {
        $sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

        $page = (int)$page;
        $limit = (int)$limit;

        $sqlCount = "SELECT	COUNT(*) AS Count FROM	`product`;";
        $resultCount = $this->conn->prepare($sqlCount);
        $resultCount->execute();
        $totalRecords = $resultCount->fetchColumn();
        $totalPages = ceil($totalRecords / $limit);
        if ($page > $totalPages) {
            return array();
        }

        $start = $limit * $page - $limit;
        if ($start < 0) {
            $start = 0;
        }
        $sql = "SELECT `id`,`name`,`element`,`description`,`price`,`image`,`calorie`,`estimate_time`,`category_id`, DATE_FORMAT(`created_date`, '%m/%d/%Y %h:%i %p') AS created_date, DATE_FORMAT(`modified_date`, '%m/%d/%Y %h:%i %p') AS modified_date FROM `product` WHERE `status`='active' ORDER BY " . $sortColumn . " " . $sortOrder . " LIMIT " . $start . "," . $limit . ";";
        $products = array();
        foreach ($this->conn->query($sql) as $row) {
            $products[] = $row;
        }
        return $products;
    }

    function getByCategoryId($categoryId, $page, $limit, $sortColumn = "name", $sortOrder = "ASC")
    {
        $sortOrder = strcasecmp($sortOrder, "DESC") == 0 ? "DESC" : "ASC";

        $page = (int)$page;
        $limit = (int)$limit;

        $sqlCount = "SELECT	COUNT(*) AS Count FROM	`product` WHERE category_id=" . $categoryId . ";";
        $resultCount = $this->conn->prepare($sqlCount);
        $resultCount->execute();
        $totalRecords = $resultCount->fetchColumn();
        $totalPages = ceil($totalRecords / $limit);
        if ($page > $totalPages) {
            return array();
        }

        $start = $limit * $page - $limit;
        if ($start < 0) {
            $start = 0;
        }
        $sql = "SELECT `id`,`name`,`element`,`description`,`price`,`image`,`calorie`,`estimate_time`,`category_id`, DATE_FORMAT(`created_date`, '%m/%d/%Y %h:%i %p') AS created_date, DATE_FORMAT(`modified_date`, '%m/%d/%Y %h:%i %p') AS modified_date FROM `product` WHERE `status`='active' AND `category_id`=" . $categoryId . " ORDER BY " . $sortColumn . " " . $sortOrder . " LIMIT " . $start . "," . $limit . ";";
        $products = array();
        foreach ($this->conn->query($sql) as $row) {
            $products[] = $row;
        }
        return $products;
    }

    function getById($id)
    {
        $result = array();
        $sql = "SELECT * FROM product WHERE id = '" . $id . "'";
        if ($this->conn->query($sql)->rowCount() == 0) {
            return false;
        } else {
            foreach ($this->conn->query($sql) as $row) {
                $result = $row;
            }
            return $result;
        }
    }

    function getTotal()
    {
        $rs = $this->select('COUNT(`id`) AS `total`', '`product`');
        return $rs[0]['total'];
    }
}
