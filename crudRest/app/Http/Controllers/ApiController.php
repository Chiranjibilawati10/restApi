<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();

        $students->firstname = $request->input('firstname');
        $students->lastname = $request->input('lastname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
         return response()->json($students);
    }

    public function show()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function ShowbyId($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updatebyId(Request $request, $id)
    {
        $students = Student::find($id);
        $students ->firstname = $request->input('firstname');
        $students ->lastname = $request->input('lastname');
        $students ->email = $request->input('email');
        $students ->password = $request->input('password');

        $students->save();
        return response()->json($students);
        
    }
    public function deletebyId(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();
        
        return response()->json($students);
    }
    
}
