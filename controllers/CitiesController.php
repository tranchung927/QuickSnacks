<?php

class CitiesController extends Controller {

    function __construct() {
        $this->folder = 'default';
    }

    public function index() {
        require_once 'vendor/Model.php';
        require_once 'models/CityModel.php';
        $data = array('cities' => (new CityModel)->getAll());
        echo "<script>console.log('Debug Objects: " . count($data) . "' );</script>";
        $this->render('cities', $data, 'Thành phố');
    }

    public function showCity() {
        require_once 'vendor/Model.php';
        require_once 'models/CityModel.php';
        $data = array('city' => (new CityModel)->find($_GET['id']));
        $this->render('city_detail', $data, 'Thành phố');
    }

}
