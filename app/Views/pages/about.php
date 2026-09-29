<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="about-hero"><div class="about-orb"><span>✓</span></div><span class="eyebrow">Tasks for Today</span><h1>Make space for<br>what matters.</h1><p>A focused task management experience built to turn a busy day into a clear plan.</p></section>
<section class="about-grid"><article><span>01</span><h2>Purpose</h2><p>This system separates today’s priorities from the complete task history, so the next action is always clear.</p></article><article><span>02</span><h2>Technology</h2><p>Built with CodeIgniter 4, PHP, SQLite, semantic HTML, modern CSS, and lightweight JavaScript.</p></article><article><span>03</span><h2>Developer</h2><p>Designed and developed by <strong><?= esc($developerName) ?></strong> for <?= esc($developerCourse) ?>.</p></article></section>
<?= $this->endSection() ?>
