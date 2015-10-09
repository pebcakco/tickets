@extends('master')

@section('content')
	<div id="centered-container">
        <div id="centered-div" class="row col-xs-11 col-sm-8 col-md-6 col-lg-5">
            <h4 class="form-signin-heading">Login</h4>

            {!! Form::open(['class' => 'well']) !!}

                    <!-- Email Field -->
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required',
                     'autofocus' => 'autofocus']) !!}
                </div>
            </div>

            <!-- Password Field -->
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                        <!-- Forgot Password -->
                <b>{!! HTML::link('/password_reset', '(forgot password?)')!!}</b>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
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

            <div class="form-group">
                <!-- Submit Button Field -->
                {!! Form::submit('Login', [ 'class' => 'btn btn-default']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>
@stop