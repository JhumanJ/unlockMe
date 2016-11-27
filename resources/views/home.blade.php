@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @include('common.error-alert')
            @include('common.success-alert')
            <p class="text-center">You have three conversation slots, start looking for some people!</p>
            <br><br><br>

            <div class="container" style="max-width: 100%;">
                <div class="col-sm-4 col-xs-12 text-center">
                    @if($slot1=="empty")
                        <div class="text-center">
                            <a href="{{url('/search/1')}}">
                                <span class="fa-stack fa-5x" style="color:#FF69B4;">
                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                  <i class="fa fa-plus fa-stack-1x"></i>
                            </a>
                        </div>

                    @elseif($slot1 == 'search')
                        <div class="text-center">
                            <br>
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="color:#FF69B4;"></i>
                        </div>
                    @else

                        <a href="{{url('/chat/1')}}">
                            <img src="{{$slot1->gender==1?"img/guy1crop.png":"img/girl1crop.png"}}" class="img-circle center-block img-profile conversation" src="http://placehold.it/200x200" alt="">
                        </a>
                        <p class="text-center"><i  class="glyphicon glyphicon-remove" type="button" style="color:red; font-size:3em;" data-toggle="modal" data-target="#modal1"></i></p>
                        <div id="modal1" class="modal fade" role='dialog' aria-labelledby="modal1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Delete </h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you Really want to let this lovely person go away ? This action is irreversible.</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a href="{{url('/chat/delete/1')}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endif
                </div>
                <div class="col-sm-4 col-xs-12">
                    @if($slot2=="empty")
                        <div class="text-center">
                            <a href="{{url('/search/2')}}">
                                <span class="fa-stack fa-5x" style="color:#FF69B4;">
                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                  <i class="fa fa-plus fa-stack-1x"></i>
                            </a>
                        </div>
                    @elseif($slot2== "search")
                        <div class="text-center">
                            <br>
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="color:#FF69B4;"></i>
                        </div>
                    @else
                        <a href="{{url('/chat/2')}}">
                            <img src="{{$slot2->gender==1?"img/guy2crop.png":"img/girl2crop.png"}}" class="img-circle center-block img-profile conversation" src="http://placehold.it/200x200" alt="">
                        </a>
                        <p class="text-center"><i  class="glyphicon glyphicon-remove" style="color:red; font-size:3em;" data-toggle="modal" data-target="#modal2"></i></p>
                        <div id="modal2" class="modal fade" role='dialog' aria-labelledby="modal2">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Delete </h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you Really want to let this lovely person go away ? This action is irreversible.</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a href="{{url('/chat/delete/2')}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endif                        </div>
                <div class="col-sm-4 col-xs-12">
                    @if($slot3=="empty")
                        <div class="text-center">
                            <a href="{{url('/search/3')}}">
                                <span class="fa-stack fa-5x" style="color:#FF69B4;">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <i class="fa fa-plus fa-stack-1x"></i>
                            </a>
                        </div>
                    @elseif($slot3== "search")
                        <div class="text-center">
                            <br>
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="color:#FF69B4;"></i>
                        </div>
                    @else
                        <div class="col-sm-4 col-xs-12 text-center">
                            <a href="{{url('/chat/3')}}">  <img src="{{$slot3->gender==1?"img/guy3crop.png":"img/girl3crop.png"}}" class="img-circle center-block img-profile conversation" src="http://placehold.it/200x200" alt="">
                            </a>
                            <p class="text-center"><i  class="glyphicon glyphicon-remove" style="color:red; font-size:3em;" data-toggle="modal" data-target="#modal3"></i></p>
                            <div id="modal3" class="modal fade" role='dialog' aria-labelledby="modal3">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Delete </h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you Really want to let this lovely person go away ? This action is irreversible.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="{{url('/chat/delete/3')}}"><button type="button" class="btn btn-danger">Delete</button></a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                    @endif
                </div>
            </div>

    </div>
</div>
@endsection
