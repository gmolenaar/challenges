<?php

namespace App\Http\Controllers;

use App\Task;
use DB;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()

    {

    	$tasks = Task::all();

    	return view ('tasks.index', compact('tasks'));

    }

    // Show task
    public function show(Task $task)

    {

    	return view ('tasks.show', compact('task'));

    }

    // Add new To-Do item
    public function insert(Request $req)
    {
    	$title = $req->input('title');
    	$comment = $req->input('comment');

    	$data = array('title'=>$title, 'body'=>$comment);
    	DB::table('tasks')->insert($data);

    	return redirect()->to('/tasks/');
    }

    public function update($id)
    {
    	$task = Task::find($id);
    	$task->completed = !$task->completed;
    	$task->save();
    	return redirect()->to('/tasks/');
    }

    public function delete($id)
    {
    	$task = Task::find($id);
    	$task->delete();
    	return redirect()->to('/tasks/');
    }
}
?>