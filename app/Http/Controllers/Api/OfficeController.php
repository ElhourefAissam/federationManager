<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;
use App\Http\Resources\OfficeResource;

class OfficeController extends Controller
{
    public function index()
    {
        if(request('q') != null){
            return OfficeResource::collection(Office::where('lebelFr','like','%'.request('q').'%')->orderBy('lebelFr','asc')->paginate(6));
        }
        return OfficeResource::collection(Office::orderBy('lebelFr','asc')->paginate(6));
    }

    public function store(Request $request)
    {
        $office = new Office();
        $office->lebelFr = $request->lebelFr;
        $office->lebelAr = $request->lebelAr;
        $office->AdressFr = $request->AdressFr;
        $office->AdressAr = $request->AdressAr;
        $office->Telephone = $request->Telephone;
        $office->save();
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $office = Office::findOrFail($id);
        $office->lebelFr = $request->lebelFr;
        $office->lebelAr = $request->lebelAr;
        $office->AdressFr = $request->AdressFr;
        $office->AdressAr = $request->AdressAr;
        $office->Telephone = $request->Telephone;
        $office->save();
    }

    public function destroy($id)
    {
        Office::destroy($id);
    }
}
