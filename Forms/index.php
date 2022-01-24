<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms</title>
</head>
<body>
    <form action="hello.php" method = "GET">
        <input type="text" name="userName" placeholder="User Name">
        <input type="submit">
    </form>
    <ul>
        <li>ir GET ir POST sukuria asocijuota masyva</li>
        <li>ir GET ir POST turi kintamuosius $_GET ir $_POST jie superglobalus</li>
        <li>GET masyvas paduodamas per URL nejautriems duomenims. ribotas zenklu skaicius(2000)</li>
        <li>POST masyvas per HTTP perduodamas</li>
    </ul>
    <p>GET metodu niekada nesiunciame slaptazodziu</p>
</body>
</html>