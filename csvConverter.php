<?php

namespace App;

class csvConverter{
    public function __construct($file){
        $this->path = $file;
    }
    
    
    public function uploadData(){
        $open = fopen($this->path , 'r');
        $data = fgetcsv($open, 1000, ',');

        while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
            // Read the data and upload to DB
            print_r($data);
        };
        fclose($open);
    }
}

// $cs = new csvConverter('./test-php-user-directory/sampla-data.csv');
// $cs->uploadData();