<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;
use App\Models\Image;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commissions = Commission::paginate(3);
        return view('commissions.index', ['commissions' => $commissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commissions.create');
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
            'difficulty'=> 'required',
            'reward'=> 'required|numeric|max:45',
            'adventurer_id'=> 'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $commission = Commission::create([
            'name' => $request->input('name'),
            'difficulty'=> $request->input('difficulty'),
            'reward'=> $request->input('reward'),
            'adventurer_id'=> $request->input('adventurer_id'),
        ]);

        $newImageName = time() . $request->name . '.'
        . $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        $image = Image::create([
            'image_path' =>$newImageName,
            'imageable_id'=>$commission->id,
            'imageable_type'=> 'App\Models\Commission',
        ]);

        return redirect('/commissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commission = Commission::findOrFail($id);
        return view('commissions.show', ['commission' => $commission]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commission = Commission::findOrFail($id);
        return view('commissions.edit', ['commission' => $commission]);
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
        $validateData = $request->validate([
            'name' => 'required',
            'difficulty'=> 'required',
            'reward'=> 'required|numeric|max:45',
            'adventurer_id'=> 'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $commission = Commission::where('id',$id)->update([
            'name' => $request->input('name'),
            'difficulty'=> $request->input('difficulty'),
            'reward'=> $request->input('reward'),
            'adventurer_id'=> $request->input('adventurer_id'),
        ]);

        $newImageName = time() . $request->name . '.'
        . $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        $image = Image::create([
            'image_path' =>$newImageName,
            'imageable_id'=>$commission->id,
            'imageable_type'=> 'App\Models\Commission',
        ]);

        return redirect('/commissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Commission::find($id);

        $c->delete();
        
        return redirect('/commissions');
    }
}
