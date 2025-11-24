<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: white;
            text-align: center;
        }

        h1 {
            font-size: 3em;
            animation: fadeIn 2s ease;
        }

        p {
            font-size: 1.2em;
            animation: fadeIn 3s ease;
        }

        .btn {
            margin-top: 20px;
            padding: 12px 25px;
            font-size: 1em;
            background-color: #ffffff;
            color: #4e54c8;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ddd;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div>
        <h1>¡Bienvenido!</h1>
        <p>Estamos muy felices de tenerte aquí. Disfruta tu visita.</p>
    </div>


</body>
</html>
