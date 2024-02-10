<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller {
    public function getStudent() {
        $result = DB::table('students')->select('name', 'email', 'contact', 'id')->get();
        return $result;
    }

    public function addStudent(Request $request) {
        try {
            $save_data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'contact' => $request->input('contact'),
            ];
            $result = DB::table('students')->insert($save_data);
            if ($result) {
                return "Saved Successfully..";
            } else {
                return "save failed..";
            }
        } catch (\Exception $exception) {
            return "Error..!" . $exception->getMessage();
        }
    }

    public function deleteStudent($id) {
        $result = DB::table('students')->where('id', $id)->delete();
    }

    public function getOneStudentDetail($id) {
        $result = DB::table('students')->where('id', $id)->first();
        return $result;
    }

    public function updateStudentDetail($id, $data) {
        $result = DB::table('students')->where('id', $id)->update($data);
        return $result;
    }
}
