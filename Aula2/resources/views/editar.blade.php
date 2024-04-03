<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="grid text">
    <div class="container text">
      <div class=" row align-items-start">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">

          <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Consultar</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <P>
        <h5>Cadastrar - Agendamento de Potenciais Clientes</h5>
        </P>
        <br>
        <h6>Sistema Utilizado para agendamento de serviços.</h6>

        <P></P>
        <form action="/editar/{{$contato->id}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="exampleInput" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{$contato->nome}}" id="exampleInput" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInput" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="{{$contato->telefone}}" id="exampleInput" />
          </div>
          <div class="mb-3">
            <label for="exampleInput" class="form-label">Data do Contato</label>
            <input type="date" name="data_de_contato" class="form-control" value="{{$contato->data_de_contato}}" id="exampleInput" />
          </div>
          <label for="exampleInput" class="form-label">Origem</label>
          <select class="form-select" name="origem" value="{{$contato->origem}}" aria-label="Default select example">
            <option selected>Selecione o tipo de Contato</option>
            <option value="Telefone Celular">Telefone Celular</option>
            <option value="Telefone Fixo">Telefone Fixo</option>
            <option value="Outro">Outro</option>
          </select>
          <br />
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
            <textarea class="form-control" name="observacao" value="{{$contato->observacao}}" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary bg-dark border-bottom border-body">Atualizar</button>
        </form>
      </div>
</body>

</html>