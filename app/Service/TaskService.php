<?php

namespace App\Service;

use App\Models\Task;

class TaskService
{
    public function create(array $data)
    {
        $task = Task::create($data);
        $task->image_url = "https://picsum.photos/seed/task{$task->id}/400/300";
        $task->save();
        return $task;
    }



public function index()
{
    return Task::all();
}




public function show($id)
{
    return Task::findOrFail($id);
}




public function UpdateToggle($id)
{
    $task = Task::findOrFail($id);
    $task->is_completed = true;
    $task->save();
return $task;

}
}