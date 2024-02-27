<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'participant_count' => 'required|integer',
        ]);
    }
}
