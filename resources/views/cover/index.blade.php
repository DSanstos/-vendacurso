@php
$sitename = "Laravel FullStack";
@endphp
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{$sitename}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">{{$sitename}}</h3>Inscritos<span class="spinner-grow badge bg-success">New</span>Reservas<span class="badge bg-danger">New</span>
      <nav class="nav nav-masthead justify-content-center float-md-end">
       <!-- <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="beneficios">Benefícios</a>
          <a class="nav-link fw-bold py-1 px-0 active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar Vaga</a>
       -->
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Turma online 3x na semana</h1>
    <p class="lead">Estamos nos preparando para a sua transformação em um programador Fullstack no framwork Laravel.
      Serão turmas online com profissional de Mercado, atuante em empresas multi-nacionais.
    </p>
    <p class="lead">
      <a href="https://chat.whatsapp.com/EoPWqg7NOPEAMQUvKg3lV6" class="btn btn-lg btn-secondary fw-bold border-white bg-white">grupo de esquenta</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Para acompanhar os bastidores siga <a href="https://www.instagram.com/danielshoganmkt/" class="text-white">@danielshoganmkt</a></p>
  </footer>
</div>
<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserva de Vagas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="input" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><kbd>Email address</kbd></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- model -->



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>    
  </body>
</html>
