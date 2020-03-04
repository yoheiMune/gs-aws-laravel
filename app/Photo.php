<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    function getAbsolutePathAttribute() {
        if (!$this->path) {
            return null;
        }
        return env('AWS_URL') . '/' . $this->path;
    }
}
