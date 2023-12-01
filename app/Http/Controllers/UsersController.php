<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function getAllStudents() {
        $student_model = new Student();
        $st_data = $student_model->getStudent();
        return response()->json($st_data);
    }

    public function saveStudents(Request $request) {
        $student_model = new Student();
        $result = $student_model->addStudent($request->all());
    }

    public function deleteStudents(Request $request) {
        $student_model = new Student();
        $id = $request->id;
        return $student_model->deleteStudent($id);
    }

    public function getOneStudentData(Request $request) {
        $student_model = new Student();
        $id = $request->id;
        $data = $student_model->getOneStudentDetail($id);
        return response()->json($data);
    }

    public function updateStudentData(Request $request) {
        $student_model = new Student();
        $id = $request->id;
        return $student_model->updateStudentDetail($id,$request->all());
    }
}
