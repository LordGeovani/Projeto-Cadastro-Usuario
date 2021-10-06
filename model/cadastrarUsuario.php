
<!DOCTYPE>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <title>Noticias Cidade - Cadastro de Usuário</title>
        </head>
        <body>
        <main class="container">
    
            <div class="pt-2">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-center">
                        <h1>Cadastro de Usuários</h1>
                    </div>
                    <div class="card-body bg-warning text-dark">
                <?php

                /*
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
                */

                $nome = $_POST['txtNome'];
                $email = $_POST['txtEmail'];
                $sexo = $_POST['txtSexo'];
                $senha = $_POST['txtSenha'];
                $telefone = $_POST['txtFone'];
                $dtnasc = $_POST['txtNascimento'];
                $tipo = $_POST['txtTipo'];

                //include do script de conexão com banco de dados
                include "connect.php";

                //variavel da query
                $sql = "INSERT INTO usuario (
                        nome,
                        email,
                        sexo,
                        telefone,
                        senha,
                        dtnasc,
                        tipo
                    ) VALUES (
                        '$nome',
                        '$email',
                        '$sexo',
                        '$telefone',
                        '$senha',
                        '$dtnasc',
                        '$tipo'
                    )";

                //realziar o insert de dados
                $result = $conn->query($sql);

                //testar se o cadastro foi feito com sucesso
                if($result){
                    $html = <<<HTML
                        <p>Cadastro realizado com sucesso</p>                
HTML;
                    echo $html;
                }else{
                    echo "<br> Desculpe, tente novamente mais tarde...";
                }

                //encerra a conexão com o banco de dados
                $conn->close();
                ?> 
                        <div class=" d-flex justify-content-center">

                            <div class="col-md-2 py-3">
                                <a href="../view/formulario.php" class="btn bg-light text-black">Voltar</a>
                            </div>

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