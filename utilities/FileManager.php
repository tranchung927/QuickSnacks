<?php

/**
* 
*/
class FileManager
{
    static function save($file, $path) {
        // Check if image file is a actual image or fake image
        $check = getimagesize($file["tmp_name"]);
        if ($check == false) {
            echo "Ảnh không đúng định dạng!";
            return false;
        }

        $target_dir = IMAGE_PATH . $path;
        $imagePathExt = pathinfo(basename($file["name"]), PATHINFO_EXTENSION);
        $imageFileType = strtolower($imagePathExt);
        $fileName = bin2hex(random_bytes(16)). time() . "." . $imagePathExt;
        $target_file = $target_dir . $fileName;//basename($imageFile["name"]);
        // Check if file already exists
        if (file_exists($target_file)) {
            chmod($target_file, 0755); //Change the file permissions if allowed
            unlink($target_file); //remove the file
        }
        // Check file size
        if ($file["size"] > 500000) { //5mb
            echo "Kích thước ảnh quá lớn!";
            return false;
        }
        // Allow certain file formats
        if (
            $imageFileType != "jpg"
            && $imageFileType != "png"
            && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Vui lòng chọn ảnh với các định dạng JPG, JPEG, PNG & GIF";
            return false;
        }
        if (!move_uploaded_file($file["tmp_name"], $target_file)) {
            echo "Đã có lỗi xảy ra";
            return false;
        }
        return $fileName;
    }
}