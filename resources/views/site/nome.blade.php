<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual é o seu nome?</title>
    <style>
        /* Estilos para centralizar e deixar o formulário bonito */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .formulario-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
            margin-bottom: 1.5rem;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Garante que o padding não afete a largura total */
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        #mensagem {
            margin-top: 15px;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="formulario-container">
        <h2>Olá!</h2>
        <form id="formNome" method="POST">
            @csrf
            <label for="nome">Qual é o seu nome?</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui" required>
            <button type="submit">Enviar</button>
        </form>
        <p id="mensagem"></p>
    </div>
</body>
</html>