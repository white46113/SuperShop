<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use App\Facades\ItemFacade;

$cur_model = '';

class User extends Controller
{
    public function __construct(Type $var = null) {
        $this->cur_model = new Users;
    }
    public function login(){
        // return view('shop-item');
    // return view('shop-checkout');
    $new_obj = new Users;
    $data = $new_obj->getData();
    $ret_data['data'] = $data;
    return view('shop-product-list',$ret_data);

    }
    public function save(Request $request){
        $data = $request->all();
        $new_obj = new Users;
        $data = $new_obj->getData();
        echo json_encode($data);
    }

    public function show($slug = '',$id = ''){
       $data = ItemFacade::getItemById(1);
       $item_data = $data->getAttributes();
       pr($item_data);
       
        return view($slug);
    }
    public function loadCategoryForm(){
        return view('add_categories');
    }
    public function SubmitCategory(Request $request){
        // $data = $this->cur_model->getData();
        $post_data = $request->all();
      
        // $data =  DB::table('categories')
        // ->select('*')
        // ->get();
        // pr($data,1);
        DB::enableQueryLog();

        $insert_arr = array('category_name' => $post_data['category_name']);
        $query = DB::table('categories')->insert($insert_arr);
        // dump($query->toSql());
        // dump($query->getBindings());
        // $id = DB::getPdo()->lastInsertId();
        pr(DB::getQueryLog());



        pr($id,1);
    }
}
