<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Toy 1 - cligStart</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'generate_emails.php';

                    for($i = 0; $i < count($func); $i++){
                        echo "<tr>";
                        echo "<td>" . $func[$i] . "</td>";
                        echo "<td>" . $funcEmails[$i] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>