<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class StatusController extends Controller{

    public function getDataBoss(){
        
        $boss = DB::table('grandboss_data')
        ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
        ->select('grandboss_data.*', 'npc.name', 'npc.level')
        ->get();

        $rboss = DB::table('raidboss_spawnlist')
        ->join('npc', 'raidboss_spawnlist.boss_id', '=', 'npc.id')
        ->select('raidboss_spawnlist.*', 'npc.name', 'npc.level')
        ->orderBy('npc.level', 'desc')
        ->paginate(15); 

        
        
        return view('modules.boss')
         ->with('boss', $boss)
         ->with('rboss', $rboss);
         
    }

}
