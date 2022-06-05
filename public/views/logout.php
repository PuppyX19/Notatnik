<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/logout.css">

    <script src="public/js/redirect.js" defer></script>

    <title>LOGOUT</title>
</head>
<body>
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
            </div>
        </nav>
        <section class="content">
            <p>Are you sure?</p>
            <form action="logout" method="POST">
                <button id="logout-button" type="submit">LOGOUT</button>
            </form>
        </section>
    </main>
</div>
</body>