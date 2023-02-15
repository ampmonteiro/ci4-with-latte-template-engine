<?= $this->extend('layouts/default') ?>
<?= $this->section('styles') ?>
<style>
    article,
    main {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    article {
        gap: 0.5rem;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php if (!empty($news) && is_array($news)) : ?>

    <?php foreach ($news as $item) : ?>
        <article>
            <h3>
                <?= esc($item['title']) ?>
            </h3>

            <p class="main">
                <?= esc($item['body']) ?>
            </p>
            <a href="/news/<?= esc($item['slug'], 'url') ?>">
                View article
            </a>
        </article>
    <?php endforeach ?>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<?= $this->endSection() ?>