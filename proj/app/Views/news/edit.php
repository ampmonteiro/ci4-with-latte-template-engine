<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?= form_open(
    'news/update',
    hidden: ['news_id' => esc($news['id'])]  # take advantage of named args since php 8
) ?>
<p class="form-control">
    <label for="title">Title</label>
    <input id="title" name="title" value="<?= old('title') ?? $news['title'] ?>">
</p>

<p class="form-control">
    <label for="body">Text</label>
    <textarea id="body" name="body" cols="45" rows="4"><?= old('body') ?? $news['title'] ?></textarea>
</p>

<button>
    Update
</button>
<?= form_close() ?>
<?= $this->endSection() ?>