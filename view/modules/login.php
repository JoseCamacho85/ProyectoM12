<form method="POST" class="login" id="formLogin">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a>Usuario: <input id="user" type="text" name="username" class="userInput" required></a>
        </li>
        <li>
            <a>Password: <input id="pass" type="password" name="password" class="userInput" required></a>
        </li>
        <li>
            <a href="#" id="login"><span class="glyphicon glyphicon-user"></span> Login</a>
        </li>
        <li>  
            <a href="../view/addUser.php" id="register"><span class="glyphicon glyphicon-log-in"></span> Signin</a>
        </li>
    </ul>
</form>
<script>
<?php include("js/login.js"); ?>
</script>

