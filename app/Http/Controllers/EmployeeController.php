<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Office;
use Illuminate\Http\Request;
use DB;


class EmployeeController extends Controller
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
        $employes= Employe::all();
        return view('Employee.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $office = DB::table('offices')->select('lebelFr')->get();
        // dd($office);
        return view('Employee.create')->with('office',$office);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = $request->validate([
            'NomFr' => 'required'
        ]);

        // $ParentId = DB::table('parent')->insertGetId(
        //          ['NomFr' => $request->input('NomFr'),
        //           'NomAr' => $request->input('NomAr'),
        //           'CNI' => $request->input('CNI'),
        //           'ParenteFr' => $request->input('ParenteFr'),
        //           'ParenteAr' => $request->input('ParenteAr'),
        //           'Telephone' => $request->input('Telephone'),
        //           'AdressFr' => $request->input('AdressFr')] );

        $employee = new Employe();
        $employee->NomFr = $request->input('NomFr');
        $employee->NomAr = $request->input('NomAr');
        $employee->CNI = $request->input('CNI');
        $employee->DNS = $request->input('DNS');
        $employee->Sexe = $request->input('Sexe');
        $employee->StatutFamilierFr = $request->input('StatutFamilierFr');
        $employee->StatutFamilierAr = $request->input('StatutFamilierAr');
        $employee->Telephone = $request->input('Telephone');
        $employee->AdressFr = $request->input('AdressFr');
        $employee->AdressAr = $request->input('AdressAr');
        $employee->Picture = '';
        // $employee->parent_id = '';

        $employee->save();
        return redirect()->route('Employee.index');

//         If the table has an auto-incrementing id, use the insertGetId method to insert a record and 
        // then retrieve the ID:

            // $id = DB::table('users')->insertGetId(
            //     ['email' => 'john@example.com', 'votes' => 0]
            // );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emloyee = Employe::findOrFail($id);
        $conract = Employe::findOrFail($id)->contracts;
        // dd($conract->all());
        return view('Employee.show')->with('employee',$emloyee)->with('conract',$conract);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Emloyee = Employe::findOrFail($id);
        return view('Employee.edit')->with('Employee',$Emloyee);
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
        $employee = Employe::findOrFail($id);
        $employee->NomFr = $request->input('NomFr');
        $employee->NomAr = $request->input('NomAr');
        $employee->CNI = $request->input('CNI');
        $employee->DNS = $request->input('DNS');
        $employee->Sexe = $request->input('Sexe');
        $employee->StatutFamilierFr = $request->input('StatutFamilierFr');
        $employee->StatutFamilierAr = $request->input('StatutFamilierAr');
        $employee->Telephone = $request->input('Telephone');
        $employee->AdressFr = $request->input('AdressFr');
        $employee->AdressAr = $request->input('AdressAr');
        $employee->Picture = $request->input('Picture');
        
        $employee->save();

        return redirect()->route('Employee.show',$id);
        // $affected = DB::table('users')
        //       ->where('id', 1)
        //       ->update(['votes' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employe::destroy($id);
        return redirect()->route('Employee.index');
    }
}
