<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <script src="public/js/registerValidate.js" defer></script>

    <title>REGISTER PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg" >
        </div>
        <div class="register-container">
            <form class="register-form" action="register" method="POST">
                <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message)
                        {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="email">
                <input name="login" type="text" placeholder="login">
                <input name="password" type="password" placeholder="password">
                <input name="repeat-password" type="password" placeholder="confirm password">
                <button>REGISTER</button>
            </form>
        </div>
    </div>
</body>