<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/notes.css">
    <script src="public/js/redirect.js"></script>
    <title>NOTES</title>
</head>
<body>
<?php require "public/views/header.php"; ?>
<div class="container">
    <header>
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
    </header>

    <main>
        <nav>
            <div class="core-buttons">
                <button id="add-note-button" onclick="redirect('addNote')">Add note</button>
                <button id="logout" onclick="redirect('logout')">LOGOUT</button>
            </div>
        </nav>
        <section class="content">
            <?php foreach ($notes as $note): ?>
                <div id="<?= $note->getNoteId(); ?>">
                    <div>
                        <h2><?= $note->getTitle(); ?></h2>
                        <p><?= $note->getText(); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</div>
</body>

