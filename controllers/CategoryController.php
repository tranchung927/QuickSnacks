<?php

class CategoryController extends Controller {

    function __construct() {
        $this->folder = 'default';
    }

    public function index() {
        $products = array();
        array_push($products, array(
            'id' => 1,
            'parentId' => 1,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ),
                array(
                    'id' => 2,
                    'parentId' => 1,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
        );

        $cateTitle = array();
        array_push($cateTitle, array(
            'id' => 1,
            'name' => 'Món Mới'
                ), array(
            'id' => 2,
            'name' => 'Đồ Ăn Nhẹ'
                ), array(
            'id' => 3,
            'name' => 'Sinh Tố'
                ), array(
            'id' => 4,
            'name' => 'Dành Cho Trẻ Em'
                ), array(
            'id' => 5,
            'name' => 'Tốt Cho Sức Khoẻ'
                )
        );

        $data = array('cateTitle' => $cateTitle,
                'products' => $products,
                'isLogin' => false
                );
        $this->render('category', $data);
    }

    public function category_detail() {
        $products = array();
        array_push($products, array(
            'id' => 1,
            'parentId' => 1,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ),
                array(
                    'id' => 2,
                    'parentId' => 1,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ),
                array(
                    'id' => 3,
                    'parentId' => 2,
                    'name' => '1 bánh trứng',
                    'image' => './public/images/MON MOI 1.png',
                    'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ), array(
            'id' => 3,
            'parentId' => 2,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                ),
        );

        $cateTitle = array();
        array_push($cateTitle, array(
            'id' => 1,
            'name' => 'Món Mới'
                ), array(
            'id' => 2,
            'name' => 'Đồ Ăn Nhẹ'
                ), array(
            'id' => 3,
            'name' => 'Sinh Tố'
                ), array(
            'id' => 4,
            'name' => 'Dành Cho Trẻ Em'
                ), array(
            'id' => 5,
            'name' => 'Tốt Cho Sức Khoẻ'
                )
        );
        $data = array('cateTitle' => $cateTitle,
            'products' => $products, 
            'category' => $category,
            'isLogin' => true
            );
        $this->render('category_detail', $data);
    }

    public function product() {
        $products = array();
        array_push($products, array(
            'id' => 1,
            'name' => '1 bánh trứng',
            'image' => './public/images/MON MOI 1.png',
            'price' => '18000đ'
                )
        );
        $data = array('products' => $products,
            'isLogin' => true
            );
        $this->render('product', $data);
    }

}
