<!DOCTYPE html>
<html>
    <head>
        <title>Bitacle -- Tu red de viajes</title>
        <script src="js/jquery.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/validations.js"></script>
    </head>
    
    <navbar>
        <form id="userForm" method="POST" action="../controller/controllerUser.php">
            <img id="logo" src=""/>
            <input id="user" type="TEXT" class="userInput" required>
            <input id="password" type="PASSWORD" class="userInput" required>
            <input type="submit" id="ok" value="logeate"/><br>
            <label id="userError"></label><label id="userError"></label><br>
            <a href="register.php">Registrate</a>
        </form>
    </navbar>