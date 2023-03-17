<?php

/**
 * 
 */

require_once "AdminController.php";
class CategoryController extends AdminController
{
    function index()
    {
        $this->valid();
        require_once '../vendor/Model.php';
        require_once '../models/CategoryModel.php';
        $md = new CategoryModel;
        $data = $md->getAll();
        $this->render('category', $data, 'DANH MỤC SẢN PHẨM', 'admin');
    }

    function action()
    {
        $this->valid();
        require_once '../vendor/Model.php';
        require_once '../models/CategoryModel.php';
        require_once '../utilities/FileManager.php';
        $md = new CategoryModel;

        $actionName = $id = $name = '';
        $imageFile = null;
        $imageName = null;
        if (isset($_POST['action'])) {
            $actionName = $_POST['action'];
        }
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        if (isset($_POST['name'])) {
            $name = trim($_POST['name']);
        }
        if (isset($_FILES['image'])) {
            $imageFile = $_FILES['image'];
        }

        if ($actionName == 'del') {
            if($md->deleteById($id)) {
                echo "OK";
                return;
            }
        }

        if ($name == '') {
            echo "Bạn chưa điền tên danh mục!";
            return;
        }

        if ($actionName == 'add' && empty($imageFile)) {
            echo "Bạn chưa chọn ảnh danh mục!";
            return;
        }

        if (isset($imageFile)) {
            $imageName = FileManager::save($imageFile, "categories/", $name);
            if ($imageName == false) {
                echo "Đã có lỗi xảy ra!";
                return;
            }
        }

        switch ($actionName) {
            case 'add':
                if ($md->getByName($name)) {
                    echo "Tên danh mục đã tồn tại!";
                    return;
                }
                if ($md->createCategory($name, $imageName)) {
                    echo "OK";
                }
                break;
            case 'edit':
                $cate = $md->getById($id);
                if ($cate == false) {
                    echo "Đã có lỗi xảy ra!";
                    return;
                }
                if ($name != $cate["name"]) {
                    if ($md->getByName($name)) {
                        echo "Tên danh mục đã tồn tại!";
                        return;
                    }
                }
                $md->updateCategory($id, $name, $imageName);
                echo "OK";
                break;
            default:
                # code...
                break;
        }
    }
}
