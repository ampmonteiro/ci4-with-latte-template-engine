<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?= form_open('news/store') ?>
<p class="form-control">
    <label for="title">Title</label>
    <input id="title" name="title" value="<?= old('title') ?>">
</p>

<p class="form-control">
    <label for="body">Text</label>
    <textarea id="body" name="body" cols="45" rows="4"><?= old('body') ?></textarea>
</p>

<button>
    Create news item
</button>
<?= form_close() ?>
<?= $this->endSection() ?>