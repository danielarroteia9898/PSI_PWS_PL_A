<html>
<head>
    <title>Vista form plano Prestacções</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <p>Crédito: <input type="text" name="credito"> </p>
        <p>numero de prestações: <input type="text" name="numPrestacoes"> </p>
        <button type="submit">Criar Plano</button>
    </form>

</body>
</html>
