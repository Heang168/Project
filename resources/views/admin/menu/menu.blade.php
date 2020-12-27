@extends('adminlte::page')

@section('title', 'menu')
@section('name')
@section('content_header')
<h1>menu</h1>
<a class="nav-link" href="http://<domain>/admin/blog/new" data-test-one="content-one" data-test-two="content-two">
    <i class="far fa-fw fa-circle"></i>
    <p>New post</p>
</a>
@stop