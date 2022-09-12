<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">,
    <link rel="shortcut icon" href="/public/favicon.ico">

    <title>Cadastro de atividades</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="jumbotron">

            <h1 class='cabecalho'>@yield('cabecalho')</h1>
        </div>
        @yield('conteudo')
    </div>
</body>
</html>

<style>

body{
    background-color: #374151;
    overflow: auto;
}

.cabecalho {
    display:flex;
    align-items: center;
    justify-content: center;
    color: #FFFF;
}

.jumbotron {
    background-color:#F29400;
}

</style>
