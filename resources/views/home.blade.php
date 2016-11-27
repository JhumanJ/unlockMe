@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('common.error-alert')
                    @include('common.success-alert')
                    You have three conversation slots, start looking for some people!

                    <div class="container" style="max-width: 100%;">
                        <div class="col-sm-4 col-xs-12" style="background-color: lightgrey;border-radius: 10px;">
                            @if($slot1=="empty")
                            <a href="{{url('/search/1')}}">No one in this slot click here to randomly add someone!</a>
                            @elseif($slot1 == 'search')
                            <p>We are currently looking for someone that could fit your criterias!</p>
                            @else
                            <p>{{$slot1->first_name}}</p>
                            <a href="{{url('/chat/1')}}">Click here to chat!</a>
                            @endif
                        </div>
                        <div class="col-sm-4 col-xs-12" style="background-color: lightgrey;border-radius: 10px;">
                            @if($slot2=="empty")
                                <a href="{{url('/search/2')}}">No one in this slot click here to randomly add someone!</a>
                            @elseif($slot2== "search")
                                <p>We are currently looking for someone that could fit your criterias!</p>
                            @else
                                <p>{{$slot2->first_name}}</p>
                                <a href="{{url('/chat/2')}}">Click here to chat!</a>
                            @endif                        </div>
                        <div class="col-sm-4 col-xs-12" style="background-color: lightgrey;border-radius: 10px;">
                            @if($slot3=="empty")
                                <a href="{{url('/search/3')}}">No one in this slot click here to randomly add someone!</a>
                            @elseif($slot3== "search")
                                <p>We are currently looking for someone that could fit your criterias!</p>
                            @else
                                <p>{{$slot3->first_name}}</p>
                                <a href="{{url('/chat/3')}}">Click here to chat!</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
