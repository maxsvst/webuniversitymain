<?php

require_once 'application/core/Models/Photo.php';

final class PhotoService {
    function getPhotos() {
        $arr = [];
        for ($i=1; $i < $this->numberOfFiles(); $i++) { 
            array_push($arr, $this->createPhoto($i));
        }
        return $arr;
    }

    private function createPhoto($index) {

        $path = '/public/images/album/'.$index.'.jpg';
        $desctiption = <<<EOL
            It's description
        EOL;

        return new Photo($path, $desctiption, $index);
    }

    function numberOfFiles() {
        $dir = opendir($_SERVER["DOCUMENT_ROOT"].'/public/images/album/');
        $count = 0;
        while($file = readdir($dir)){
            if($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)){
                continue;
            }
            $count++;
        }
        return $count-3;
    }
}