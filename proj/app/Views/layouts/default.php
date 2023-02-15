<!doctype html>
<html>

<head>
    <title> <?= esc($title) ?> </title>
    <link rel="stylesheet" href="/styles.css">

    <?= $this->renderSection('styles') ?>
</head>

<body>

    <?= $this->include('templates/header') ?>
    <main>
        <h1><?= esc($title) ?></h1>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('templates/footer') ?>

    <?= $this->renderSection('js') ?>
</body>

</html>