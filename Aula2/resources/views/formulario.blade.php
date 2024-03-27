<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <div class="mb-3">
                    <label for="inputname" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="inputname" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="inputphone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="inputphone" placeholder="Digite seu telefone">
                </div>
                <div class="col-12">
                    <label for="inputphone" class="form-label">Origem:</label>
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Selecionar tipo</option>
                        <option value="1">Telefone Celular</option>
                        <option value="2">Telefone Empresarial</option>
                        <option value="3">Telefone fixo</option>
                    </select>
                </div><p></p>
                <div class="mb-3">
                    <label for="inputdate" class="form-label">Data do Contato:</label>
                    <input type="date" class="form-control" id="inputdate">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>