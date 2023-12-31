<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?= css(['css/site.css']) ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

<header class="header">
  <a class="logo" href="<?= $site->url() ?>">
    <?= $site->title()->esc() ?>
  </a>

  <nav class="menu">
    <?php foreach ($site->children()->listed() as $item): ?>
      <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
    <?php endforeach ?>
    <?php snippet('social') ?>
  </nav>
</header>

<main class="main">
