<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::orderBy('id','desc')->paginate(6);
        $user=\Auth::user();
        return view('tasks.index',
        ['tasks'=>$tasks],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task=new Task;
        return view('tasks.create',
        ['task'=>$task],);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:10',    
            'content'=>'required|max:255',
             'deadline'=>'required',
             ]);
        
        $request->user()->task()->create([
            'title'=>$request->title,
            'content'=>$request->content,
            'deadline'=>$request->deadline,
            ]);
        return redirect('/');
        //return back();
    }

    public function show($id)
    {
        $task=Task::findOrFail($id);
        if(\Auth::id()==$task->user_id){
        return view('tasks.show',
        ['task'=>$task]);}
        else{
            return back();
        }
    }

    
    public function edit($id)
    {
        $task=Task::findOrFail($id);
        
        
        return view('tasks.edit',
        ['task'=>$task]);
        
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
        $task=Task::findOrFail($id);
        
        $request->validate([
            'title'=>'required|max:10',    
            'content'=>'required|max:255',
            'deadline'=>'required',
            ]);
            
        if(\Auth::id()==$task->user_id){
            $task->title=$request->title;
            $task->content=$request->content;
            $task->deadline=$request->deadline;
            
            $task->save();
        }
        
        return redirect('/');
    }
         
    public function destroy($id)
    {
        $task=Task::findOrFail($id);
        if(\Auth::id()==$task->user_id){
        $task->delete();
        }
        
        return redirect('/');
    }
}
