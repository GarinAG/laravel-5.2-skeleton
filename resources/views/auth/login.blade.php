@extends('layouts.master')
@section('body')
    <br><br>
    <div class="row">
        <div class="column small-6 small-centered">
            {!! Form::open() !!}
            @include('widgets.form._formitem_text', ['name' => 'email', 'title' => 'Email', 'placeholder' => 'Ваш Email' ])
            @include('widgets.form._formitem_password', ['name' => 'password', 'title' => 'Пароль', 'placeholder' => 'Пароль' ])
            @include('widgets.form._formitem_checkbox', ['name' => 'remember', 'title' => 'Запомнить меня'] )
            @include('widgets.form._formitem_btn_submit', ['title' => 'Вход'])
            {!! Form::close() !!}
            <p><a href="{{URL::to('/reset')}}">Забыли пароль?</a></p>
        </div>
    </div>
@stop