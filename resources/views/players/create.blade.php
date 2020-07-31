@extends('layouts.app')
@section('content')
<h1>Ovde pravimo playera</h1>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="{{route("players.store")}}"method="POST">
                @csrf
               <label for="text">Name:</label>
               <input class="form-control" type="text" name="name" id=""><br>
               <label for="date">Birthday:</label>
               <input class="form-control" type="date" name="birthday" id=""><Br>
               <label for="text">Country:</label>
               <input class="form-control" type="text" name="country" id=""><Br>
               <label for="text">Position:</label>
               <input class="form-control" type="text" name="position" id=""><Br>
               <label for="text">Height:</label>
               <input class="form-control" type="text" name="height" id=""><Br>
                <label for="date">Date joined:</label>
                <input class="form-control" type="date" name="date_joined" id=""><br>
                <label for="text">Career:</label>
                <input class="form-control" type="career" name="career" id=""><Br>
                    <label for="text">Email:</label>
                    <input class="form-control" type="email" name="email" id=""><br>
                <button class="btn btn-primary float-right">Save me</button>
                </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
