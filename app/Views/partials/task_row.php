<?php
$labels = ['pending' => 'Pending', 'in_progress' => 'In progress', 'completed' => 'Completed'];
$status = $task['status'];
?>
<article class="task-row" data-status="<?= esc($status) ?>" data-search="<?= esc(strtolower($task['title'])) ?>">
    <form action="<?= site_url('tasks/' . $task['id'] . '/toggle') ?>" method="post" class="toggle-form">
        <?= csrf_field() ?>
        <input type="hidden" name="return_to" value="<?= esc($returnTo ?? 'tasks') ?>">
        <button class="task-check <?= $status === 'completed' ? 'checked' : '' ?>" type="submit" aria-label="Mark <?= esc($task['title']) ?> as <?= $status === 'completed' ? 'pending' : 'completed' ?>" title="<?= $status === 'completed' ? 'Mark as pending' : 'Mark as completed' ?>"><?= $status === 'completed' ? '✓' : '' ?></button>
    </form>
    <div class="task-copy"><h3><?= esc($task['title']) ?></h3><p><?= date('M j, Y', strtotime($task['task_date'])) ?></p></div>
    <span class="status status-<?= esc($status) ?>"><?= esc($labels[$status] ?? ucfirst($status)) ?></span>
</article>
