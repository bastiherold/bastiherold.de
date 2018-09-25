@extends('layouts.page')

@section('content')
    <nav id="top" class="navbar navbar-default navbar-static-top app">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                @if (Auth::check())
                <a class="navbar-brand" href="{{ route('admin.home') }}" title="#!/bin/bash">
                    <i class="fas fa-sign-in-alt"></i>
                    <span class="js_project-text">Dashboard</span>
                </a>
                @else  
                    <a class="navbar-brand" href="/" title="#!/bin/bash">
                        <i class="fa fa-xs fa-terminal"></i>
                        <span class="js_project-text">$ bastiherold.de</span>
                    </a>
                @endif
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="nav_type" class="nav navbar-nav navbar-right">
                    <navbarlink-component title="Home" href="#top" classes="fa fa-home">Home</navbarlink-component>
                    <navbarlink-component title="Skills" href="#skills" classes="fa fa-code">Kompetenzen</navbarlink-component>
                    <navbarlink-component title="Kontakt" href="#contact" classes="fa fa-envelope">Kontakt</navbarlink-component>
                    <navbarlink-component title="Impressum" href="#legal" classes="fa fa-gavel">Impressum</navbarlink-component>
                    <navbarlink-component title="Datenschutz" href="#privacy" classes="fas fa-user-secret">Datenschutz</navbarlink-component>
                </ul>

            </div>
        </div>
    </nav>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('status'))
        <div class="alert flash-message alert-success">
            <ul>
                <li>
                    {{ session()->get('status') }}
                </li>
            </ul>
        </div>
    @endif

    @include('singlepage.home-section')

    @include('singlepage.skills-section')

    @include('singlepage.contact-section')

    @include('singlepage.imprint-section')

    @include('singlepage.privacy-section')
@endsection
