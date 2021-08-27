<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\Map;
use App\Models\User;
use App\Models\userLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{

    // Base Function
    public function mapSelected($i, $xp, $gold)
    {
        if ($i == 1) {
            $allMaps = Map::where('id', 1)->get();

            // User Selected Character
            $userNpc = Auth::user()->userAvatar;

            // User Inventory
            $userInventoryPizza = Auth::user()->pizza;
            $userInventoryWood = Auth::user()->wood;
            $userInventoryIron = Auth::user()->iron;
            $userInventoryCretanStone = Auth::user()->cretanStone;
            $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

            // Dialog
            $baseDialog = Dialog::where('currentMissionLevel', 1)
                ->whereBetween('id', [12, 18])
                ->get();

            return view('base', compact('allMaps', 'baseDialog', 'userNpc', 'userInventory'));
        };

        if ($i == 2) {

            $allMaps = Map::where('id', 2)->get();

            // Selected character
            $userNpc = Auth::user()->userAvatar;

            // User Inventory
            $userInventoryPizza = Auth::user()->pizza;
            $userInventoryWood = Auth::user()->wood;
            $userInventoryIron = Auth::user()->iron;
            $userInventoryCretanStone = Auth::user()->cretanStone;
            $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

            // DIALOG
            $baseDialog = Dialog::where('currentMissionLevel', 1)
                ->whereBetween('id', [19, 24])
                ->get();

            // User xp, money update
            $currentUserXP = userLevel::where('id', Auth::user()->id)->get()[0]->userExp;
            $currentUserMoney = userLevel::where('id', Auth::user()->id)->get()[0]->userMoney;
            return view('base', compact('allMaps', 'baseDialog', 'userNpc', 'userInventory'));
        }

            // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            // Update kısmında bir hata var. $currentUserXP ve $currentUserMoney o anki kullanıcının verilerini integer olarak alıyor.
            
            // userLevel::where('id', Auth::user()->id)
            //     ->update([
            //         'userLevel' => 1,
            //         'userExp' => ($currentUserXP + $xp),
            //         'userMoney' => ($currentUserMoney + $gold),
            //         'userLastMissionId' => 1,
            //         'userLastDialogId' => 1,
            //         'lastSave' => date('Y-m-d H:i:s')
            //     ]);
            // dd(userLevel::where('id', Auth::user()->id)->get()[0]);
            // userLevel::where('id', Auth::user()->id)
            //     ->update([
            //         'userExp' => ($currentUserXP + $xp),
            //         'userMoney' => ($currentUserMoney + $gold)
            //     ]);


            
    }
    public function mapSelect($i, $xp, $gold)
    {
            $allMaps = Map::where('id', 2)->get();

            // User Selected Character
            $userNpc = Auth::user()->userAvatar;

            // User Inventory
            $userInventoryPizza = Auth::user()->pizza;
            $userInventoryWood = Auth::user()->wood;
            $userInventoryIron = Auth::user()->iron;
            $userInventoryCretanStone = Auth::user()->cretanStone;
            $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

            // Dialog
            $baseDialog = Dialog::where('currentMissionLevel', 1)
                ->whereBetween('id', [12, 18])
                ->get();

            return view('base', compact('allMaps', 'baseDialog', 'userNpc', 'userInventory'));
        }


    public function allmap()
    {
        $maps = Map::where('id', 3)->get();

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        return view('maps', compact('maps', 'userInventory'));
    }

    public function forest()
    {
        // Selected character
        $userNpc = Auth::user()->userAvatar;

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        // Image
        $forestMap = Map::where('id', 4)->get();

        // Dialogs
        $forestDialogs = Dialog::where('currentMissionLevel', 2)->get();

        return view('forest', compact('forestMap', 'forestDialogs', 'userNpc', 'userInventory'));
    }

    public function pizzaStore()
    {
        // Selected character
        $userNpc = Auth::user()->userAvatar;

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        // Image
        $pizzaMap = Map::where('id', 9)->get();

        // Dialogs
        $pizzaDialogs = Dialog::where('currentMissionLevel', 3)->get();


        return view('pizza', compact('userNpc', 'pizzaMap', 'pizzaDialogs', 'userInventory'));
    }

    public function sewerBase()
    {
        // Selected character
        $userNpc = Auth::user()->userAvatar;

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        // Image
        $sewerMap = Map::where('id', 7)->get();

        // Dialogs
        $sewerDialogs = Dialog::where('currentMissionLevel', 16)->get();

        return view('sewerBase', compact('userNpc', 'sewerMap', 'sewerDialogs', 'userInventory'));
    }

    public function blacksmith()
    {
        // Selected Character
        $userNpc = Auth::user()->userAvatar;

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        // Image
        $blacksmithMap = Map::where('id', 11)->get();

        // Dialogs
        $blacksmithDialogs = Dialog::where('currentMissionLevel', 5)->get();

        return view('blacksmith', compact('userNpc', 'blacksmithMap', 'blacksmithDialogs', 'userInventory'));
    }

    public function war()
    {
        // Selected Character
        $userNpc = Auth::user()->userAvatar;

        // User Inventory
        $userInventoryPizza = Auth::user()->pizza;
        $userInventoryWood = Auth::user()->wood;
        $userInventoryIron = Auth::user()->iron;
        $userInventoryCretanStone = Auth::user()->cretanStone;
        $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

        // Image
        $warMap = Map::where('id', 12)->get();

        return view('war', compact('userNpc', 'userInventory', 'warMap'));
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
    public function mapSelected2()
    {
        
            $allMaps = Map::where('id', 2)->get();

            // User Selected Character
            $userNpc = Auth::user()->userAvatar;

            // User Inventory
            $userInventoryPizza = Auth::user()->pizza;
            $userInventoryWood = Auth::user()->wood;
            $userInventoryIron = Auth::user()->iron;
            $userInventoryCretanStone = Auth::user()->cretanStone;
            $userInventory = [$userInventoryPizza, $userInventoryWood, $userInventoryIron, $userInventoryCretanStone];

            // Dialog
            $baseDialog = Dialog::where('currentMissionLevel', 2)
                ->whereBetween('id', [25, 32])
                ->get();

            return view('base2', compact('allMaps', 'baseDialog', 'userNpc', 'userInventory'));
        
    }
}
