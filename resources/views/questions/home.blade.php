<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 27/11/2016
 * Time: 08:50
 */?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                @include('common.error')

                <p class="text-center" id="intro">Just before you can start using the app, we would like to ask you few questions. Try to be as honest as possible. You will be able to make this informations available to other users by unlocking them. Enjoy!</p>

                <form method="POST" action="{{ url('/questions') }}" >
                    {{ csrf_field() }}
                    <div id="question1">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 1</h3>
                                        <br>
                                        <p>What's your name ?</p>
                                        <textarea class="form-control" type="text"  name="answer1"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-1" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question2">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 2</h3>
                                        <br>
                                        <p>How old are you ?</p>
                                        <textarea class="form-control" type="text"  name="answer2"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-2" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 3</h3>
                                        <br>
                                        <p>Do you have any phobias ?</p>
                                        <textarea class="form-control" type="text"  name="answer3"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-3" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question4">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 4</h3>
                                        <br>
                                        <p>What is the best vacation that you took ?</p>
                                        <textarea class="form-control" type="text"  name="answer4"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-4" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question5">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 5</h3>
                                        <br>
                                        <p>What was the worst lie you told your parents ?</p>
                                        <textarea class="form-control" type="text"  name="answer5"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-5" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question6">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 6</h3>
                                        <br>
                                        <p>what is the strangest habit you ever had ?</p>
                                        <textarea class="form-control" type="text"  name="answer6"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-6" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question7">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 7</h3>
                                        <br>
                                        <p>What do you want to be known for ?</p>
                                        <textarea class="form-control" type="text"  name="answer7"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-7" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question8">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 8</h3>
                                        <br>
                                        <p> What's the most stupid thing you've ever done for love ? </p>
                                        <textarea class="form-control" type="text"  name="answer8"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-8" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question9">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 9</h3>
                                        <br>
                                        <p>if you could write a note to a younger self, what would you say in only 2 words ?</p>
                                        <textarea class="form-control" type="text"  name="answer9"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-9" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question10">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 10</h3>
                                        <br>
                                        <p>What's an accomplishment you're really proud of ?</p>
                                        <textarea class="form-control" type="text"  name="answer10"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-10" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question11">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 11</h3>
                                        <br>
                                        <p>name 5 things you would like to do before you're forty</p>
                                        <textarea class="form-control" type="text"  name="answer11"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-11" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question12">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 12</h3>
                                        <br>
                                        <p>What are your biggest pet peeves ?</p>
                                        <textarea class="form-control" type="text"  name="answer12"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-12" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question13">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 13</h3>
                                        <br>
                                        <p>if one song were to describe your life, what song would it be ?</p>
                                        <textarea class="form-control" type="text"  name="answer13"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-13" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question14">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 14</h3>
                                        <br>
                                        <p>If you could play a part in a movie, what would it be ?</p>
                                        <textarea class="form-control" type="text"  name="answer14"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-14" class="btn btn-primary" type="button">Next</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question15">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-12">
                                <div class="thumbnail">

                                    <div class="caption text-center">
                                        <h3>Question 15</h3>
                                        <br>
                                        <p>What's the last mistake you made that you're sure you'll probably make again ?</p>
                                        <textarea class="form-control" type="text"  name="answer15"></textarea>
                                        <br>
                                        <br>
                                        <p><button id="btn-15" class="btn btn-primary" type="submit">Submit</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
@endsection

@section('js')
    <script type="application/javascript">
        $('#question2').hide();
        $('#question3').hide();
        $('#question4').hide();
        $('#question5').hide();
        $('#question6').hide();
        $('#question7').hide();
        $('#question8').hide();
        $('#question9').hide();
        $('#question10').hide();
        $('#question11').hide();
        $('#question12').hide();
        $('#question13').hide();
        $('#question14').hide();
        $('#question15').hide();


        $('#btn-1').click(function(){
            $('#question1').hide();
            $('#intro').hide();
            $('#question2').show();
        })

        $('#btn-2').click(function(){
            $('#question2').hide();
            $('#question3').show();
        })

        $('#btn-3').click(function(){
            $('#question3').hide();
            $('#question4').show();
        })

        $('#btn-4').click(function(){
            $('#question4').hide();
            $('#question5').show();
        })

        $('#btn-5').click(function(){
            $('#question5').hide();
            $('#question6').show();
        })

        $('#btn-6').click(function(){
            $('#question6').hide();
            $('#question7').show();
        })

        $('#btn-7').click(function(){
            $('#question7').hide();
            $('#question8').show();
        })

        $('#btn-8').click(function(){
            $('#question8').hide();
            $('#question9').show();
        })

        $('#btn-9').click(function(){
            $('#question9').hide();
            $('#question10').show();
        })
        $('#btn-10').click(function(){
            $('#question10').hide();
            $('#question11').show();
        })

        $('#btn-11').click(function(){
            $('#question11').hide();
            $('#question12').show();
        })

        $('#btn-12').click(function(){
            $('#question12').hide();
            $('#question13').show();
        })

        $('#btn-13').click(function(){
            $('#question13').hide();
            $('#question14').show();
        })
        $('#btn-14').click(function(){
            $('#question14').hide();
            $('#question15').show();
        })
    </script>
@endsection

