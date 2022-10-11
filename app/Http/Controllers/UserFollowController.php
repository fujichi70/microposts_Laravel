<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
  
    public function store($id)
    {
        
        \Auth::user()->follow($id);
        
        return back()->with('message','フォローしました');
    }

    
    public function destroy($id)
    {
        
        \Auth::user()->unfollow($id);
        
        return back()->with('message', 'フォローを取り消しました');
    }
}
