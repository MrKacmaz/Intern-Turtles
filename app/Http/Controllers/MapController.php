<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapSelected($i)
    {
        if ($i == 1) {
            $allMaps = Map::where('id', 1)->get();

            // Selected character
            $userNpc = Auth::user()->userAvatar;

            // DIALOG
            $baseDialog = Dialog::where('currentMissionLevel', 1)
                ->whereBetween('id', [12, 18])
                ->get();

            return view('base', compact('allMaps', 'baseDialog', 'userNpc'));
        }

        if ($i == 2) {

            $allMaps = Map::where('id', 2)->get();
            // Selected character
            $userNpc = Auth::user()->userAvatar;
            // DIALOG
            $baseDialog = Dialog::where('currentMissionLevel', 1)
                ->whereBetween('id', [19, 24])
                ->get();
            return view('base', compact('allMaps', 'baseDialog', 'userNpc'));
        }
    }
    public function allmap()
    {
        $maps=Map::where('id',3)->get();
      return view('maps', compact('maps'));
      return view('maps', compact('maps'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        //
    }
}
