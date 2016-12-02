<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TelegramMessage extends Model
{
    //
    public function getImageUrl()
    {

        $url = Storage::url($this->image);
        return $url;
    }

}
