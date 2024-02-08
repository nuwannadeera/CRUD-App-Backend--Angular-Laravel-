<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model {

    public function getStudent() {
        $result = DB::table('students')->select('name', 'email', 'contact', 'id')->get();
        return $result;
    }

    public function addStudent($save_data) {
        $result = DB::table('students')->insert($save_data);
        return $result;
    }

    public function deleteStudent($id) {
        $result = DB::table('students')->where('id',$id)->delete();
    }

    public function getOneStudentDetail($id) {
        $result = DB::table('students')->where('id',$id)->first();
        return $result;
    }

    public function updateStudentDetail($id,$data) {
        $result = DB::table('students')->where('id',$id)->update($data);
        return $result;
    }
}
