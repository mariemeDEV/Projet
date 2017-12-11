<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        //déclaration des variables de session
        $_SESSION["Login_user"]="user";
        $_SESSION["password_user"]="user";

        $_SESSION["Login_admin"]="admin";
        $_SESSION["password_admin"]="admin";

        $_SESSION["profil"];
    ?>

</body>
</html> 