<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use DB;

class ContractController extends Controller
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
        $Contrat = DB::table('Contracts')->join('Employes', 'employes.id', '=', 'Contracts.employe_id')->select('Employes.NomFr','Contracts.*')->get();
        return view('Contract.index')->with('Contracts',$Contrat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contract.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = new Contract();
        $contract->FunctionFr = $request->input('FunctionFr');
        $contract->FunctionAr = $request->input('FunctionAr');
        $contract->DateDebut = $request->input('DateDebut');
        $contract->DateFin = $request->input('DateFin');
        $contract->Salaire = $request->input('Salaire');
        $contract->save();

        return redirect()->route('Conntract.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Contract = Contract::find($id);

        return view('Contract.show')->with('Contract',$Contract);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);
        return view('contract.edit', compact('contract'));
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
        $contract = Contract::findOrFail($id);
        $contract->FunctionFr = $request->input('FunctionFr');
        $contract->FunctionAr = $request->input('FunctionAr');
        $contract->DateDebut = $request->input('DateDebut');
        $contract->DateFin = $request->input('DateFin');
        $contract->Salaire = $request->input('Salaire');
        $contract->save();

        return redirect()->route('Contract.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contract::destroy($id);
    }
}
