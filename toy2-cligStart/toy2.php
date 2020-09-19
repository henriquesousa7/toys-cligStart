<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Toy 2 - cligStart</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Filial</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'generate_emails.php';

                    foreach($allFuncs as $filial => $funcs){
                        foreach($funcs as $index => $func){
                            echo "<tr>";
                            echo "<td>" . $func . "</td>";
                            echo "<td>" . $funcEmails[$filial][$index] . "</td>";
                            echo "<td>" . $filial . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>