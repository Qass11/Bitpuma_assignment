<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {
        $records = Records::all();
        return view('records.index')->with('records', $records);
    }


    public function create()
    {
        return view('records.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Records::create($input);
        return redirect('records')->with('flash_message', 'record Addedd!');
    }


    public function show($id)
    {
        $records = Records::find($id);
        return view('records.show')->with('records', $records);
    }


    public function edit($id)
    {
        $records = Records::find($id);
        return view('records.edit')->with('records', $records);
    }


    public function update(Request $request, $id)
    {
        $records = Records::find($id);
        $input = $request->all();
        $records->update($input);
        return redirect('/home')->with('success', 'Uw update is gelukt!');
    }


    public function destroy($id)
    {
        Records::destroy($id);
        return redirect('home')->with('flash_message', 'record deleted!');
    }

}
