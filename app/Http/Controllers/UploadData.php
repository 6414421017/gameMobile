<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class UploadData extends Controller
{
    function uploadData(Request $request) {

        $request->validate([
            'game_name' => 'required',
            'game_detail' => 'required',
            'game_price' => 'required',
            'game_url_video' => 'required',
            'game_img_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // ตรวจสอบไฟล์รูปภาพ
            'game_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // ตรวจสอบว่ามีไฟล์ที่อัพโหลดมาหรือไม่
    if ($request->hasFile('game_img_logo','game_img')) {
        // บันทึกไฟล์ที่อัพโหลด
        $image = $request->file('game_img_logo');
        $image2 = $request->file('game_img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imageName2 = time() . '.' . $image2->getClientOriginalExtension();
        $image->move(public_path('img_logo'), $imageName);
        $image2->move(public_path('img_background'), $imageName2);

        // บันทึกข้อมูลลงในฐานข้อมูล
        Game::create([
            'game_name' => $request->game_name,
            'game_detail' => $request->game_detail,
            'game_price' => $request->game_price,
            'game_url_video' => $request->game_url_video,
            'game_img_logo' => 'img_logo/' . $imageName,
            'game_img' => 'img_background/' . $imageName2,
        ]);

        return redirect()->route('home');
    }
    }

}
