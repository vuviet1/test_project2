<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'scholarship', 'id_user', 'id_school_year', 'id_major', 'create_at', 'update_at', 'status'];
    private $limit = 5;

    public function show() {
        $fillable = DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->leftJoin('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->leftJoin('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select(
                'students.*',
                'users.name',
                'users.student_code',
                'fees.school_payment_times as fee_time',
                'fees.original_fee',
                DB::raw('fees.school_payment_times - students.school_payment_times as payment_difference')
            )
            ->orderBy('payment_difference', 'desc')
            ->having('payment_difference', '>', 0)
            ->orderBy('students.id', 'desc')
            ->paginate($this->limit);

        return $fillable;
    }

    public function debt() {
        $fillable = DB::table('students')
            ->leftJoin('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->leftJoin('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select(
                DB::raw('fees.school_payment_times - students.school_payment_times as payment_difference')
            )
            ->having('payment_difference', '>', 0) // Lọc ra các bản ghi có payment_difference > 0
            ->get();

        return $fillable;
    }

    public function showYear(){
        $fillable = DB::table('school_years')->get();
        return $fillable;
    }

    public function showMajor(){
        $fillable = DB::table('majors')->get();
        return $fillable;
    }


    public function search($searchTerm){
        return DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->leftJoin('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->leftJoin('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select('students.*', 'users.name', 'users.student_code', 'users.id as id_user', 'fees.school_payment_times as fee_time', 'fees.original_fee' )
            ->where('students.id_user', 'like', "%$searchTerm%")
            ->orderBy('students.id', 'desc')
            ->paginate($this->limit);
    }
}
