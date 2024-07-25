<?php
require __DIR__ . '../../vendor/autoload.php';
date_default_timezone_set('Asia/Jakarta');
set_time_limit(0);

use App\Models\Task;
use App\Services\TaskService;
use App\Services\ChatBotService;

$taskModel = new Task();
$taskService = new TaskService();
$chatBotService = new ChatBotService();
echo "Chatbot is running : date time " . date('Y-m-d H:i:s') . " \n";
while (true) {

    $tasks = $taskService->getPendingTask();

    foreach ($tasks as $task) {
        echo "Proccessing... " . date('Y-m-d H:i:s') . " \n";
        $r = $chatBotService->sendChat($task->chat_id, $task->message);
        if ($r['ok'] == true) {
            $data['status'] = TaskService::$TASK_SENT;
            $taskService->updateTaskById($task->id, $data);
            echo "Chatbot sent successful. at " . date('Y-m-d H:i:s') . " \n";
        } else {
            $data['updated_at'] = date('Y-m-d H:i:s');
            $taskService->updateTaskById($task->id, $data);
            echo "Chatbot sent failed. at " . date('Y-m-d H:i:s') . " \n";
        }
    }
    sleep(5);
    echo "Chatbot stanby... " . date('Y-m-d H:i:s') . " \n";
}
