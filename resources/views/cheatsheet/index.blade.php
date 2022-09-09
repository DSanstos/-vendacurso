<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Cheatsheet · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cheatsheet/">
<link href="cheatsheet/assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="cheatsheet/cheatsheet.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
      Laravel Fullsatck
    </h1>
  </div>
</header>
<aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
  <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">Nesta página</h2>
  <nav class="small" id="toc">
    <ul class="list-unstyled">
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Benefícios</button>
        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#baixacurva">Baixa curva de aprendizado</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#images">Grande Aceitação no mercado</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tables">Tables</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#figures">Figures</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">Forms</button>
        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">Overview</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#disabled-forms">Disabled forms</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#sizing">Sizing</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#input-group">Input group</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#floating-labels">Floating labels</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#validation">Validation</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">Components</button>
        <ul class="list-unstyled ps-3 collapse" id="components-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Accordion</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#alerts">Alerts</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#badge">Badge</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#breadcrumb">Breadcrumb</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#buttons">Buttons</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#button-group">Button group</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#card">Card</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#carousel">Carousel</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#dropdowns">Dropdowns</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#list-group">List group</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#modal">Modal</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navs">Navs</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navbar">Navbar</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#pagination">Pagination</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#popovers">Popovers</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#progress">Progress</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#scrollspy">Scrollspy</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#spinners">Spinners</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#toasts">Toasts</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tooltips">Tooltips</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</aside>
<div class="bd-cheatsheet container-fluid bg-body">
  <section id="content">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Beneficios da Stack</h2>

    <article class="my-3" id="baixacurva">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>baixa Curca de Aprendizado</h3>
      </div>
      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <p class="display-6">Baixa curva de aprendixado.</p>
        <p >O Laravel simplificou muitos dos processos, de programação, chegando a fazer parecer que existe mágica.
           Pense mais na lógica de seu negócio e menos na complexidade do código. já no primeiro dia de estudos, ja é possivel subir
            uma página, ou até mesmo uma aplicação feita por outra pessoa.
        </p>
        </div></div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
          <blockquote class="blockquote">
            <p> Frameworks foram feitos para agilizarem o desenvolvimento, não para serem o padrão 
              de mercado.</p>
            <footer class="blockquote-footer">Daniels Hogans</cite></footer>
          </blockquote>
          </div></div>

      </div>
    </article>
    <article class="my-3" id="tecnologia>
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Tecnologia Atualizada</h3>
      </div>
      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <p class="display-6">Tecnologia Atualizada</p>
        <p >O laravel sempre aproveita o os recursos mais recentes da Linguagem PHP, agora na sua versão 8,
           e o Laravel na Versao 9. se você não conhce esses recursos, não se preocupe, o Framework abstrai 
           essa necessidade de conhecimento com funções de poucos argumentos.
        </p>
        </div></div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
          <blockquote class="blockquote">
            <p> Frameworks foram feitos para agilizarem o desenvolvimento, não para serem o padrão 
              de mercado.</p>
            <footer class="blockquote-footer">Daniels Hogans</cite></footer>
          </blockquote>
          </div></div>
      </div>
    </article>
    <article class="my-3" id="salario">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Bons Salários</h3>
      </div>
      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <p class="display-6">Bons Salários</p>
        <p >Do estágio ao nivel Sênior, os programadores que possuem a stack Laravel em seus curriculos 
          são valorizados e muito bem remunerados, com sários Jr. de até R$ 4K e Sênior de até R$ 18k.
          Este conhecimento, torna-se um investimento amplamente vantajoso.
        </p>
        </div></div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
          <blockquote class="blockquote">
            <p> Frameworks foram feitos para agilizarem o desenvolvimento, não para serem o padrão 
              de mercado.</p>
            <footer class="blockquote-footer">Daniels Hogans</cite></footer>
          </blockquote>
          </div></div>
      </div>
    </article>
  </section>
  <section id="Metodologia">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Forms</h2>

    <article class="my-3" id="overview">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Overview</h3>
        <a class="d-flex align-items-center" href="../forms/overview/">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <fieldset class="mb-3">
            <legend>Radios buttons</legend>
            <div class="form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
              <label class="form-check-label" for="exampleRadio1">Default radio</label>
            </div>
            <div class="mb-3 form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
              <label class="form-check-label" for="exampleRadio2">Another radio</label>
            </div>
          </fieldset>
          <div class="mb-3">
            <label class="form-label" for="customFile">Upload</label>
            <input type="file" class="form-control" id="customFile">
          </div>
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
          </div>
          <div class="mb-3">
            <label for="customRange3" class="form-label">Example range</label>
            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div></div>

      </div>
    </article>
    <article class="my-3" id="disabled-forms">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Disabled forms</h3>
        <a class="d-flex align-items-center" href="../forms/overview/#disabled-forms">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <form>
          <fieldset disabled aria-label="Disabled fieldset example">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Disabled input</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
              <label for="disabledSelect" class="form-label">Disabled select menu</label>
              <select id="disabledSelect" class="form-select">
                <option>Disabled select</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                  Can't check this
                </label>
              </div>
            </div>
            <fieldset class="mb-3">
              <legend>Disabled radios buttons</legend>
              <div class="form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                <label class="form-check-label" for="disabledRadio2">Another radio</label>
              </div>
            </fieldset>
            <div class="mb-3">
              <label class="form-label" for="disabledCustomFile">Upload</label>
              <input type="file" class="form-control" id="disabledCustomFile" disabled>
            </div>
            <div class="mb-3 form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="disabledSwitchCheckChecked" checked disabled>
              <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
            </div>
            <div class="mb-3">
              <label for="disabledRange" class="form-label">Disabled range</label>
              <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>
        </form>
        </div></div>

      </div>
    </article>
    <article class="my-3" id="sizing">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Sizing</h3>
        <a class="d-flex align-items-center" href="../forms/form-control/#sizing">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-lg" aria-label="Large file input example">
        </div>
        </div></div>


        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-sm" aria-label="Small file input example">
        </div>
        </div></div>

      </div>
    </article>
    <article class="my-3" id="input-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Input group</h3>
        <a class="d-flex align-items-center" href="../forms/input-group/">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
        <label for="basic-url" class="form-label">Your vanity URL</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>
        <div class="input-group">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        </div></div>

      </div>
    </article>
    <article class="my-3" id="floating-labels">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Floating labels</h3>
        <a class="d-flex align-items-center" href="../forms/floating-labels/">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        </form>
        </div></div>

      </div>
    </article>
    <article class="my-3" id="validation">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Validation</h3>
        <a class="d-flex align-items-center" href="../forms/validation/">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer04" class="form-label">State</label>
            <select class="form-select is-invalid" id="validationServer04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer05" class="form-label">Zip</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </form>
        </div></div>

      </div>
    </article>
  </section>
  
<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>I will not close if you click outside me. Don't even try to press escape key.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p>This content should appear at the bottom after you scroll.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <script src="cheatsheet/assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet/cheatsheet.js"></script>
  </body>
</html>
