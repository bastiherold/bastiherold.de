@extends('layouts.page')

@section('content')
    <nav id="top" class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" title="#!/bin/bash"><i class="fa fa-terminal"></i><span class="js_project-text" data-text="Project Name">$ bastiherold.de</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="nav_type" class="nav navbar-nav navbar-right">
                    <li title="Home"><a href="#top"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li title="Home"><a href="#skills"><i class="fa fa-code" aria-hidden="true"></i> Kompetenzen</a></li>
                    <li title="Kontakt"><a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i> Kontakt</a></li>
                    <li title="Impressum"><a href="#legal"><i class="fa fa-gavel" aria-hidden="true"></i> Impressum</a></li>
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
@endsection
