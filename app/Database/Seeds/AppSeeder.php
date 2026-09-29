<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AppSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        $now = date('Y-m-d H:i:s');

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review today’s priorities', 'status' => 'completed', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Finish the dashboard layout', 'status' => 'in_progress', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Test mobile navigation', 'status' => 'pending', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Prepare project documentation', 'status' => 'pending', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Create the database schema', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Draft the MVC structure', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Publish repository to GitHub', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $now],
            ['title' => 'Deploy the hosted application', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $now],
        ]);

        $this->db->table('users')->insert([
            'username' => 'sample',
            'full_name' => 'Sample',
            'email' => 'sample@example.com',
            'created_at' => $now,
        ]);
    }
}
