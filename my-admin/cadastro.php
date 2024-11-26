<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="https://kit.fontawesome.com/ea4c1412eb.js"crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <h1 class="logo">MyPHP</h1>
            <div class="linha1"></div>
        </nav>
        <button class="iconCriarProjeto">
            <i class="fa-solid fa-plus plusIcon" aria-hidden="true"></i>
            <span class="sr-only">Criar Projeto</span>
        </button>
        <div class="form-container">
            <h2 class="form-title">Cadastro</h2>
            <form class="form">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email">
                
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                
                <button type="submit" class="form-button">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>