<?php

namespace App\Http\Controllers;
use\App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['Student'] = Student::all();
        return view('Student.index', $data);
       //return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Student = new Student();
        $Student->fname = $request['fname'];
        $Student->lname = $request['lname'];
        $Student->email = $request['email'];
        $Student->phone = $request['phone'];
        $Student->address = $request['address'];
        $Student->city = $request['city'];
        $Student->province = $request['province'];
        $Student->zip = $request['zip'];
        $Student->birthdate= $request['birthdate'];
        $Student->save();

        return redirect()->to('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Student::with(['grades' => function($query){
            return $query->where ('grade', '>=', 90);
        }])->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Student = Student::find($id);
        $Student->fname =   $request['fname'];
        $Student->lname =   $request['lname'];
        $Student->email =    $request['email'];
        $Student->phone =    $request['phone'];
        $Student->address =  $request['address'];
        $Student->city =     $request['city'];
        $Student->province = $request['province'];
        $Student->zip =      $request['zip'];
        $Student->birthdate= $request['birthdate'];
        $Student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Student = Student::find($id);
        $Student->delete();
    }
}
