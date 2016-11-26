<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;

class Twilio extends Model
{

    protected static $sid = 'AC2c000643ec0e654e7e66be3b22e29dc5';
    protected static $token = '60c7929b7dc82b006ce9f458bac172fd';
    protected static $twilio_number = '+442003331679';

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

}
