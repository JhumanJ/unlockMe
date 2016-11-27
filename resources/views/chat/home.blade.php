<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 27/11/2016
 * Time: 00:11
 */?>

@extends('layouts.app')

@section('content')

    <div class="main-wrap fill">
        <div class="row fill">

            <div class="col-sm-offset-2 col-sm-8 col-xs-12" style="height: 90%;">
                <div class="panel panel-info" style="height: 90%; border: 1px solid #ddd !important;-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05) !important;box-shadow: 0 1px 1px rgba(0,0,0,.05) !important; border-radius: 0px;">
                    <!--background: linear-gradient(to bottom, white, #FF69B4);-->
                    <div class="panel-body chatPlatformPos">
                        <div id="messages" style="width: 100%; ">

                            @foreach($messages as $message)
                                @if($message->user_id==\Illuminate\Support\Facades\Auth::user()->id)
                                    <div class="message-container me">
                                        <span class="username"></span><span class="message">{{$message->content}}</span>
                                    </div>
                                @else
                                    <div class="message-container notme">
                                        <span class="username"></span><span class="message">{{$message->content}}</span>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>
                    <div class="panel-footer" style="border: 1px solid #ddd !important;">
                        <div class="input-group">
                            <input id ="chat-input" class="form-control" type="text" placeholder="" autofocus/>

                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal3"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
                                <button id="send" class="btn btn-info" type="submit">SEND</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal3" class="modal fade" role='dialog' aria-labelledby="modal3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <div class="modal-title" style="margin-bottom: 30px;"><h1> My Secrets </h1>
                    <b>Choose what to unlock and reveal to your match here</b>
                    </div>

                    <div class="modal-body" >
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">Name</p>
                            <button id="btn1" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">Age</p>
                            <button id="btn2" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">Do you have any phobias?</p>
                            <button id="btn3" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                         </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What is the best vacation that you took?</p>
                            <button id="btn4" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What is the worst lie you told your parents?</p>
                            <button id="btn5" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What is the strangest habbit that you've ever had?</p>
                            <button id="btn6" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What do you want to be known for?</p>
                            <button id="btn7" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What is the most stupid thing you've ever done for love?</p>
                            <button id="btn8" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">If you could write a note to a younger self, what would you say in only two words?</p>
                            <button id="btn9" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What's an accomplishment you're really proud of?</p>
                            <button id="btn10" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">Name five new things you would like to learn before you're forty.</p>
                            <button id="btn11" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What are your biggest pet peeves?</p>
                            <button id="btn12" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">If one song were to describe your life, what song would it be?</p>
                            <button id="btn13" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">If you could play a part in a movie what would it be?</p>
                            <button id="btn14" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>
                        <br>
                        <div class="row">
                            <p class="col-md-9" style="text-align: left;">What's the last mistake you made that you're sure you will probably make again?</p>
                            <button id="btn15" type="button" class="btn btn-danger col-md-3" data-dismiss="modal" style="text-align: right"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Unlock</button>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                    </div>

                </div>
            </div>
        </div>


@endsection

@section('js')

    <script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>
    <script src="//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.10/twilio-ip-messaging.min.js"></script>
    <script type="application/javascript">

        $('#messages').scrollTop($('#messages')[0].scrollHeight);

        // Get handle to the chat div
        var $chatWindow = $('#messages');

        // Manages the state of our access token we got from the server
        var accessManager;

        // Our interface to the IP Messaging service
        var messagingClient;

        var channel = "{{strval($match->id)}}";
        var myChannel;

        var username = {{\Illuminate\Support\Facades\Auth::user()->id}}

        // Helper function to print info messages to the chat window
        function print(infoMessage, asHtml) {
            var $msg = $('<div class="info">');
            if (asHtml) {
                $msg.html(infoMessage);
            } else {
                $msg.text(infoMessage);
            }
            $chatWindow.append($msg);
        }

        // Helper function to print chat message to the chat window
        function printMessage(fromUser, message) {

            var $user = $('<span class="username">');
            var $container = $('<div class="message-container">');
            if (fromUser == username) {
                //$user.addClass('me');
                $container.addClass('me');
            } else {
                $container.addClass('notme');
            }
            var $message = $('<span class="message">').text(message);
            $container.append($user).append($message);
            $chatWindow.append($container);
            $chatWindow.scrollTop($chatWindow[0].scrollHeight);

        }

        // Alert the user they have been assigned a random username
        //print('Logging in...');

        // Get an access token for the current user, passing a username (identity)
        // and a device ID - for browser-based apps, we'll always just use the
        // value "browser"
        $.post('/api/token', {
            identity: username,
            device: 'browser'
        }, function(data) {
            // Alert the user they have been assigned a random username
            username = data.identity;
            // print('You have been assigned a random username of: '
            //    + '<span class="me">' + username + '</span>', true);

            // Initialize the IP messaging client
            accessManager = new Twilio.AccessManager(data.token);
            messagingClient = new Twilio.IPMessaging.Client(accessManager);

            //connect to channel
            var promise = messagingClient.getChannelByUniqueName(channel);
            promise.then(function(channel) {
                myChannel = channel;

                console.log('Found channel:');
                console.log(myChannel);
                setupChannel();

            });
        });

        // Set up channel after it has been found
        function setupChannel() {
            // Join the general channel
            myChannel.join();
            /*.then(function(channel) {

             print('Joined channel as '
             + '<span class="me">' + username + '</span>.', true);
             });*/
            console.log('Connected');
            // Listen for new messages sent to the channel
            myChannel.on('messageAdded', function(message) {
                //document.getElementById("messages").innerHTML = "<div class='direct-chat-text'>" + message.body + "</div>"
                printMessage(message.author, message.body);
            });
        }

        // Send a new message to the general channel
        var $input = $('#chat-input');
        var $buttonSend = $('#send');

        $buttonSend.click(function() {
            sendMessage();
        });

        $input.on('keydown', function(e) {
            if (e.keyCode == 13) {
                sendMessage();
            }
        });

        function sendMessage(){
            myChannel.sendMessage($input.val())
            console.log('testtt');
            $.post('/api/chat/message/add', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                message_content: $input.val(),
            });
            $input.val('');
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

        }

        $('#btn1').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 1,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn2').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 2,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn3').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 3,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn4').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 4,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn5').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 5,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn6').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 6,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn7').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 7,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn8').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 8,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn9').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 9,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn10').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 10,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn11').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 11,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn12').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 12,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn13').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 13,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/get/{{$match->id}}/13", function( data ) {
                answer = data.answer;
                console.log(answer);
            });

            var $msg = 'Your match has unlocked something new: '+ answer;
            myChannel.sendMessage($msg);
            $.post('/api/chat/message/add', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                message_content: $msg
            });
        });

        $('#btn14').click(function(){
            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 14,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });

        });

        $('#btn15').click(function(){

            $.post('/api/unlock', {
                match_id: {{$match->id}},
                user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                question_id: 15,
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

            var answer;

            $.getJSON( "/answer/getmine/1", function( data ) {
                answer = data.answer;
                var msg = "Your match has unlocked something new: "+ answer;
                myChannel.sendMessage(msg);
                $.post('/api/chat/message/add', {
                    match_id: {{$match->id}},
                    user_id: {{\Illuminate\Support\Facades\Auth::user()->id}},
                    message_content: msg
                });
            });
        });



    </script>

@endsection

