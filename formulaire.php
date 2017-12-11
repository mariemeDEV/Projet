<!DOCTYPE html>
    <head>

    <h4>USER</h4><br>
        <a href="UsersSessions.php"><button type="submut">DECONNECT</button></a>
        <title></title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <center>
        <?php
            echo("<h1 style='text-decoration:underline;color:gray'>Modification des informations</h1><br>
            <form method='POST' action='Personnes.php' style='border:2px solid orange'>
            <table>
                <tr>
                    <td><label> Identifiant </label></td>
                    <td><input type='text' name='id' value='$_GET[Id]' required='required' readonly/></td>
                    <td><label> Nom </label></td>
                    <td><input type='text' name='nom' value='$_GET[nom]' required='required'/></td>
                </tr>
                <tr>
                    <td><label> Prenom </label></td>
                    <td><input type='text' name='prenom' value='$_GET[prenom]' required='required'/></td>
                    <td><label> Age </label></td>
                    <td><input type='number' name='age' value='$_GET[age]' required='required'/></td>
                </tr>
                <tr>
                    <td><input type='submit' name='modifier' value='Valider'/></td>
                    <td><input type='reset' value='Annuler'/>
                </tr>
            </table>
            </form>");            
            ?>
        </center>
    </body>
</html>