@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                   {!! form::open(['url'=>'login','class'=>'form-horizontal']) !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! form::label('email','Alamat email',['class'=>'col-md-4 control-label']) !!}
                             <div class="col-md-6">
                            {!! form::email('email',null,['class'=>'form-control']) !!}
                            {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password')? 'has-error':'' }}">
                        {!! form::label('password','password',['class'=>'cold-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! form::password('password',['class'=>'form-control']) !!} 
                            {!! $errors->first('password','<p class=>"help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    {!! form::checkbox('remember')!!} ingat saya
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class"btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> login
                            </button>

                            <a class="btn btn-link" herf="{{ url('/password/reset') }}">lupa password</a>
                        </div>
                    </div>
                    {!! form::close() !!}
