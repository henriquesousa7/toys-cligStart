<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Toy 4 - cligStart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">

            <header>
                <h6>Lista de nomes e e-mails da Empresa X</h6>
            </header>

            <div class="filial">
                <h2 id="adamantina">Filial de Adamantina</h2>
                <table class="table table-sm">
                    <thead id="thead-yellow">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Filial</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-yellow">
                        <?php
                            require_once 'generate_emails.php';

                            foreach($allFuncs as $filial => $funcs){
                                foreach($funcs as $index => $func){
                                    if(strcmp($filial, 'Adamantina') == 0){
                                        echo "<tr>";
                                        echo "<td>" . $func . "</td>";
                                        echo "<td><a href='https://outlook.live.com/'>" . $funcEmails[$filial][$index] . "</a></td>";
                                        echo "<td>" . $filial . "</td>";
                                        echo "</tr>";
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="filial">
                <h2 id="borborema">Filial de Borborema</h2>
                <table class="table table-sm">
                    <thead id="thead-green">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Filial</th>
                    </tr>
                    </thead>
                    <tbody id="tbody-green">
                        <?php
                        require_once 'generate_emails.php';

                        foreach($allFuncs as $filial => $funcs){
                            foreach($funcs as $index => $func){
                                if(strcmp($filial, 'Borborema') == 0){
                                    echo "<tr>";
                                    echo "<td>" . $func . "</td>";
                                    echo "<td><a href='https://outlook.live.com/'>" . $funcEmails[$filial][$index] . "</a></td>";
                                    echo "<td>" . $filial . "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="filial">
                <h2 id="cajamar">Filial de Cajamar</h2>
                <table class="table table-sm">
                    <thead id="thead-blue">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Filial</th>
                    </tr>
                    </thead>
                    <tbody id="tbody-blue">
                        <?php
                        require_once 'generate_emails.php';

                        foreach($allFuncs as $filial => $funcs){
                            foreach($funcs as $index => $func){
                                if(strcmp($filial, 'Cajamar') == 0) {
                                    echo "<tr>";
                                    echo "<td>" . $func . "</td>";
                                    echo "<td><a href='https://outlook.live.com/'>" . $funcEmails[$filial][$index] . "</a></td>";
                                    echo "<td>" . $filial . "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>