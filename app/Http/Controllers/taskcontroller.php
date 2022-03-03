<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTasks;

class taskcontroller extends Controller
{
    public function store(Request $req){
        $newTask = new NewTasks;    
        $newTask->task_name = $req['task'];
        $newTask->save();
        return redirect()->back();
    }
    public function show(){
        $newTasks = NewTasks::all();
        $data = compact('newTasks');
        return view('todo')->with($data);
    }

    public function view(){
        $newTasks = NewTasks::all();
        $data = compact('newTasks');
        return view('todo')->with($data);
    }

    public function delete($id){
        $task = NewTasks::find($id);
        if(!is_null($task)){
            $task->delete();
        }
        return redirect()->back();
    }
    
    public function changeStatus($id){
        $task = NewTasks::find($id);
        $task->status = 1;
        $task->save();
        return redirect()->route('task_view');
    }   
    
}
