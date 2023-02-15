<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<p><?= esc($news['body']) ?></p>

<section style="margin-top:2rem;display: flex; gap: 10rem;">
    <a href="/news/<?= esc($news['slug'], 'url') ?>/edit">
        Edit article
    </a>
    <?= form_open(
        'news/delete',
        hidden: ['news_id' => esc($news['id'])] # take advantage of named args since php 8
    ) ?>
    <button>Delete</button>
    <?= form_close() ?>
</section>

<?= $this->endSection() ?>