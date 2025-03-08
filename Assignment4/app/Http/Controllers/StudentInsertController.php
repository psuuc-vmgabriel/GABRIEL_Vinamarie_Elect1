<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInsertController extends Controller
{
    public function insertform(){
        return view('student_create');
    }

    public function insert(Request $request){
        $name = $request -> input('stud_name');
        DB::insert('insert into student (name) values(?)', [$name]);
        echo "<p style='color: green'>Record Inserted!<br></p>";
        echo "<a href='/insert'>Click here</a> to go back";
    }
    // public function insert(Request $request) {
    //     $request->validate([
    //         'name' => 'required|string|max:255'
    //     ]);
    
    //     try {
    //         Student::create([
    //             'name' => $request->input('name')
    //         ]);
    //         return redirect('/view-records')->with('success', 'Record inserted successfully!');
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Something went wrong: ' . $e->getMessage());
    //     }
    // }
    
}
