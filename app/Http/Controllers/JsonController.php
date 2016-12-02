<?php

namespace App\Http\Controllers;

use App\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Objects\Update;

class JsonController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */
    public function getJson()
    {

        $telegramMessages = TelegramMessage::all();

        $retArr = [];
        foreach ($telegramMessages as $telegramMessage) {
            $arr = [
                'img_url' => $telegramMessage->getImageUrl(),
                'caption' => $telegramMessage->username,
                'text' => $telegramMessage->text
            ];


            $retArr[] = $arr;


        }


        return response()->json($retArr);
    }
}