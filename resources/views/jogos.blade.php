<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jogos</title>

  <link href="assets\css\estilizacao-form1.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/.css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/.css/adminlte.min.css">

  <p id="title" align="center" size="72">Jogos</p>
</head>
<body>
  
  <nav>
    <div id="cadt1" width="80%">
        <form action="/post.jogos" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="text" class="form-control" name="torneio" id="torneio" placeholder="Insira o Nome do Torneio" size="35">Torneio<br>
          <br>
          <input type="text" class="form-control" name="partida" id="partida" placeholder="Partida" size="40">Partida<br>
          <br>
          <input type="text" class="form-control" name="local" id="local" placeholder="Local da Partida" size="35">Local da Partida<br>
          <br>
          <input type="date" class="form-control" name="date" id="date" placeholder="Insira a Data da Partida" size="40">Data da Partida<br>
          <br>
          <input type="time" class="form-control" name="hora" id="hora" placeholder="Insira a Hora da Partida" size="35">Hora da Partida<br>
          <br>
          <input type="text" class="form-control" name="gols" id="gols" placeholder="Gols" size="40"><br>Gols
          <br>
          <input type="text" class="form-control" name="cartaoamarelo" id="cartaoamarelo" placeholder="Cartão Amarelo" size="40">Cartão Amarelo<br>
          <br>
          <input type="text" class="form-control" name="cartgaovermelho" id="cartaovermelho" placeholder="Cartão Vermelho" size="40">Cartão Vermelho<br>
        
          <input type="submit" class="btn btn-primary" value="Enviar" />
         </form>
          <br>
    </div>
  </nav>
<div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" vertical align="middle">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" vertical align="middle">
          <table class="table table-head-fixed text-nowrap" width="400px" dissplay="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Torneio</th>
                <th>Partida</th>
                <th>Local</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Gols>
                <th>Cartão Amarelo</th>
                <th>Cartão Vermelho</th>
              </tr>
            </thead>
            <tbody id="postagem2">
              <tr>
                @foreach ($jogos as $jogo)
                <td>{{ $jogo->id }}</td>
                <td>{{ $jogo->torneio }}</td>
                <td>{{ $jogo->partida }}</td>
                <td>{{ $jogo->local }}</td>
                <td>{{ $jogo->data }}</td>
                <td>{{ $jogo->hora }}</td>
                <td>{{ $jogo->gols }}</td>
                <td>{{ $jogo->cartaoamarelo }}</td>
                <td>{{ $jogo->cartaovermelho }}</td>
                @endforeach<br>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="assets/.js/demo.js"></script>
    <script src="assets/.js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
    <script src="assets/.js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
    <script src="assets/.js/adminlte.min.js"></script>
</body>
</html>
    