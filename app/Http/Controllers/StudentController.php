<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('Student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->numero = '';
        $student->NomFr = $request->input('NomFr');
        $student->NomAr = $request->input('NomAr');
        $student->CNI = $request->input('CNI');
        $student->Sexe = $request->input('Sexe');
        $student->Statut = $request->input('Statut');
        $student->DNS = $request->input('DNS');
        $student->AdressFr = $request->input('AdressFr');
        $student->AdressAr = $request->input('AdressAr');
        // $student->Telephone = $request->input('Telephone');
        $student->Picture = '';
        $student->save();
        return redirect()->route('Student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('Student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('Student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->numero = '';
        $student->NomFr = $request->input('NomFr');
        $student->NomAr = $request->input('NomAr');
        $student->CNI = $request->input('CNI');
        $student->Sexe = $request->input('Sexe');
        $student->Statut = $request->input('Statut');
        $student->DNS = $request->input('DNS');
        $student->AdressFr = $request->input('AdressFr');
        $student->AdressAr = $request->input('AdressAr');
        // $student->Telephone = $request->input('Telephone');
        $student->Picture = '';
        $student->save();
        return redirect()->route('Student.show',['Student' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
    }
}
