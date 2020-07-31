<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view("players.index")->with("players",$players);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("players.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([

           "name" => "required",
            "birthday" => "required",
            "country" => "required",
            "position" => "required",
            "height" => "required",
            "date_joined" => "required",
            "career" => "required",
            "email" => "required",
       ]);
       $player=new Player;
       $player->name = $request->name;
       $player->birthday = $request->birthday;
       $player->country = $request->country;
       $player->position = $request->position;
       $player->height = $request->height;
       $player->date_joined = $request->date_joined;
       $player->career = $request->career;
       $player->email = $request->email;
       $player->save();
       return redirect('/players');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {

        return view("players.show")->with("player",$player);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view("players.edit")->with("player",$player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {

        $request->validate([

            "name" => "required",
             "birthday" => "required",
             "country" => "required",
             "position" => "required",
             "height" => "required",
             "date_joined" => "required",
             "career" => "required",
             "email" => "required",
        ]);
        $player->name = $request->name;
        $player->birthday = $request->birthday;
        $player->country = $request->country;
        $player->position = $request->position;
        $player->height = $request->height;
        $player->date_joined = $request->date_joined;
        $player->career = $request->career;
        $player->email = $request->email;
        $player->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {

        $player->delete();
        return redirect('/players');
    }
}
