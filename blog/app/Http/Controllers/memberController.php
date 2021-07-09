<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class memberController extends Controller
{
    function show()
    {
        $data=Post::paginate(1);
        return view('details',['posts'=>$data]);
    }
}
