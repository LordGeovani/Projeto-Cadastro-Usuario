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
        <title>Noticias Cidade - Pesquisa de usuário</title>
    </head>
    <body>

        <main class="container">

            <div class="pt-2">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-center">
                        <h1>Pesquisa de usuário</h1>
                    </div>
                    <div class="card-body bg-warning text-dark">
                        
                        <form method="post">

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="txtBusca" class="form-label, py-3">Nome:</label>
                                    <input type="text" name="txtBusca" id="txtBusca" required class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-2 py-3">
                                    <input type="submit" value="Pesquisar" name="txtPesquisar" id="txtPesquisar" class="btn bg-light text-black">
                                </div>

                                <div class="col-md-2 py-3">
                                    <a href="formulario.php" class="btn bg-light text-black">Voltar</a>
                                </div>
                            </div>

                        </form>

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

                                $pesUsuario = FILTER_INPUT(INPUT_POST, 'txtBusca', FILTER_SANITIZE_STRING);
                                $pesquisar = FILTER_INPUT(INPUT_POST, 'txtPesquisar', FILTER_SANITIZE_STRING);
                                
                                $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesUsuario%'";

                                $result = $conn->query($sql);
                                if($pesquisar){
                                    
                                    while($row_usuario = mysqli_fetch_assoc($result)){
                                        $id = $row_usuario['id'];
                                        $nome = $row_usuario['nome'];
                                        $email = $row_usuario['email'];
                                        $sexo = $row_usuario['sexo'];
                                        $telefone = $row_usuario['telefone'];
                                        $nascimento = $row_usuario['dtnasc'];
                                        $tipo = $row_usuario['tipo'];
        
                                        $html2 = <<<HTML
        
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
                                    echo $html2;
                                    }
                                }
                        $result->close();

                        $conn->close();
                        ?>
                    </table>

                    </div>
                    <div class="card-footer bg-dark text-light d-flex justify-content-center">
                        <p>Todos os direitos reservados. By Geovani</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>