<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero">
    <div><span class="eyebrow">Daily focus</span><h1>Good day, Sample.</h1><p>Here’s what deserves your attention today.</p></div>
    <a class="primary-button" href="<?= site_url('tasks') ?>">View all tasks <?= view('partials/icon', ['name' => 'arrow']) ?></a>
</section>

<section class="stats-grid" aria-label="Today's task summary">
    <div class="stat-card stat-primary"><span>Today’s progress</span><strong><?= $summary['total'] ? round(($summary['completed'] / $summary['total']) * 100) : 0 ?><small>%</small></strong><div class="progress"><i style="width: <?= $summary['total'] ? round(($summary['completed'] / $summary['total']) * 100) : 0 ?>%"></i></div></div>
    <div class="stat-card"><span>Total tasks</span><strong><?= $summary['total'] ?></strong><small>Scheduled today</small></div>
    <div class="stat-card"><span>In progress</span><strong><?= $summary['in_progress'] ?></strong><small>Keep the momentum</small></div>
    <div class="stat-card"><span>Completed</span><strong><?= $summary['completed'] ?></strong><small>Nicely done</small></div>
</section>

<section class="content-card">
    <?php if (session()->getFlashdata('success')): ?><div class="alert-success" role="status">✓ <?= esc(session()->getFlashdata('success')) ?></div><?php endif ?>
    <div class="section-heading"><div><h2>Today’s tasks</h2><p><?= date('F j, Y', strtotime($today)) ?> · <?= count($tasks) ?> items</p></div><a href="<?= site_url('tasks') ?>">See all</a></div>
    <div class="task-list">
        <?php if ($tasks === []): ?><div class="empty-state"><span>✓</span><h3>Your day is clear</h3><p>No tasks are scheduled for today.</p></div><?php endif ?>
        <?php foreach ($tasks as $task): ?><?= view('partials/task_row', ['task' => $task, 'returnTo' => 'today']) ?><?php endforeach ?>
    </div>
</section>
<?= $this->endSection() ?>
