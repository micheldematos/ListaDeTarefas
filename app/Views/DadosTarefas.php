<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CONSULTAR</title>

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
              <a class="nav-link active" aria-current="page" href="/ListaDeTarefas/public/telaCadTarefa">Cadastrar Tarefa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ListaDeTarefas/public/consultar"><strong>Consultar Tarefa</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container exibir_tarf">
      <h2 class="text-decoration titulo_cadastrar" style="color: black; font-weight: bolder;">Consultar tarefas</h2>
    </div>

    <?php foreach ($bd_model->getResult() as $valor) { ?>
    <div class="container">
      <h4><?php echo $valor->nomeTarefa; ?>
        <a href="/ListaDeTarefas/public/telaEdiTarefa/<?php echo $valor->codTarefa; ?>">
          <img src="<?php echo base_url("assets/images/lapis.svg")?>" id="img_botao_edi" title="Editar"></a>
                    
        <a href="/ListaDeTarefas/public/delTarefa/<?php echo $valor->codTarefa; ?>">
          <img src="<?php echo base_url("assets/images/lixeira.svg")?>" id="img_botao_del" title="Deletar"></a>
      </h4>

      <p id="texto_desc"><?php echo $valor->descTarefa; ?></p>
    </div><br><?php } ?>

    <div class="container adicionar">
        <a href="/ListaDeTarefas/public/telaCadTarefa"><img src="<?php echo base_url("assets/images/adicionar.svg")?>" id="img_botao_add" title="Adicionar"></a>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>