<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero hero-compact"><div><span class="eyebrow">Task library</span><h1>All tasks</h1><p>Everything on your plate, past and present.</p></div><a class="primary-button" href="<?= site_url('tasks/new') ?>">Add task <span aria-hidden="true">＋</span></a></section>
<?php if (session()->getFlashdata('success')): ?><div class="alert-success" role="status">✓ <?= esc(session()->getFlashdata('success')) ?></div><?php endif ?>
<section class="toolbar" aria-label="Task filters">
    <label class="search-box"><span aria-hidden="true">⌕</span><input id="taskSearch" type="search" placeholder="Search tasks…" autocomplete="off"></label>
    <div class="filter-pills" role="group" aria-label="Filter by status">
        <button class="filter-pill active" data-filter="all">All</button><button class="filter-pill" data-filter="pending">Pending</button><button class="filter-pill" data-filter="in_progress">In progress</button><button class="filter-pill" data-filter="completed">Completed</button>
    </div>
</section>
<section class="content-card">
    <div class="section-heading"><div><h2>Task list</h2><p id="resultCount"><?= count($tasks) ?> tasks</p></div></div>
    <div class="task-list" id="taskList"><?php foreach ($tasks as $task): ?><?= view('partials/task_row', ['task' => $task]) ?><?php endforeach ?></div>
    <div class="empty-state hidden" id="filterEmpty"><span>⌕</span><h3>No matching tasks</h3><p>Try another search or status.</p></div>
</section>
<?= $this->endSection() ?>
