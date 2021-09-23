@extends("bootstrap.model")
@section("bodypage")
<div class="constainer">

<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Venda Antecipada!!</h1>
        <p class="lead">Você é empreendedor ou quer ser um programador que consegue fazer uma aplicação do zero e extremamente rápido, utilizando as tecnologias mais utilizadas do mercado, essa é a sua chance!</p>
        <p><strong>CURSO DE LARAVEL 8 + BOOTSTRAP 5 <code>para empreendedores</code></strong> é o curso que não foca na ferramenta, mas em sua aplicação, deixando os frameworks cuidarem dos detalhes técnicos. </p>
        <p>Impossivel não sair deste treinamento, <strong>totalmente inspirado</strong> a criar aplicações que vão ser utilizadas por centenas de pessoas</p>
        <div class="d-grid gap-2 d-md-flex justify-c ontent-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" data-bs-toggle="modal" data-bs-target="#modalForm">Garantir vaga</button>
        </div>

<!-- Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Objetivos do Curso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <iframe width="450" height="290" src="https://www.youtube.com/embed/3ftUw6BsVGY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Form-->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inscrição - Entrega de brinde </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="inscricao/" method="POST">
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nome :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNome" name="inputNome" Placeholder="Seu nome" required>
            </div>
          </div>
          <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inoutEmail" name="inputEmail" Placeholder="Seu melhor e-mail" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Cep :</label>
          <div class="col-md-4">
            <input type="text" class="form-control" id="inputCep" name="inputCep" placeholder="cep">
          </div>
          <div class="col-md-2">
            <a href="#" class="btn btn-primary" id="#getCepBtn" onclick="getCep()">Buscar</a>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" id="inputnumero" name="inputNumero" placeholder="numero" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Local :</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEstado" name="inputEstado" Placeholder="Estado" required maxlength="2">
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputCidade" name="inputCidade" Placeholder="Cidade" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputBairro" name="inputBairro" Placeholder="bairro" required>
          </div>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputComplemt" name="inputComplemt" Placeholder="complemento">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputStreet" name="inputStreet" Placeholder="logradouro" required>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Inscrever-se</button>
          @csrf
        </form>
        </div>
      </div>
    </div>
  </div>


      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="curso_poster.jpg" alt="" width="320">
      </div>
    </div> 
  </div>


  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Somente nós oferemos além do curso:</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h2>Dominio grátis</h2>
        <p align="justify" >Nenhum curso atualmente oferece a possibilidade de já começar com seu <strong><i>nome.com.br</i></strong> Apos a confirmação de sua inscrição já poderá informar qual dominio (site) gostaria de registrar para aprender a programar e subir sua aplicação.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h2>Hospedagem Grátis</h2>
        <p>Não adianta ter o dominio se não tiver onde hospedar. Além do dominio, te oferecmos 3 meeses de hospedagem gratuita. te ensinaremos a subir sua aplicação, realizar backup entre outras atividades.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h2>Turma ao vivo</h2>
        <p>Disponibilizamos 1 hora por dia para a turma tirar a dúvida ao vivo com o instrutor, como uma escola online, teramos horários fixos para nos encontrar e debater sobre sua aplicação</p>
      </div>
    </div>


    <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Brindes patrocinados!!</h2>
          <p class="lead">Conseguimos uma série de brindes para os inscritos neste treinamento. A cada posição de sua inscrição, você leva um brinde. Conseguimos uma incrivel relação  de itens, parece inacreditável, mas há um motivo para isso. Somos <strong>empreendedores</strong> e sabemos como construir uma oferta irresistível. Possuimos o Maior <strong>Over Delivery</strong> da internet com mais de 100 brindes importados</p>
          <h2 class="featurette-heading">Grupo de desconto</h2>
          <p class="lead">Além de tudo isso que já mensionamos, é possivel adquir este curso com um preço super expecial <a href="https://chat.whatsapp.com/GxyNwiIPJkF1oT4qQku2JH">aqui</a> neste grupo do Whatsapp.</p>
        </div>
        <div class="col-md-5">
          <img src="brindes.jpg" width="500" height="500">
        </div>
      </div>

  </div>




  
</div>
<div id="oculta"></div>
@endsection
@section("footerpage")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $("#inputCep").mask("99999-999", {reverse: true});
  function getCep(){
    let cep = $("#inputCep").val().replace("-", "");
    if(cep.length < 8 ){
        alert("Cep precisa de 8 digitos!");
        $("inputCep").focus;
        return false;
        } else {
        var url = 'http://viacep.com.br/ws/'+ cep +'/json/';
        $("#oculta").load(url, function(data)
            {
              var obj = jQuery.parseJSON(data);
                $("#inputBairro").val(obj.bairro);
                $("#inputStreet").val(obj.logradouro);
                $("#inputEstado").val(obj.uf);
                $("#inputComplemt").val(obj.complemento);
                $("#inputCidade").val(obj.localidade);
            });
        };
    }
  </script>
@endsection