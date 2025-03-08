<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentUpdateController extends Controller {
   public function index() {
      $users = DB::select('select * from student');
      return view('student_edit_view',['users'=>$users]);
   }
   public function show($id) {
      $users = DB::select('select * from student where id = ?',[$id]);
      return view('student_update',['users'=>$users]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('stud_name');
      DB::update('update student set name = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
}
