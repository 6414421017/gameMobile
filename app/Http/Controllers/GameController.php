<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Recommend;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function setGamesData() {
        $dataGames = Game::all();
        $dataRecom = Recommend::all();
        return view('home', compact('dataGames', 'dataRecom'));
    }

    function fetchgameData($id) {
        $fetchData = optional(Game::find($id));
        return view('home_detail', compact('fetchData'));
    }


    // SendData
    function sendData(){
        $DataG = Game::all();
        return view('game-delete', compact('DataG'));
    }


    function deleteGames($id){
        // หาข้อมูลเกมที่ต้องการลบ
    $game = Game::find($id);

    // ตรวจสอบว่ามีข้อมูลเกมหรือไม่
    if ($game) {
        // ลบเกม
        $game->delete();

        // ลบไฟล์รูปที่อยู่ใน public
        unlink(public_path($game->game_img_logo));
        unlink(public_path($game->game_img));

        $DataG = Game::all();
        // แสดงหน้า view ที่ต้องการ
        return view('game-delete',compact('DataG'));
    } else {
        // กรณีไม่พบข้อมูลเกม
        return redirect()->back()->with('error', 'Game not found');
    }
    }
}
