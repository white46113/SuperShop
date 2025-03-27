<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function getDummyData(){
        $customers = json_decode(json_encode(DB::table('customers')->get()), true);
        dd($customers);
    }
}
