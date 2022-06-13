<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Atletas</title>

  <link href="assets\css\estilizacao-form1.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/.css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/.css/adminlte.min.css">

  <p id="title" align="center" size="72">Atletas</p>
</head>
<body>
  
  <nav>
    <div id="cadt1" width="80%">
        <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="text" class="form-control" name="name" id="name" placeholder="Insira o Nome do Atleta" size="35"><br>Nome do Atleta
          <br>
          <input type="date" class="form-control" name="date" id="date" placeholder="Insira a Data de Nascimento" size="40"><br>Data de Nascimento
          <br>
          <input type="text" class="form-control" name="team" id="team" placeholder="Insira a Equipe" size="40"><br>Equipe
          <br>
          <input type="File" class="form-control" name="image" id="image" placeholder="Insira a Foto do Atleta" size="40"><br>
        
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
                <th>Nome do Atleta</th>
                <th>Data de Nasciento</th>
                <th>Equipe</th>
                <th>Foto</th>
              </tr>
            </thead>
            <tbody id="postagem2">
              <tr>
                @foreach ($atletas as $v)
                <td>{{ $v->id }}</td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->date }}</td>
                <td>{{ $v->team }}</td>
                <td><img src="{{ asset('image/atletas/'.$v->image) }}" width="25px"/></td>
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
    