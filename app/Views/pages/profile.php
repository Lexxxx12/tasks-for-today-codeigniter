<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero hero-compact"><div><span class="eyebrow">Your account</span><h1>Profile</h1><p>The person behind the progress.</p></div><a class="primary-button" href="<?= site_url('accounts/new') ?>">Add account <span aria-hidden="true">＋</span></a></section>
<?php if (session()->getFlashdata('success')): ?><div class="alert-success" role="status">✓ <?= esc(session()->getFlashdata('success')) ?></div><?php endif ?>
<?php if ($user): ?>
<?php $initials = strtoupper(substr($user['full_name'], 0, 1)); ?>
<section class="profile-grid">
    <article class="profile-card"><div class="avatar-large"><?= esc($initials) ?></div><h2><?= esc($user['full_name']) ?></h2><p>@<?= esc($user['username']) ?></p><span class="member-badge">Member</span></article>
    <article class="details-card"><div class="section-heading"><div><h2>Account details</h2><p>Saved profile information</p></div></div>
        <dl class="detail-list"><div><dt><?= view('partials/icon', ['name' => 'user']) ?>Full name</dt><dd><?= esc($user['full_name']) ?></dd></div><div><dt><?= view('partials/icon', ['name' => 'at']) ?>Username</dt><dd><?= esc($user['username']) ?></dd></div><div><dt><?= view('partials/icon', ['name' => 'mail']) ?>Email</dt><dd><?= esc($user['email']) ?></dd></div><div><dt><?= view('partials/icon', ['name' => 'calendar']) ?>Member since</dt><dd><?= date('F j, Y', strtotime($user['created_at'])) ?></dd></div></dl>
    </article>
</section>
<?php else: ?><section class="content-card empty-state"><h2>No profile found</h2><p>Add an account to get started.</p><a class="primary-button empty-action" href="<?= site_url('accounts/new') ?>">Add account</a></section><?php endif ?>
<?= $this->endSection() ?>
