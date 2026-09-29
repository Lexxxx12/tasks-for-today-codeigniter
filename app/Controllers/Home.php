<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $today = date('Y-m-d');
        $tasks = (new TaskModel())->forDate($today);

        return view('pages/home', [
            'pageTitle' => 'Today',
            'activePage' => 'today',
            'today' => $today,
            'tasks' => $tasks,
            'summary' => $this->summarize($tasks),
        ]);
    }

    private function summarize(array $tasks): array
    {
        $summary = ['total' => count($tasks), 'completed' => 0, 'in_progress' => 0, 'pending' => 0];

        foreach ($tasks as $task) {
            if (isset($summary[$task['status']])) {
                $summary[$task['status']]++;
            }
        }

        return $summary;
    }
}
