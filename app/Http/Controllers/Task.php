<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Service\TaskService;
use Illuminate\Http\Request;

class Task extends Controller
{
    protected $taskservice ;
// Injecting The Task Service
    public function __construct(TaskService $taskservice)
    {
        $this->taskservice = $taskservice ;
    }



public function create(StoreTaskRequest $request)
{
    try {
        $validated = $request->validated();
        $task = $this->taskservice->create($validated);

        return response()->json([
            'status' => 'success',
            'data' => $task
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => $e->getMessage()
        ], 500);
    }

}







public function index()
{
    try {
        $tasks = $this->taskservice->index();
        return response()->json([
            "status" => "success",
            "tasks" => $tasks
        ]);
    } catch (\Exception $e) {
        return response()->json([
            "status" => "false",
            "message" => $e->getMessage()
        ], 500);
    }
}


public function show($id)
{
    try {
        $task = $this->taskservice->show($id);
        return response()->json([
            "status" => "success",
            "task" => $task
        ]);
    } catch (\Exception $e) {
        return response()->json([
            "status" => "false",
            "message" => $e->getMessage()
        ], 500);
    }
  
}


public function UpdateToggle($id)
{
    try {
        $task = $this->taskservice->UpdateToggle($id);
        return response()->json([
            "status" => "success",
            "task" => $task
        ]);
    } catch (\Exception $e) {
        return response()->json([
            "status" => "false",
            "message" => $e->getMessage()
        ], 500);
    }
}








}
