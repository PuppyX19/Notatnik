<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/addNote.css">
    <script src="public/js/noteAddValidate.js" defer></script>
    <script src="public/js/redirect.js" defer></script>


    <title>ADD NOTE</title>
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
        <nav id>
            <div class="core-buttons">
                <button id="notes-button" onclick="redirect('notes')">Notes</button>
                <button id="logout" onclick="redirect('logout')">LOGOUT</button>
            </div>
        </nav>

        <section class ="content">
            <h1>Add note</h1>
            <form action="addNote" method="POST">
                <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message)
                        {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="text" rows=5 placeholder="text"></textarea>
                <button id="add-button" type="submit">ADD</button>
            </form>
        </section>
    </main>
</div>
</body>

