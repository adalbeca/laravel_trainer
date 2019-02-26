<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Trainer;

class TrainerController extends Controller
{

    public function index()
    {
        return 'Hola Mundo!';
    }

    public function create()
    {
        return view('trainers.create');
    }

    public function store(Request $request)
    {
        $trainer = new Trainer();
        $trainer->name=$request->input('name');
        $trainer->save();
        return 'Saved';
    }

    public function show()
    {
        $trainer=Trainer::all();
        return $trainer;
    }

    public function edit($id)
    {
        //
    }

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
