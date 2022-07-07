@extends('layouts.default')
@section('title','用户列表')
@section('content')
<div class="offset-md-2 col-md-8">
  <h2 class="mb-4 text-center">所有用户</h2>
  <div class="list-group list-group-flush">
    @foreach ($users as $user)
        <div class="list-group-item">
            <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width="32"/>
            <a href="{{ route('users.show',$user) }}">{{ $user->name }}</a>
        </div>
    @endforeach
@stop