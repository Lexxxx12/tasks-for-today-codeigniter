<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];
    protected $useTimestamps = false;

    public function forDate(string $date): array
    {
        return $this->where('task_date', $date)
            ->orderBy("CASE status WHEN 'in_progress' THEN 1 WHEN 'pending' THEN 2 ELSE 3 END", '', false)
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }

    public function ordered(): array
    {
        return $this->orderBy('task_date', 'DESC')
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }
}
