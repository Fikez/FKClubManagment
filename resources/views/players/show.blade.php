@extends('layouts.app')
@section('content')
<div class="containter">
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
    <h1>Name: {{$player->name}}</h1>
    <h3>Country:{{$player->country}}</h3>
    <h3>Birthday:{{$player->birthday}}</h3>
        <h3>Position:{{$player->position}}</h3>
        <h3>Height:{{$player->height}}</h3>
        <h3>Date joined:{{$player->date_joined}}</h3>
        <h3>Career:{{$player->career}}</h3>
        <h3>Email:{{$player->email}}</h3>
    <form action="{{route("players.edit",$player->id)}}">
        <button class="btn btn-success">Edit</button>
    </form>
    <form method="POST" action="{{route("players.destroy",$player->id)}}">
        @method("DELETE")
        @csrf
        <button class="btn btn-danger">Delete</button>
    </form>

    </div>
    <div class="col-4"></div>
    </div>
</div>
@endsection
