<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        return view('pages/tasks', [
            'pageTitle' => 'All Tasks',
            'activePage' => 'tasks',
            'tasks' => (new TaskModel())->ordered(),
        ]);
    }

    public function create(): string
    {
        return view('pages/task_create', [
            'pageTitle' => 'Add Task',
            'activePage' => 'add-task',
            'validation' => service('validation'),
        ]);
    }

    public function store()
    {
        $rules = [
            'title' => 'required|min_length[2]|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
            'status' => 'required|in_list[pending,in_progress,completed]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        (new TaskModel())->insert([
            'title' => trim((string) $this->request->getPost('title')),
            'task_date' => (string) $this->request->getPost('task_date'),
            'status' => (string) $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(site_url('tasks'))->with('success', 'Task added successfully.');
    }

    public function toggle(int $id)
    {
        $tasks = new TaskModel();
        $task = $tasks->find($id);

        if (! $task) {
            return redirect()->back()->with('error', 'Task not found.');
        }

        $tasks->update($id, [
            'status' => $task['status'] === 'completed' ? 'pending' : 'completed',
        ]);

        $destination = $this->request->getPost('return_to') === 'today' ? site_url('/') : site_url('tasks');

        return redirect()->to($destination)->with('success', 'Task status updated.');
    }
}
