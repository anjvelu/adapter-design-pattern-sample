<?php

namespace App;

class FileHandler implements FileStore
{

    private const BASE = __DIR__ . "/../data/";

    public function write(string $file_name, string $data) : string {
        file_put_contents(self::BASE . $file_name, $data);
        return $this->read(self::BASE . $file_name);
    }

    public function read(string $file_name) : string {
        $data = "";
        if( file_exists(self::BASE . $file_name) ) {
            $data = file_get_contents(self::BASE . $file_name);
        }
        return $data;
    }

}
