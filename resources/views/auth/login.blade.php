@extends('app')

@section('title', 'Se connecter')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="page-header">Se connecter</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    {!! BootForm::open() !!}
                    {!! BootForm::email('Adresse Email', 'email') !!}
                    {!! BootForm::password('Mot de passe', 'password') !!}
                    {!! BootForm::checkbox('Se souvenir de moi', 'remember') !!}
                    {!! BootForm::submit('Se connecter')->addClass('btn-primary center-block') !!}
                    {!! BootForm::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection