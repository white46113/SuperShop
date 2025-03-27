<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;


class User extends Controller
{
    public function login(){
        return view('shop-item');
    }
    public function save(Request $request){
        $data = $request->all();
        $new_obj = new Users;
        $data = $new_obj->getData();
        echo json_encode($data);
    }
}
