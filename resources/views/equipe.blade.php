<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modalidades</title>

  <link href="assets\css\estilizacao-form1.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/.css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/.css/adminlte.min.css">

  <p id="title" align="center" size="72">Modalidades</p>
</head>
<body>
  
  <nav>
    <div id="cadt1" width="80%">
        <form action="/post.equipe" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="text" class="form-control" name="team" id="team" placeholder="Equipe" size="35">Equipe<br>
          <br>
          <input type="text" class="form-control" name="modalidade" id="modalidade" placeholder="Insira a Modalidade" size="40">Modalidade<br>
          <br>
          <input type="text" class="form-control" name="Cidade" id="Cidade" placeholder="Cidade" size="40">Cidade<br>
          <br>
        
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
                <th>Equipe</th>
                <th>Modalidade</th>
                <th>Cidade</th>
              </tr>
            </thead>
            <tbody id="postagem2">
              <tr>
                @foreach ($equipes as $equipe)
                <td>{{ $equipe->id }}</td>
                <td>{{ $equipe->team }}</td>
                <td>{{ $equipe->modalidade }}</td>
                <td>{{ $equipe->cidade }}</td>
                
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
    