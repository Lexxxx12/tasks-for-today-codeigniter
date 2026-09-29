<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="hero hero-compact"><div><span class="eyebrow">New profile</span><h1>Add account</h1><p>Create another account in the local database.</p></div></section>

<section class="form-card">
    <div class="section-heading"><div><h2>Account information</h2><p>All fields are required</p></div></div>
    <?php if ($validation->getErrors()): ?>
        <div class="alert-error" role="alert"><strong>Please check the form.</strong><span><?= esc(implode(' ', $validation->getErrors())) ?></span></div>
    <?php endif ?>
    <form action="<?= site_url('accounts') ?>" method="post" class="account-form">
        <?= csrf_field() ?>
        <label><span>Full name</span><input type="text" name="full_name" value="<?= esc(old('full_name')) ?>" placeholder="e.g. Sample User" maxlength="100" required autocomplete="name"></label>
        <label><span>Username</span><input type="text" name="username" value="<?= esc(old('username')) ?>" placeholder="e.g. sample.user" maxlength="50" required autocomplete="username"><small>Must be unique.</small></label>
        <label><span>Email address</span><input type="email" name="email" value="<?= esc(old('email')) ?>" placeholder="sample@example.com" maxlength="100" required autocomplete="email"><small>Must be unique.</small></label>
        <div class="form-actions"><a class="secondary-button" href="<?= site_url('profile') ?>">Cancel</a><button class="primary-button" type="submit">Create account</button></div>
    </form>
</section>
<?= $this->endSection() ?>
