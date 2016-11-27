<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Twilio\Rest\Client;

class Twilio extends Model
{

    protected static $sid = 'AC2c000643ec0e654e7e66be3b22e29dc5';
    protected static $token = '60c7929b7dc82b006ce9f458bac172fd';
    protected static $twilio_number = '+442003331679';
    protected static $servicesid = 'IS2d04a71e530948b0a6d30c316b64ae9a';

    // Messages


    public static function sendSms($number,$message){

        $client = new Client(Twilio::$sid, Twilio::$token);

        $client->messages->create(
        // the number you'd like to send the message to
           $number,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => Twilio::$twilio_number,
                // the body of the text message you'd like to send
                'body' => $message
            )
        );
    }

    public static function createChannel($match){

        $client = new Client(Twilio::$sid, Twilio::$token);

        $channel = $client->ipMessaging
            ->services(Twilio::$servicesid)
            ->channels
            ->create(
                array(
                    'friendlyName' => $match->id,
                    'uniqueName' => $match->id,
                    'type' => 'private',
                )
            );

        $client->ipMessaging
            ->services(Twilio::$servicesid)
            ->channels($channel->sid)
            ->members
            ->create($match->user_id_1);

        $client->ipMessaging
            ->services(Twilio::$servicesid)
            ->channels($channel->sid)
            ->members
            ->create($match->user_id_2);

        $members = $client->ipMessaging
            ->services(Twilio::$servicesid)
            ->channels($channel->sid)
            ->members
            ->read();

        return $channel->sid;


    }

    public static function deleteChannel($channel_sid){
        $client = new Client(Twilio::$sid, Twilio::$token);

        $client->ipMessaging
            ->services(Twilio::$servicesid)
            ->channels($channel_sid)
            ->delete();
    }


}
