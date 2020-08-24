<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Handicap;
use App\Http\Resources\Handicapresource;

class HandicapController extends Controller
{
    
    public function index()
    {
        if(request('q') != null){
            return Handicapresource::collection(Handicap::where('lebelFr','like','%'.request('q').'%')->orderBy('lebelFr','asc')->paginate(6));
            // return response()->json($Handicaps);
        }
        return Handicapresource::collection(Handicap::orderBy('lebelFr','asc')->paginate(6));
    }

    
    public function store(Request $request)
    {
        $handicap = new Handicap();
        $handicap->lebelFr = $request->lebelFr;
        $handicap->lebelAr = $request->lebelAr;
        $handicap->descriptionFr = $request->descriptionFr;
        $handicap->descriptionAr = $request->descriptionAr;
        $handicap->save();

        // if($handicap){
        //     $Handicaps = Handicap::orderBy('lebelFr','asc')->paginate(3);
        //     return Handicapresource::collection($Handicaps,200);
        // }
    }

    
    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $handicap = Handicap::findOrFail($id);
        $handicap->lebelFr = $request->lebelFr;
        $handicap->lebelAr = $request->lebelAr;
        $handicap->descriptionFr = $request->descriptionFr;
        $handicap->descriptionAr = $request->descriptionAr;
        $handicap->save();
    }

    public function destroy($id)
    {
        Handicap::destroy($id);
    }
}
