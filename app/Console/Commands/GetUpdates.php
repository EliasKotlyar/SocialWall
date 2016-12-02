<?php

namespace App\Console\Commands;

use App\TelegramMessage;
use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Objects\Update;

class GetUpdates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:getupdates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Updates from Telegram';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $offset = (int)TelegramMessage::where('telegramid', '<>', 0)->orderBy('telegramid', 'desc')->value("telegramid");
        $offset++;
        $offsetArray = ['offset'=>$offset];
        $response = Telegram::getUpdates($offsetArray);
        //var_dump($offset);
        foreach($response as $update){
            /** @var Update $update */
            $telegramMessage = $update->getMessage();
            $type =$telegramMessage->detectType();
            var_dump($type);
            if($type =='text' || $type == 'photo') {
                $dbMessage = new TelegramMessage();
                $dbMessage->text = $telegramMessage->getText();
                $dbMessage->telegramid = $update->getUpdateId();
                if($type == 'photo'){
                    $dbMessage->text = "";
                    $photos = $telegramMessage->getPhoto();
                    $photo = $photos[count($photos)-1];
                    $photoID = $photo['file_id'];
                    $photoFile = Telegram::getFile(["file_id"=>$photoID]);
                    $filePath = $photoFile["file_path"];
                    $token = Telegram::getBotConfig();
                    $token = $token['token'];
                    $path = sprintf("https://api.telegram.org/file/bot%s/%s",$token,$filePath);
                    $file = file_get_contents($path);

                    $img = Image::make($file);
                    $fileName = sprintf("imagestorage/%s.jpg",$update->getUpdateId());
                    $img->save($fileName);
                    $dbMessage->image = $fileName;
                }


                $dbMessage->save();
            }




        }


    }
}
