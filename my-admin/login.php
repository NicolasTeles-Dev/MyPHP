<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
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
            <h1 class="form-title">Login</h1>
            <form class="form">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Digite seu email">
                
                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha">
                
                <button type="submit" class="form-button">Login</button>
            </form>
            <p class="form-footer">
                Não tem uma conta? <a href="cadastro.php" class="form-link">Cadastre-se</a>
            </p>
        </div>
    </div>
</body>
</html>