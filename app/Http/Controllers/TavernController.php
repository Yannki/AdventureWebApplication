<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tavern;

class TavernController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taverns = Tavern::all();
        return view('taverns.index', ['taverns' => $taverns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taverns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'country'=> 'nullable',
        ]);

        $tavern = Tavern::create([
            'name' => $request->input('name'),
            'country' => $request->input('country')
        ]);

        return redirect('/taverns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tavern = Tavern::findOrFail($id);
        return view('taverns.show', ['tavern' => $tavern]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tavern = Tavern::find($id);

        return view('taverns.edit', ['tavern' => $tavern]);
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
        $tavern = Tavern::where('id', $id)->
        update([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
        ]);

        return redirect('/taverns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tavern = Tavern::find($id)->first();

        $tavern->delete();
        
        return redirect('/taverns');
    }
}
