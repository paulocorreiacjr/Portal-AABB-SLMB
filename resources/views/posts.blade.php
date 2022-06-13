<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Atletas</title>

  <link rel="stylesheet" href="assets/css/estilizacao-form1.css">

  <p id="title">Atletas</p>
</head>
<body>
  <nav>
    <div id="cadt1">
        <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="text" class="form-control" name="name" id="name" placeholder="Insira o Nome do Atleta" size="35"><br>Nome do Atleta
          <br>
          <input type="date" class="form-control" name="date" id="date" placeholder="Insira a Data de Nascimento" size="40"><br>Data de Nascimento
          <br>
          <input type="text" class="form-control" name="team" id="team" placeholder="Insira a Equipe" size="40"><br>Equipe
          <br>
          <input type="File" class="form-control" name="image" id="image" placeholder="Insira a Foto do Atleta" size="40"><br>Foto
          <input type="hidden" name="_token" placeholder="Imagem" value="{{ csrf_token() }}" />
        </form>
          <input type="submit" class="btn btn-defalut" value="Enviar" />
    </div>
  </nav>
</body>
</html>
    