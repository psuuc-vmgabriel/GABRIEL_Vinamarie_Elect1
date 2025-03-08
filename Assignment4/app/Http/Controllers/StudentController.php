<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function insertform(){
        return view('student_create');
    }

    public function insert(Request $request){
        $name = $request -> input('stud_name');
        DB::insert('insert into student (name) values(?)', [$name]);
        
        return redirect('/view-records');
    }

    public function index(){
        $users = DB::select("select * from student");
        return view('student_view', ['users'=>$users]);
    }

    public function show($id){
        $users = DB::select("select * from student where id = ?",[$id]);
        return view('student_update', ['users'=>$users]);
    }
    public function edit($id){
        $user = DB::select("select * from student where id = ?", [$id]);
    
        if (!$user) {
            return redirect('/view-records')->with('error', 'Record not found.');
        }
    
        return view('student_update', ['user' => $user[0]]);
    }
    

    public function indexDelete(){
        $users = DB::select('select * from student');
        return view('student_delete_view',['users'=>$users]);
    }

    public function destroy($id){
        DB::delete('delete from student where id = ?',[$id]);
        return redirect('/view-records');
    }
    public function update(Request $request, $id){
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?', [$name, $id]);
    
        return redirect('/view-records')->with('success', 'Record Updated Successfully');
    }
    
}
