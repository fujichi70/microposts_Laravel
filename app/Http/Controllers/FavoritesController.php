<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($micropostId) {
       \Auth::user()->favorite($micropostId);
        
        return back()->with('message','お気に入りしました');
    }
    
    public function destroy($micropostId)
    {
        \Auth::user()->unfavorite($micropostId);
        
        return back()->with('message', 'お気に入りを取り消しました');
    }
}
