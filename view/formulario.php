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
                        
                        <form method="post" action="../model/cadastrarUsuario.php" >

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="txtNome" class="form-label, py-3">Nome:</label>
                                    <input type="text" name="txtNome" id="txtNome" required class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="txtEmail" class="form-label, py-3" >E-mail:</label>
                                    <input type="email" name="txtEmail" id="txtEmail" required class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="txtSenha" class="form-label, py-3">Senha:</label>
                                    <input type="password" name="txtSenha" id="txtSenha" required class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="txtFone" class="form-label, py-3">Telefone:</label>
                                    <input type="tel" name="txtFone" id="txtFone" placeholder="(XX) XXXXX-XXXX" required class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label for="txtNascimento" class="form-label, py-3">Data de nascimento:</label>
                                    <input type="date" name="txtNascimento" id="txtNascimento" required class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label for="txtSexo" class="form-label, py-3">Sexo:</label><br>
                                    <select id="txtSexo" name="txtSexo" class="form-control" checked="checked">
                                        <option value="f" selected>Feminino</option>
                                        <option value="m">Masculino</option>
                                    </select>
                                </div>

                        
                                <div class="col-md-3">
                                    <label for="txtTipo" class="form-label, py-3">Tipo:</label><br>
                                    <select id="txtTipo" name="txtTipo" class="form-control" checked="checked">
                                        <option value="user" selected>Usuário</option>
                                        <option value="adm">Administrador</option>
                                    </select>
                                </div>
                          

                            <div class="row d-flex justify-content-center">

                                <div class="col-md-2 py-3">
                                    <input type="submit" value="Cadastrar" name="btn" id="txtBtn" class="btn bg-light text-black">
                                </div>

                                <div class="col-md-2 py-3">
                                    <input type="reset" value="Limpar" name="btn" id="txtBtn" class="btn bg-light text-black">
                                </div>

                                <div class="col-md-2 py-3">
                                    <a href="exibirUsuarios.php" class="btn bg-light text-black">Listar usuários</a>
                                </div>
                                
                                <div class="col-md-2 py-3">
                                    <a href="pesquisarUsuarios.php" class="btn bg-light text-black">Pesquisar usuário</a>
                                </div>

                            </div>

                        </form>

                    </div>
                    <div class="card-footer bg-dark text-light d-flex justify-content-center">
                        <p>Todos os direitos reservados. By Geovani</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>