<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CADASTRAR</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
</head>
<body>

  <main class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg bg-black navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="/ListaDeTarefas/public">
          <img src="<?php echo base_url("assets/images/caderno.svg")?>" id="logo_home">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/ListaDeTarefas/public/telaCadTarefa"><strong>Cadastrar Tarefa</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ListaDeTarefas/public/consultar">Consultar Tarefa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="form_cad">
      <h2 class="text-decoration titulo_cadastrar" style="color: black; font-weight: bolder;">Cadastrar tarefa</h2>
      <form action="cadTarefa" method="post">
        <div class="input-group mb-3 campo_nome">
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nome" placeholder="Nome" required>
        </div>

        <div class="input-group campo_descricao">
          <textarea class="form-control" aria-label="With textarea" name="desc" placeholder="Descrição" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark botao_cadastrar">Cadastrar</button>
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

