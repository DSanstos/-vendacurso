@php
use Carbon\Carbon;
$today = Carbon::parse(date('Y-m-d'));
$endate = carbon::parse('2023-01-07');
@endphp
@extends('bootstrap.model')
@section("headpage")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section("bodypage")
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Curso Laravel Fullstack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          @if($endate->greaterThan($today))
          <li class="nav-item">
            <a class="nav-link" href="#">Promoção</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
        </ul>
          <div class="btn-group dropstart">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Ações
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Sair</a></li>
              <li><a class="dropdown-item" href="#">Ambiente EAD</a></li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Formas de Pagamento - Condições normais</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <i class="fa fa-credit-card fa-2x"></i>
        </div>
        <h3 class="fs-2">Pagar no Cartão</h3>
        <p class="pb-2"><b>R$ 1.400</b> em 12x de <span class="text text-danger">R$ 116,67</span></p>
        <p><form method='post' action='https://cieloecommerce.cielo.com.br/transactionalvnext/order/buynow' target='blank'><input type='hidden' name='id' value='284c19d8-5d9d-4a92-a774-ed97e6b3d51e' /><input type='image' name='submit' alt='Comprar' src='https://cieloecommerce.cielo.com.br/backoffice/Content/img/buttons/button-5-1.png' /></form></p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="logo-pix-png-icone-520x520.png" height="60">
        </div>
        <h3 class="fs-2">Pagar com PIX</h3>
        <p>Pagamento à vista R$ 900</p>
        <img src="qr-900.jpeg" height="250">
        <p>CNPJ: <a href="" class="icon-link d-inline-flex align-items-center">
          <span>44.198.847/0001-06</span>
        </a></p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <i class="fa fa-wpforms fa-2x"></i>
        </div>
        <h3 class="fs-2">Boleto</h3>
        <p>R$ 1.000 em 5x R$ 200</p>
        <form action="boleto" method="post">
          <input class="form-control" type="text" name="b_cpf" placeholder="CPF" aria-label="default input example">
        </form>
      </div>
    </div>
  </div>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© {{date("Y");}} Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
@endsection