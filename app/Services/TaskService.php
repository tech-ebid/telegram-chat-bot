<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{

    public static $TASK_SENT = 'sent';
    public function getPendingTask()
    {
        $tasks = Task::where('status', 'pending')->get();

        return $tasks;
    }


    public function updateTaskById($id, $data)
    {
        $task = Task::find($id);
        $task->update($data);
    }
}
