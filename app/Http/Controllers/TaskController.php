<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveTaskRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function add(){
        $solvers = User::all();
        $customers = Customer::all();
        $categories = Category::all();
        return view('task.add', compact('solvers', 'customers', 'categories'));
    }

    public function save(saveTaskRequest $request)
    {
        Task::create([
           'title' => $request->get('title'),
           'solver_id' => $request->get('solver_id'),
           'owner_id' => Auth::id(),
           'customer_id' => $request->get('customer_id'),
           'category_id' => $request->get('category_id'),
           'start_time' => $request->get('start_time'),
           'end_time' => $request->get('end_time'),
           'priority' => $request->get('priority'),
           'status' => $request->get('status'),
           'send_message' => $request->get('send_message',0),
           'description' => $request->get('description'),
            'image' => $request->get('image'),
        ]);
        return redirect(route('task.index'));
    }

    public function edit(Task $task){
        $solvers = User::all();
        $customers = Customer::all();
        $categories = Category::all();
        return view('task.update', compact('task', 'solvers', 'customers', 'categories'));
    }

    public function update(saveTaskRequest $request, Task $task){
        $task->title = $request->get('title');
        $task->solver_id = $request->get('solver_id');
        $task->customer_id = $request->get('customer_id');
        $task->category_id = $request->get('category_id');
        $task->start_time = $request->get('start_time');
        $task->end_time = $request->get('end_time');
        $task->priority = $request->get('priority');
        $task->status = $request->get('status');
        $task->send_message = $request->get('send_message');
        $task->description = $request->get('description');
        $task->image = $request->get('image');
        $task->update();

        return redirect(route('task.index'));
    }

    public function delete(Task $task)
    {
        $task->delete();
        return redirect(route('task.index'));
    }
}
