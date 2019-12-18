<?php

Class crop {

    public static function compress_small($imgSrc) {
        $info = getimagesize($imgSrc);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];

        $thumbSize = 500;
        $type = substr(strrchr($mime, '/'), 1);
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                break;

            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                break;

            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;

            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;

            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;

            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;

            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
        }

        $myImage = $image_create_func($imgSrc);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $image_c = imagecreatetruecolor($thumbSize, $thumbSize);
        imagecopyresampled($image_c, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);
        $save_folder = 'thumbs/';


        if ($save_folder) {
            $new_name = time() . 'resized.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($image_c, $save_path);
    }

    public static function compress_big($imgSrc) {
        $info = getimagesize($imgSrc);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];

        $thumbSize = 2000;
        $type = substr(strrchr($mime, '/'), 1);
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                break;

            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                break;

            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;

            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;

            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;

            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;

            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
        }

        $myImage = $image_create_func($imgSrc);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $image_c = imagecreatetruecolor($thumbSize, $thumbSize);
        imagecopyresampled($image_c, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);
        $save_folder = 'thumbs/';


        if ($save_folder) {
            $new_name = time() . 'resized.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($image_c, $save_path);
    }

    public static function crop_big($imgSrc) {
        $info = getimagesize($imgSrc);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];

        $thumbSize = 500;
        $type = substr(strrchr($mime, '/'), 1);
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                break;

            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                break;

            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;

            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;

            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;

            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;

            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
        }

        $myImage = $image_create_func($imgSrc);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $image_c = imagecreatetruecolor($thumbSize, $thumbSize);
        imagecopyresampled($image_c, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);
        $save_folder = 'thumbs/';


        if ($save_folder) {
            $new_name = time() . 'resized.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($image_c, $save_path);
    }

    public static function crop_small($imgSrc, $c) {
        $info = getimagesize($imgSrc);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];
        
        //if($//)

        $thumbWidth = 392;
        $thumbHeight = 271;
        $type = substr(strrchr($mime, '/'), 1);
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                break;

            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                break;

            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;

            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;

            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;

            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;

            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
        }

        $myImage = $image_create_func($imgSrc);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $image_c = imagecreatetruecolor($thumbWidth, $thumbHeight);
        imagecopyresampled($image_c, $myImage, 0, 0, $x, $y, $thumbWidth, $thumbHeight, $smallestSide, $smallestSide);
        $save_folder = '../upload/';


        if ($save_folder) {
            $new_name = time().'_'.$c . 'resized.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($image_c, $save_path);
        return $new_name;
    }

    public static function resize($imgSrc) {
        $info = getimagesize($imgSrc);
        $mime = $info['mime'];

        switch ($mime) {
            case 'image/jpeg':
                $image_create_func = 'imagecreatefromjpeg';
                $image_save_func = 'imagejpeg';
                $new_image_ext = 'jpg';
                break;

            case 'image/png':
                $image_create_func = 'imagecreatefrompng';
                $image_save_func = 'imagepng';
                $new_image_ext = 'png';
                break;

            case 'image/gif':
                $image_create_func = 'imagecreatefromgif';
                $image_save_func = 'imagegif';
                $new_image_ext = 'gif';
                break;

            default:
                throw new Exception('Unknown image type.');
        }

        $img = $image_create_func($imgSrc);
        list($width, $height) = getimagesize($imgSrc);

        if ($width > $height) {
            $newWidth = 1500;
            $xvalue = $width / $newWidth;
            $newHeight = ($height / $xvalue);
        } else {
            $newHeight = 1000;
            $xvalue = $height / $newHeight;
            $newWidth = ($width / $xvalue);
        }


        $tmp = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        $save_folder = 'thumbs/';
        if ($save_folder) {
            $new_name = time() . 'big.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($tmp, $save_path);
    }
    
    public static function resize_small($imgSrc, $c) {
        $info = getimagesize($imgSrc);
        $mime = $info['mime'];

        switch ($mime) {
            case 'image/jpg':
                $image_create_func = 'imagecreatefromjpeg';
                $image_save_func = 'imagejpeg';
                $new_image_ext = 'jpg';
                break;
            
            case 'image/jpeg':
                $image_create_func = 'imagecreatefromjpeg';
                $image_save_func = 'imagejpeg';
                $new_image_ext = 'jpg';
                break;

            case 'image/png':
                $image_create_func = 'imagecreatefrompng';
                $image_save_func = 'imagepng';
                $new_image_ext = 'png';
                break;

            case 'image/gif':
                $image_create_func = 'imagecreatefromgif';
                $image_save_func = 'imagegif';
                $new_image_ext = 'gif';
                break;

            default:
                throw new Exception('Unknown image type.');
        }

        $img = $image_create_func($imgSrc);
        list($width, $height) = getimagesize($imgSrc);

        if ($width > $height) {
            $newWidth = 392;
            $xvalue = $width / $newWidth;
            $newHeight = ($height / $xvalue);
        } else {
            $newHeight = 271;
            $xvalue = $height / $newHeight;
            $newWidth = ($width / $xvalue);
        }


        $tmp = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        $save_folder = '../upload/';
        if ($save_folder) {
            $new_name = time() .'_'.$c. 'small.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($tmp, $save_path);
        return $new_name;
    }
    
    
    public static function profile_small($imgSrc) {
        $info = getimagesize($imgSrc);
        $width = $info[0];
        $height = $info[1];
        $mime = $info['mime'];
        
        //if($//)

        $thumbWidth = 368;
        $thumbHeight = 288;
        $type = substr(strrchr($mime, '/'), 1);
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                break;

            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                break;

            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;

            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;

            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;

            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;

            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
        }

        $myImage = $image_create_func($imgSrc);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $image_c = imagecreatetruecolor($thumbWidth, $thumbHeight);
        imagecopyresampled($image_c, $myImage, 0, 0, $x, $y, $thumbWidth, $thumbHeight, $smallestSide, $smallestSide);
        $save_folder = '../upload/';


        if ($save_folder) {
            $new_name = time(). '_resized.' . $new_image_ext;
            $save_path = $save_folder . $new_name;
        }
        $process = $image_save_func($image_c, $save_path);
        return $new_name;
    }

    public static function resize_crop_image($max_width, $max_height, $source_file,$i, $quality = 100){
        $imgsize = getimagesize($source_file);
        $width = $imgsize[0];
        $height = $imgsize[1];
        $mime = $imgsize['mime'];

        switch($mime){
            case 'image/gif':
                $image_create = "imagecreatefromgif";
                $image = "imagegif";
                $new_image_ext = 'gif';
                break;

            case 'image/png':
                $image_create = "imagecreatefrompng";
                $image = "imagepng";
                $new_image_ext = 'png';
                $quality = 7;
                break;

            case 'image/jpeg':
                $image_create = "imagecreatefromjpeg";
                $image = "imagejpeg";
                $new_image_ext = 'jpeg';
                $quality = 80;
                break;

            default:
                $image_create = 'ImageCreateFromJPEG';
                $image = 'ImageJPEG';
                $new_image_ext = 'jpg';
                $quality = 80;
                break;
        }

        $dst_img = imagecreatetruecolor($max_width, $max_height);
        $src_img = $image_create($source_file);

        $width_new = $height * $max_width / $max_height;
        $height_new = $width * $max_height / $max_width;
        //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
        if($width_new > $width){
            //cut point by height
            $h_point = (($height - $height_new) / 2);
            //copy image
            imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
        }else{
            //cut point by width
            $w_point = (($width - $width_new) / 2);
            imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
        }

        $save_folder = '../upload/';
        $new_name = time(). 'resized_'.$i .'.'. $new_image_ext;
        $save_path = $save_folder . $new_name;
        $image($dst_img, $save_path, $quality);
        return $new_name;

        if($dst_img)imagedestroy($dst_img);
        if($src_img)imagedestroy($src_img);
    }
}
?>
