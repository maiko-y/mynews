{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'profile作成'を埋め込む --}}
@section('title', 'profile作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>profile作成</h2>
            </div>
        </div>
    </div>
@endsection<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-
    Compatible" content = "IE = edge">
        <meta name = "viewport"
    content = "width = device-width,
    initial-scale = 1">
    
        <title>profile</title>
        </head>
        <body>
            <h1>profile作成画面</h1>
        </body>
    </html>
    