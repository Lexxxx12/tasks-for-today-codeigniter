<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f5f7">
    <title><?= esc($pageTitle) ?> · Tasks for Today</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar" id="sidebar">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="Tasks for Today home">
            <span class="brand-mark" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 12.5l3.2 3.2L17.5 8.5"/></svg></span>
            <span><strong>Tasks</strong><small>for today</small></span>
        </a>
        <nav class="nav" aria-label="Main navigation">
            <span class="nav-label">Workspace</span>
            <a class="nav-item <?= $activePage === 'today' ? 'active' : '' ?>" href="<?= site_url('/') ?>"><span><?= view('partials/icon', ['name' => 'sun']) ?></span>Today</a>
            <a class="nav-item <?= $activePage === 'tasks' ? 'active' : '' ?>" href="<?= site_url('tasks') ?>"><span><?= view('partials/icon', ['name' => 'list']) ?></span>All tasks</a>
            <a class="nav-item <?= $activePage === 'add-task' ? 'active' : '' ?>" href="<?= site_url('tasks/new') ?>"><span><?= view('partials/icon', ['name' => 'plus']) ?></span>Add task</a>
            <span class="nav-label nav-label-spaced">Personal</span>
            <a class="nav-item <?= $activePage === 'profile' ? 'active' : '' ?>" href="<?= site_url('profile') ?>"><span><?= view('partials/icon', ['name' => 'user']) ?></span>Profile</a>
            <a class="nav-item <?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>"><span><?= view('partials/icon', ['name' => 'info']) ?></span>About</a>
        </nav>
        <div class="sidebar-footer"><span class="online-dot"></span><span><strong>All systems ready</strong><small>CodeIgniter 4</small></span></div>
    </aside>
    <div class="scrim" id="scrim"></div>
    <main class="main-content">
        <header class="topbar">
            <button class="icon-button menu-button" id="menuButton" aria-label="Open navigation" aria-expanded="false"><?= view('partials/icon', ['name' => 'menu']) ?></button>
            <div class="topbar-date"><?= date('l, F j') ?></div>
            <a class="avatar-small" href="<?= site_url('profile') ?>" aria-label="Open profile">S</a>
        </header>
        <div class="page-wrap"><?= $this->renderSection('content') ?></div>
    </main>
</div>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
