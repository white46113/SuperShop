<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class NewController extends Controller
{
    public function indexLatest(){
        $photo = new Photo;
        // $data = Photo::getDummyData();
        $data = $photo->getDummyData();
    }
}
