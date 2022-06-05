<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <script src="public/js/redirect.js" defer></script>

    <title>PAGE</title>
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
                <button id="notes-button" onclick="redirect('notes')">Notes</button>
                <button id="logout" onclick="redirect('logout')">LOGOUT</button>
            </div>
        </nav>
        <section class ="content">
            <p>Welcome back, <?php echo $_SESSION['login']  ?> !</p>
        </section>
    </main>
</div>
</body>