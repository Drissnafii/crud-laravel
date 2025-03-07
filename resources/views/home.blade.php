@extends('includes.master')
@section('main')
<h1>Home Page</h1>

<x-alert :type=""/>

<x-users-table :users="$users/>
@endsection
