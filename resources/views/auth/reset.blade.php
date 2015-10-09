@extends('master')

@section('content')
    <div id="centered-container">
        <div id="centered-div" class="row col-xs-11 col-sm-10 col-md-8 col-lg-6">
            <h4 class="form-signin-heading">Password Reset</h4>

            {!! Form::open(['class' => 'well']) !!}

            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email Field -->
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>

            <!-- Password Field -->
            <div class="form-group">
                {!! Form::label('password', 'New password') !!}
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>

            <!-- Password Confirmation Field -->
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirm your new password') !!}
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Submit Button Field -->
            <div class="form-group">
                {!! Form::submit('Reset Password', ['class' => 'btn btn-default']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@stop