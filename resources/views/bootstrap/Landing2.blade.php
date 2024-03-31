@php
$sitename = "Laravel FullStack ";
use App\Models\usuariosModel;
use App\Models\LinksPagModel;
$reservas = usuariosModel::count();
$inscritos = LinksPagModel::where("pago", true)->count();
//$inscritos = 1; //remover ou comentar
if($inscritos > 40){
        $classBadge = "danger";
    } else {
        $classBadge = "success";
    };
@endphp
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="https://curso.laravelfullstack.com.br/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Aprenda Com os Mestres do Laravel">
    <meta property="og:description" content="Única turma que haverá em 2023. Não perca essa chance de transforma-se também num ninja em Laravel">
    <meta property="og:image" itemprop="image" content="https://curso.laravelfullstack.com.br/mestre_laravel.jpg" tal:attributes="content string:https://curso.laravelfullstack.com.br/mestre_laravel.jpg"  tal:condition="context/getImage|nothing" >
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="250">
    <title>{{$sitename}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/spacelab/bootstrap.min.css" integrity="sha512-kb6aHe8Fchic05HVLuEio/LWsmwtNRndUxZ5AqK4IyMG817Dhff2BxuKJCRPWzQ4daCxN5TagQ5s8Hpo9YJgbQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="px-3 py-2 text-bg-primary">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img src="/public/laravel_icon512.png" alt="Laravel Logo" height="65">{{strtoupper($sitename)}}
              </a>
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                @if($inscritos != 0)
                    <li>
                    <a href="#" class="nav-link text-white text-center">
                        <span class="fa fa-user-circle fa-3x"></span><br/>
                        Inscritos <span class="badge text-bg-{{$classBadge}}">{{$inscritos}}</span>
                    </a>
                    </li>
                @endif
                @if($reservas != 0)
                    <li>
                    <a href="#" class="nav-link text-white text-center">
                        <span class="fa fa-users fa-3x"></span><br/>
                        Reservas <span class="badge text-bg-danger">{{$reservas}}</span>
                    </a>
                    </li>
                @endif
                <li>
                  <a href="/beneficios" class="nav-link text-white text-center">
                    <span class="fa fa-star-o fa-3x"></span><br/>
                    Benefícios
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white text-center" data-bs-toggle="modal" data-bs-target="#reservaModal">
                    <span class="fa fa-cart-plus fa-3x"></span><br/>
                    Comprar
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
    
            <div class="text-end">
              <a href="/login" class="btn btn-light text-dark me-2">Entrar</a>
              <a href="https://chat.whatsapp.com/LmMX0nm4osH4s0kZpNpWg7" class="btn btn-primary">Grupo Desconto <span class="fa fa-whatsapp"></span></a>
            </div>
          </div>
        </div>
      </header>
    @if(isset($error))
        {{ implode('', $SESSION["error"]) }}
    @endif
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/public/mestre_laravel.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="600" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Torne-se um dos Mestres do Laravel</h1>
            <p class="lead">O Framework de desenvolvimento mais robusto e procurado do mercado, pagando salários de até <b>R$ 20.000 </b><i>(vinte mil)</i> / mês, para desenvolvedores Sêniors. 
                Somos a única empresa de ensino e fábrica de software que coloca os alunos dentro de experiências reais, com todos os recursos que vão se deparar no mercado.</p>
                <p>Preço de Lançamento <b>R$ 1.400</b> em até 12x</p>
                <p>Ou <br><b>R$ 900</b> à vista com desconto.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="#" data-bs-toggle="modal" data-bs-target="#reservaModal" class="btn btn-success btn-lg px-4 me-md-2" >Comprar</a>
            </div>
          </div>
        </div>
      </div>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          </a>
          <span class="mb-3 mb-md-0 text-muted">© {{date("Y")}} Kingkernel.</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </footer>

        <!-- Modal -->
<div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>