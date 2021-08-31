<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function selectCharacter()
    {
        $micmicello = Avatar::where('id', 1)->get();
        $lavobardo = Avatar::where('id', 2)->get();
        $rapoyel = Avatar::where('id', 3)->get();
        $domasteslo = Avatar::where('id', 4)->get();
        $characters = [$micmicello, $lavobardo, $rapoyel, $domasteslo];
        return view('dashboard', compact('characters'));
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
    public function credit()
    {
        return view('/credits');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(User $userLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $userLevel, $id)
    {
        $currAuthId = Auth::user()->id;
        User::where('id', $currAuthId)->update(['userAvatar' => $id]);

        return redirect('/base/1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userLevel  $userLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $userLevel)
    {
        //
    }
}
