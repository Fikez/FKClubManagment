@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
<div class="col-4"></div>
<div class="col-4">
    @forelse ($players as $player)
    <h1>{{$player->name}}</h1>
<form action="{{route("players.show",$player->id)}}"method="GET">
<button class="btn btn-primary">Profile</button>
</form>

@empty

We don't have any players available at the moment.

    @endforelse
</div>
<div class="col-4"></div>
    </div>
</div>
@endsection
