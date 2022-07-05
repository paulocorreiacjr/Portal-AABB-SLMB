@extends('adminlte::page')

@section('title', 'Painel Fsix Tecnologia')



@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulário de Cadastro de Jogos</h3>
              </div>
              <form action="/post.jogos" method="POST" enctype="multipart/form-data" width="100px">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for=>Torneio</label>
                    <input type="text" class="form-control" name="torneio" id="torneio" placeholder="Insira o Nome do Torneio">
                  </div>
                  <div class="form-group">
                    <label for=>Partida</label>
                    <input type="text" class="form-control" name="partida" id="partida" placeholder="Insira a Equipe">
                  </div>
                  <div class="form-group">
                    <label for=>Local</label>
                    <input type="text" class="form-control" name="local" id="local" placeholder="Insira o Nome do Atleta">
                  </div>
                  <div class="form-group">
                    <label>Data da Partida</label>
                    <input type="Date" class="form-control" name="date" id="date" placeholder="Insira a Data de Nascimento">
                  </div>
                  <div class="form-group">
                    <label>Hora da Partida</label>
                    <input type="time" class="form-control" name="hora" id="hora" placeholder="Insira a hora d partida">
                  </div>
                  <div class="form-group">
                    <label>Gols</label>
                    <input type="text" class="form-control" name="gols" id="gols" placeholder="gols">
                  </div>
                  <div class="form-group">
                    <label>Cartaoamarelo</label>
                    <input type="text" class="form-control" name="cartaoamarelo" id="cartaoamarelo" placeholder="cartaoamarelo">
                  </div>
                  <div class="form-group">
                    <label>Cartaovermelho</label>
                    <input type="text" class="form-control" name="cartaovermelho" id="cartaovermelho" placeholder="cartaovermelho">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Autorizo o uso dos dados em páginas por FSIX Tecnologia</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">              
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Banco de Atletas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="vertical-aligne: middle">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Torneio</th>
                      <th>Partida</th>
                      <th>Local</th>
                      <th>Data</th>
                      <th>Hora</th>
                      <th>Gols</th>
                      <th>CA</th>
                      <th>CV</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jogos as $jogo)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $jogo->torneio }}</td>
                      <td>{{ $jogo->partida }}</td>
                      <td>{{ $jogo->local }}</td>
                      <td>{{ $jogo->data }}</td>
                      <td>{{ $jogo->hora }}</td>
                      <td>{{ $jogo->gols }}</td>
                      <td>{{ $jogo->cartaoamarelo }}</td>
                      <td>{{ $jogo->cartaovermelho }}</td>
                      <td>
                        <form action="/jogos/{{ $jogo->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger delete-btn">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <section>
        <footer>
            <strong>Copyright &copy; 2022 <a href="https:fsixtecnologia.com.br">FSIX Tecnologia</a>.</strong> Todos os direitos reservados.
        </footer>
    </section>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="\assets\css\estilizacao.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

