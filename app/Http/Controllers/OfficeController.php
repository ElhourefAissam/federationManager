<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use DB;

class OfficeController extends Controller
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
        $offic = DB::table('offices')->orderBy('created_at', 'desc')->get();
        return view('Office.index')->with('offic', $offic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Office.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $office = new Office();
        $office->lebelFr = $request->input('lebelFr');
        $office->lebelAr = $request->input('lebelAr');
        $office->AdressFr = $request->input('AdressFr');
        $office->AdressAr = $request->input('AdressAr');
        $office->Telephone = $request->input('Telephone');
        $office->save();
        
        return redirect()->route('Offices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $office = office::findOrFail($id);
        return view('Office.show')->with('offic',$office);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offic = office::findOrFail($id);
        return view('Office.edit',compact('offic'));
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
        $office = Office::findOrFail($id);
        $office->lebelFr = $request->input('lebelFr');
        $office->lebelAr = $request->input('lebelAr');
        $office->AdressFr = $request->input('AdressFr');
        $office->AdressAr = $request->input('AdressAr');
        $office->Telephone = $request->input('Telephone');
        $office->save();
        
        return redirect()->route('Offices.show', ['Office' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Office::destroy($id);
        return redirect()->route('Offices.index');
    }
}
