@extends('bootstrap.model')
@section('headpage')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"></h3>

          Inscritos<span class="badge bg-success"></span>

          Reservas<span class="badge bg-danger"></span>

      <nav class="nav nav-masthead justify-content-center float-md-end">
       <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="beneficios">Benefícios</a>
          <a class="nav-link fw-bold py-1 px-0 active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar Vaga</a>
      </nav>
    </div>
  </header>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="icon.png" alt="" height="75">
    <h1 class="display-5 fw-bold">Laravel Fullstack</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">O Framework de desenvolvimento mais robusto e procurado do mercado, pagando saláriosde até <b>R$ 20.000 </b><i>(vinte mil)</i> / mês, para desenvolvedores sêniors. 
        Somos a única empresa de ensino e fábrica de software que coloca os alunos dentro de experiências reais, com todos os recursos que vão se deparar no mercado.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a class="btn btn-success btn-lg px-4 gap-3" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Quero fazer parte!</a>
        <button type="button" class="btn btn-warning">Grupo de informações e Venda</button>
      </div>
    </div>
  </div>


<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Nossos Diferenciais:</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <img src="cloud1.png" alt="cloud" height="100px">
        <div>
          <h3 class="fw-bold mb-0 fs-4">Servidor por Aluno</h3>
          <p>Seu cursinho só te mostra videos e você não tem acesso a recurso de verdade? Oferecemos 
            a real experiência de subir e gerenciar sua aplicação.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="couch.png" alt="couch" height="100px">
        <div>
          <h3 class="fw-bold mb-0 fs-4">Mentoria</h3>
          <p>Faremos Mentoria para sua carreira, mostrando as vantagens de stacks complementares, vagas e 
            crescimento pessoal.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="checklist.png" alt="couch" height="100px">
        <div>
          <h3 class="fw-bold mb-0 fs-4">Assuntos Periféricos</h3>
          <p>Separamos uma gama de assuntos periféricos que são importantes no cotidiano de um desenvolvedor 
            Laravel.
          </p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="credit.png" alt="couch" height="100px">
        <div>
          <h3 class="fw-bold mb-0 fs-4">Pagamento facilitado</h3>
          <p>Parcelanos o pagamento em até 12x, em diversas bandeiras</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" >Reserva de Vagas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="input" method="post">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><kbd>Email:</kbd></label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><kbd>Nome p/ Certificado:</kbd></label>
              <input type="text" class="form-control" name="nome" required>
            </div>
          </div>  
        
        <div class="modal-footer">
          <input type="reset" class="btn btn-primary" value="Limpar">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
          <input  type="submit" class="btn btn-success" value="Reservar">
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->