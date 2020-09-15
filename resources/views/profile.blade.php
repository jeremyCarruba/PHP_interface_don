@extends('layouts.app')

@section('page_title', 'Se connecter')
@section('css')
<link href="{{asset('css/style_home.css') }}" rel="stylesheet">
@endsection

@section('content')
<form action="/profile-connect" method="POST">

</form>

@endsection