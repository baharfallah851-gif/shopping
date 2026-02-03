<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveIdeaRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Idea;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{

    public function index(Task $task)
    {
        $ideas = Idea::all();
        $customers = Customer::all();
        $solvers = User::all();
        $categories = Category::all();
        return view('idea.idea', compact('task', 'solvers', 'customers', 'categories', 'ideas'));
    }

    public function save(saveIdeaRequest $request, Task $task)
    {
        Idea::create([
            'task_id' => $task->id,
            'owner_id' => Auth::id(),
            'comment' => $request->get('comment'),
        ]);
        return redirect(route('task.index'));
    }

    public function delete(Idea $idea)
    {
        $idea->delete();
        return [
            'success' => true,
        ];
    }
}
