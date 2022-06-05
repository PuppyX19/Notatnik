<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/admin.css">
    <script src="public/js/redirect.js" defer></script>


    <title>PAGE</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['roleId'] !== 1) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/welcomePage");
}
?>
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
            <p>Please provide login <br> of the user that u want to delete</p>
            <form class="admin-panel" method="POST">
                <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message)
                        {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="login" type="text" placeholder="Provide a login">
                <button type="submit">DELETE USER</button>
            </form>
        </section>
    </main>
</div>
</body>