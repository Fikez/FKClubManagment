@extends('layouts.app')
@section('content')
<h1>Edit</h1>
<div class="container">
    <div class="row">
        <div class="col-4">@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif</div>
        <div class="col-4">
            <form action="{{route("players.update",$player->id)}}"method="POST">
                @csrf
                @method("PUT")
               <label for="text">Name:</label>
            <input class="form-control" type="text" name="name" value="{{$player->name}}"><br>
               <label for="date">Birthday:</label>
            <input class="form-control" type="date" name="birthday" value="{{$player->birthday}}"><Br>
               <label for="text">Country:</label>
            <input class="form-control" type="text" name="country" value="{{$player->country}}"><Br>
               <label for="text">Position:</label>
            <input class="form-control" type="text" name="position" value="{{$player->position}}"><Br>
               <label for="text">Height:</label>
            <input class="form-control" type="text" name="height" value="{{$player->height}}"><Br>
                <label for="date">Date joined:</label>
            <input class="form-control" type="date" name="date_joined" value="{{$player->date_joined}}"><br>
                <label for="text">Career:</label>
            <input class="form-control" type="career" name="career" value="{{$player->career}}"><Br>
                    <label for="text">Email:</label>
            <input class="form-control" type="email" name="email" value="{{$player->email}}"><br>
                <button class="btn btn-primary float-right">Save me</button>
                </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
