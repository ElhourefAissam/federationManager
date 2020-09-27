<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employe;
use App\Http\Resources\EmployeResource;
use Illuminate\Support\Facades\File;

class EmployeController extends Controller
{
    public function index()
    {
        if(request('q') != null){
            return EmployeResource::collection(Employe::where('NomFr','like','%'.request('q').'%')->orderBy('NomFr','asc')->paginate(6));
        }
        return EmployeResource::collection(Employe::orderBy('NomFr','asc')->paginate(6));
    }

    
    public function store(Request $request)
    {
            // $request->validate([
            //     'email' => 'required|email',
            //     'title' =>'required|max:250',
            //     'url' => 'required|max:250',
            //     'shortdescription' => 'required',
            //     'img' => 'sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:2000',
            // ]);

        $employe = new Employe();
        $employe->NomFr = $request['NomFr'];
        $employe->NomAr = $request['NomAr'];
        $employe->CNI = $request['CNI'];
        $employe->DNS = $request['DNS'];
        $employe->Sexe = $request['Sexe'];
        $employe->StatutFamilierFr = $request['StatutFamilierFr'];
        $employe->StatutFamilierAr = $request['StatutFamilierAr'];
        $employe->Telephone = $request['Telephone'];
        $employe->AdressFr = $request['AdressFr'];
        $employe->AdressAr = $request['AdressAr'];

        if($request['Image']){
            $image = $request['Image'];
            $imageName = $image->getClientOriginalName();
            $imageName = time().'_'.$imageName;
            $image->move(public_path('/images'), $imageName);
            unlink(public_path('images/'.$employe->Image));
            $employe->Image = $imageName;
            
        }else{
            $employe->image = 'default.jpg';
        }
        $employe->save();
    }

    
    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);

        // $oldimage = Employe::where('user_id', Auth::user()->id)->firstOrFail();
        //     File::delete([
        //         public_path($oldimage->image),
        //         public_path($oldimage->thumbnail),
        //     ]);
        
        $employe->NomFr = $request->input('NomFr');
        $employe->NomAr = $request['NomAr'];
        $employe->CNI = $request['CNI'];
        $employe->DNS = $request['DNS'];
        $employe->Sexe = $request['Sexe'];
        $employe->StatutFamilierFr = $request['StatutFamilierFr'];
        $employe->StatutFamilierAr = $request['StatutFamilierAr'];
        $employe->Telephone = $request['Telephone'];
        $employe->AdressFr = $request['AdressFr'];
        $employe->AdressAr = $request['AdressAr'];

        if($request['Image']){
            $image = $request['Image'];
            $imageName = $image->getClientOriginalName();
            $imageName = time().'_'.$imageName;
            $image->move(public_path('/images'), $imageName);
            $employe->Image = $imageName;
        }
        $employe->save();
    }

   
    public function destroy($id)
    {
        $oldimage = Employe::findOrFail($id);
        unlink(public_path('images/'.$oldimage->Image));
        Employe::destroy($id);
    }
}
