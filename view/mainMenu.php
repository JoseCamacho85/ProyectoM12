<?php

include ("header.php");
if (checkSession()) {
    ?>
    <p>comprobación de usuario correcta</p>
    <?php

} else {
    header("Location: formErrorSession.html");
}
include ("footer.php");
?>