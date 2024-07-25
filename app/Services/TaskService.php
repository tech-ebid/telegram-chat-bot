<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{

    public static $TASK_SENT = 'sent';
    public function getPendingTask()
    {
        $tasks = Task::where('status', 'pending')->orderBy('updated_at', 'asc')->limit(1)->get();

        return $tasks;
    }


    public function updateTaskById($id, $data)
    {
        $task = Task::find($id);
        $task->update($data);
    }
}
