<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Schema;



class Users extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getData(){
        // if (Schema::hasTable('users'))
        // {
        //     dd('yes table');
        // }
        // else{
        //     dd('no table');
        // }

        // Schema::create('books',function($table){
        //     $table->increments('id');
        //     $table->string('title');
        //     $table->integer('page_count');
        //     $table->decimal('price',15,2);
        //     $table->timestamps();
        // });
        $data = json_decode(json_encode(DB::table('products')->select('*')->get()), true);
        return $data;
    }
}
