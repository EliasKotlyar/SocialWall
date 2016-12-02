<?php

namespace App\Http\Controllers;

use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Objects\Update;

class JsonController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getJson()
    {
        $response = Telegram::getUpdates();
        $retArr = [];
        foreach($response as $update){
            /** @var Update $update */
            $message = $update->getMessage();
            $arr = [
                'img_url' => 'https://farm6.staticflickr.com/5777/30466793223_4db93b3b36.jpg',
                'caption' => $message->getFrom()->getUsername(),
                'text' => $message->getText()
            ];


            $retArr[] = $arr;


        }


        return response()->json($retArr);
    }
}