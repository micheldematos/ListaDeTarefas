<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INÍCIO</title>

    

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
                            <a class="nav-link" href="/ListaDeTarefas/public/telaCadTarefa">Cadastrar Tarefa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ListaDeTarefas/public/consultar">Consultar Tarefa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <section id="sec1" class="row d-flex align-items-center sec">
                <article class="col-md-5">
                    <h1 class="text-decoration" style="color: black; font-weight: bolder;">Introdução</h1>
                    <p id="par_intro">Conforme requisitado no processo seletivo para a vaga de estagiário pelo Senac de Rio Claro, esta é a página inicial da aplicação desenvolvida, que se consiste em um CRUD (Create, Read, Update e Delete) de uma lista de tarefas. Na barra de menu superior, é possível visualizar o acesso as funcionalidades de cadastro e consulta, onde as edições e remoções das tarefas cadastradas estão disponíveis na tela de consulta.</p>
                </article>
                <article class="col-md-7">
                    <img class="img-fluid rounded" src="<?php echo base_url("assets/images/agenda.jpg")?>">
                </article>
            </section>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>