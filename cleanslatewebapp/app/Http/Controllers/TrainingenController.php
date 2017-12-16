<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use DB;

class TrainingenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$gesorteerdeTrainingen = Training::orderBy('naam', 'asc')->get();
        //$trainingBijNaam = Training::where('naam', 'C++')->get();
        //$alleTrainingen = Training::all();
        //of via SQL
        $alleTrainingen = DB::select('SELECT * FROM OPLEIDING');
        return view('training.index')->with('alleTrainingen', $alleTrainingen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $geselecteerdeTraining =  Training::find($id);
        return view('training.show')->with('huidigeTraining', $geselecteerdeTraining);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
