@php
$sitename = "Laravel FullStack";
use App\Models\usuariosModel;
use App\Models\LinksPagModel;
$reservas = usuariosModel::count();
$inscritos = LinksPagModel::where("pago", true)->count();
//$inscritos = 1; //remover ou comentar
if($inscritos > 90){
        $classBadge = "danger";
    } else {
        $classBadge = "success";
    };
@endphp
@extends('bootstrap.model')
@section('headpage')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">

</style>
@endsection
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-white">{{$sitename}}</span>
      </a>

      <ul class="nav nav-pills">
        @if($inscritos != 0)
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">
            Inscritos - <span class="badge text-bg-{{$classBadge}}">{{$inscritos}}</span></a></li>
        @endif
        @if($reservas != 0)
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">
            Reservas - <span class="badge text-bg-danger">{{$reservas}}</span></a></li>
        @endif
        <li class="nav-item"><a href="/beneficios" class="nav-link">Benefícios</a></li>
        <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">Reservar Vaga</a></li>
      </ul>
    </header>
  </div>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="icon.png" alt="" height="75">
    <h1 class="display-5 fw-bold">Laravel Fullstack</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">O Framework de desenvolvimento mais robusto e procurado do mercado, pagando saláriosde até <b>R$ 20.000 </b><i>(vinte mil)</i> / mês, para desenvolvedores sêniors. 
        Somos a única empresa de ensino e fábrica de software que coloca os alunos dentro de experiências reais, com todos os recursos que vão se deparar no mercado.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a class="btn btn-success btn-lg px-4 gap-3" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Quero fazer parte!</a>
        <a class="btn btn-warning" href="#">Grupo de informações e Venda</a>
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
  </div>
<!-- 
  <div class="row text text-center">
    <div class="col-lg-6">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2 class="fw-normal">Heading</h2>
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <div class="col-lg-6">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2 class="fw-normal">Heading</h2>
      <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
-->
  @include("bootstrap.footer")

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