<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero hero-compact"><div><span class="eyebrow">New item</span><h1>Add task</h1><p>Put the next thing that matters on your list.</p></div></section>

<section class="form-card">
    <div class="section-heading"><div><h2>Task details</h2><p>Choose what, when, and its current status</p></div></div>
    <?php if ($validation->getErrors()): ?>
        <div class="alert-error" role="alert"><strong>Please check the form.</strong><span><?= esc(implode(' ', $validation->getErrors())) ?></span></div>
    <?php endif ?>
    <form action="<?= site_url('tasks') ?>" method="post" class="account-form">
        <?= csrf_field() ?>
        <label><span>Task title</span><input type="text" name="title" value="<?= esc(old('title')) ?>" placeholder="What needs to be done?" maxlength="150" required autofocus></label>
        <div class="form-row">
            <label><span>Task date</span><input type="date" name="task_date" value="<?= esc(old('task_date', date('Y-m-d'))) ?>" required></label>
            <label><span>Status</span><select name="status" required><option value="pending" <?= old('status', 'pending') === 'pending' ? 'selected' : '' ?>>Pending</option><option value="in_progress" <?= old('status') === 'in_progress' ? 'selected' : '' ?>>In progress</option><option value="completed" <?= old('status') === 'completed' ? 'selected' : '' ?>>Completed</option></select></label>
        </div>
        <div class="form-actions"><a class="secondary-button" href="<?= site_url('tasks') ?>">Cancel</a><button class="primary-button" type="submit">Add task</button></div>
    </form>
</section>
<?= $this->endSection() ?>
