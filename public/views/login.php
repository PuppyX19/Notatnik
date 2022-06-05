<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg" >
        </div>
        <div class="login-container">
            <form class="login-form" action="login" method="POST">
                <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message)
                        {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="login" type="text" placeholder="login">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div>
</body>