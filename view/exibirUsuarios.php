<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Lista de Usuários</title>
    </head>
    <body>
        
        <!--
        +----------+--------------+------+-----+---------------------+----------------+
        | Field    | Type         | Null | Key | Default             | Extra          |
        +----------+--------------+------+-----+---------------------+----------------+
        | id       | int(11)      | NO   | PRI | NULL                | auto_increment |
        | nome     | varchar(255) | YES  |     | NULL                |                |
        | email    | varchar(255) | YES  | UNI | NULL                |                |
        | sexo     | varchar(10)  | YES  |     | NULL                |                |
        | telefone | varchar(25)  | YES  |     | NULL                |                |
        | senha    | varchar(255) | YES  |     | NULL                |                |
        | dtnasc   | varchar(25)  | YES  |     | NULL                |                |
        | tipo     | varchar(25)  | YES  |     | NULL                |                |
        | data     | timestamp    | NO   |     | current_timestamp() |                |
        +----------+--------------+------+-----+---------------------+----------------+
        -->
        <main class="container">

            <div class="pt-2">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-center">
                        <h1>Cadastro de Usuários</h1>
                    </div>
               
                    <table border="1" width="100%">

                        <tr>
                            <th class="bg-warning border border-dark">ID</th>
                            <th class="border border-dark">NOME</th>
                            <th class="bg-warning border border-dark">EMAIL</th>
                            <th class="border border-dark">SEXO</th>
                            <th class="bg-warning border border-dark">TELEFONE</th>
                            <th class="border border-dark">DATA DE NASCIMENTO</th>
                            <th class="bg-warning border border-dark">TIPO</th>
                        </tr>

                        <?php
                            include "../model/connect.php";

                            $sql = "SELECT * FROM usuario";

                            $result = $conn->query($sql);

                            while($linha = $result->fetch_array()){
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $email = $linha['email'];
                                $sexo = $linha['sexo'];
                                $telefone = $linha['telefone'];
                                $nascimento = $linha['dtnasc'];
                                $tipo = $linha['tipo'];

                                $html = <<<HTML

                                <tr>
                                        <td class="bg-warning border border-dark">$id</td>
                                        <td class="border border-dark">$nome</td>
                                        <td class="bg-warning border border-dark">$email</td>
                                        <td class="border border-dark">$sexo</td>
                                        <td class="bg-warning border border-dark">$telefone</td>
                                        <td class="border border-dark">$nascimento</td>
                                        <td class="bg-warning border border-dark">$tipo</td>
                                </tr>

HTML;       
                                echo $html;
                            }
                    $result->close();

                    $conn->close();
                    ?>
                    </table>

                    <div class=" bg-warning d-flex justify-content-center">

                            <div class="col-md-2 py-3">
                                <a href="formulario.php" class="btn bg-light text-black">Voltar</a>
                            </div>

                    </div>
                    <div class="card-footer bg-dark text-light d-flex justify-content-center">
                        <p>Todos os direitos reservados. By Geovani</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>