@extends('bootstrap.model')
@section('headpage')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
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