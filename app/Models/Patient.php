<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'phone',
        'email',
        'address',
        'date_of_birth',
        'created_by'
    ];
    
    public function records()
    {
        return $this->hasMany(Record::class);
    }

    // public static function search($search){
    //     //return empty($search) ? static::query():  
    //     if(empty($search)){
    //         return static::query();
    //     }else{
    //         return static::query()->where('id', 'like', '%'.$search.'%')->orWhere('first_name', 'like', '%'.$search.'%')->orWhere('last_name', 'like', '%'.$search.'%')->orWhere('email', 'like', '%'.$search.'%')->orWhere('phone', 'like', '%'.$search.'%');
    //     }
    // }

}
