<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'scholarship', 'id_account', 'create_at', 'update_at'];
    public function show(){
        $fillable = DB::table('students')->get();
        return $fillable;
    }
}
