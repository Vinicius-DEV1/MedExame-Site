# Site
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Inicial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        header {
            background-color: #007bff;
            padding: 10px 0;
            color: white;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav-link {
            color: white;
            font-weight: 500;
            text-decoration: none;
            margin: 0 10px;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .banner {
            margin-top: 20px;
            background-color: #28a745;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            border-radius: 10px;
        }
        .info-section {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Pergunta inicial -->
    <script>
        window.onload = function() {
            const estado = prompt("De qual estado você é?");
            if (estado) {
                alert(`Bem-vindo(a) do estado ${estado}!`);
            }
        };
    </script>

    <!-- Cabeçalho -->
    <header class="container-fluid">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">Minha Logo</div>
            <nav class="d-flex">
                <a href="#" class="nav-link">Opção 1</a>
                <a href="#" class="nav-link">Opção 2</a>
                <a href="#" class="nav-link">Opção 3</a>
                <a href="#" class="nav-link">Opção 4</a>
                <a href="#" class="nav-link">Opção 5</a>
            </nav>
            <div>
                <a href="#" class="btn btn-outline-light btn-sm">Login</a>
                <a href="#" class="btn btn-light btn-sm">Cadastro</a>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <div class="banner container text-center">
        Espaço para o Banner
    </div>

    <!-- Informações básicas -->
    <div class="info-section container mt-4">
        <h2>Informações Básicas</h2>
        <p>Aqui você pode adicionar informações sobre o site, descrição de serviços ou qualquer outro conteúdo relevante.</p>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025 Meu Site. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
