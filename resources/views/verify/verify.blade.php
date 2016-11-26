@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Verify your number!</div>

                    <div class="panel-body">

                        @include('common.error-alert')
                        @include('common.success-alert')

                        Hello {{$user->first_name}}!
                        <br><br>
                        Thanks for creating an UnlockMe account! Now we just need to confirm you phone number.<br>
                        We sent you an SMS containing your verifying number, please type it in!

                            <form style="padding-top: 25px;" method="POST" action="{{ url('/verify') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-3">
                                    <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required autofocus placeholder="Ex: {{$code}}">

                                    @if ($errors->has('code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" style="padding-top: 25px; padding-bottom: 25px;">
                                <br>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-default center-block">Verify!</button>
                                </div>
                            </div>

                            <p class="text-center"><br>You didn't receive anything? <a href="{{url('verify/resend')}}">Click here</a> and we'll send you another code.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
