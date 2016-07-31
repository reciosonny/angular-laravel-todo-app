<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;
use Response;
use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Todolist::all();
    }

    public function getAllActiveTodos()
    {
        return Todolist::where('IsDone', false)->get();
    }
    public function getAllCompletedTodos()
    {
        return Todolist::where('IsDone', true)->get();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todolist($request->all());
        // $todo->TodoName = 'test';
        // $todo->UserId = 1; //assign this to user later
        $todo->save();

        return Response::json($todo);
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
        return Todolist::find($id);
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
        $todo = Todolist::find($id);
        $todo->TodoName = $request->TodoName;
        $todo->IsDone = $request->IsDone;
        $todo->save();

        return Response::json($todo);
    }
}
