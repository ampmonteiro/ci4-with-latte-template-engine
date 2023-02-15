<?= $this->extend('layouts/default') ?>

<?= $this->section('styles') ?>
<style>
    .p-home {
        margin: 1rem;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h3>Welcome static home</h3>

<p class="p-home">This was developed base on Build Your First Application at Docs CodeIgniter.</p>

<p class="p-home">But with complete CRUD.</p>

<p class="p-home">More info of this project
    <a href="/about">Here</a>
</p>

<?= $this->endSection() ?>