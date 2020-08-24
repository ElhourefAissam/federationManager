<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handicap;

class HandicapController extends Controller
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
        return view('Handicap.index');
        // ->with('handicaps',Handicap::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Handicap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $handicap = new Handicap();
        $handicap->lebelFr = $request->input('lebelFr');
        $handicap->lebelAr = $request->input('lebelAr');
        $handicap->descriptionFr = $request->input('descriptionFr');
        $handicap->descriptionAr = $request->input('descriptionAr');
        $handicap->save();
        return redirect()->route('Handicap.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $handicap = Handicap::findOrFail($id);
        return view('Handicap.show')->with('handicap',$handicap);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $handicap = Handicap::findOrFail($id);
        return view('Handicap.edit')->with('handicap',$handicap);
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
        $handicap = Handicap::findOrFail($id);
        $handicap->lebelFr = $request->input('lebelFr');
        $handicap->lebelAr = $request->input('lebelAr');
        $handicap->descriptionFr = $request->input('descriptionFr');
        $handicap->descriptionAr = $request->input('descriptionAr');
        $handicap->save();
        return redirect()->route('Handicap.show',['Handicap'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Handicap::destroy($id);
    }
}
