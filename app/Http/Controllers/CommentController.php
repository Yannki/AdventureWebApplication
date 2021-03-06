<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $commission = Commission::find($id);
       $comments = $commission->comments;
       return view('comments.index', ['comments' => $comments, 'commission'=>$commission]);
    }

    public function apiIndex($id)
    {
       $comments = Comment::with('adventurer')->where('commission_id', $id)->get();
       return response()->json($comments);
    }

    public function apiStore(Request $request)
    {
       $comment = Comment::create([
           'text'=> $request->input('text'),
           'commission_id'=> $request->input('commission_id'),
           'adventurer_id'=> $request->input('adventurer_id'),
       ]);
       return response()->json($comment);
    }

    public function apiEdit(Request $request)
    {  
        $comment = Comment::where('id',$request->input('comment_id'))->update([
            'text'=> $request->input('text'),
            'commission_id'=> $request->input('commission_id'),
            'adventurer_id'=> $request->input('adventurer_id'),
        ]);

        return response()->json($comment);
    }

    public function apiDestroy(Request $request)
    {  
        $comment = Comment::find($request->input('comment_id'));
        $comment->delete();

        return response()->json($comment);
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
        //
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
