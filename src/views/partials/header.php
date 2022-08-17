<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="manifest" href="/manifest.json" />
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&amp;display=swap" rel="stylesheet">
        <?php if (isset($extra_css)): ?>
            <?= $extra_css; ?>
        <?php endif ?>
        <link href="/styles/style.css" rel="stylesheet" />
        <title><?= $title ?></title>
    </head>
    <body>
        <header>
            <input type="checkbox" id="hamburger">
            <label for="hamburger">
                <div></div>
                <div></div>
            </label>
            <nav>
                <a href="/" class="<?php if ($_SERVER["REQUEST_URI"] === "/") {
                    echo 'active';
                } ?>">Intro</a>
                <a href="/play-games" class="<?php if ($_SERVER["REQUEST_URI"] === "/play-games") {
                    echo 'active';
                } ?>">Games</a>
                <a href="/projects" class="<?php if ($_SERVER["REQUEST_URI"] === "/projects") {
                    echo 'active';
                } ?>">Projects</a>
            </nav>
        </header>