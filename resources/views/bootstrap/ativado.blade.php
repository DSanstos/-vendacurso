@extends('bootstrap.model')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Cadastro ativado!</h1>
      <p class="col-md-8 fs-4">Agora você pode atualizar as informações de seu perfil, para 
        escolher a forma de pagamento e garantir sua vaga no curso Laravel Fullstack.</p>
        <div class="row">
            <form method="POST" action="/auth" onsubmit="valida()">
                @csrf
                <input type="hidden" name="mailuser" value="{{$dados["email"]}}">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label for="confirm0" class="col-form-label">Senha:</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="confirm0" id="confirm0" class="form-control" minlength="4" required>
                </div>
                <div class="col-auto">
                    <input type="password" name="confirm1" id="confirm1" class="form-control" minlength="4" required>
                </div>
                  <div class="col-auto">
                    <span class="form-text">
                      <input type="submit" class="btn btn-primary" id="upBtn" value="Atualizar">
                    </span>
                  </div>
              </div>
            </form>
        </div>
      <a class="btn btn-primary btn-lg" href="/login">login</a>
    </div>
</div>
@section("footerpage")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
<script type="text/javascript">
  function valida (){
    pass1 = $("#confirm0").val();
    pass2 = $("#confirm1").val();
    if(pass1 != pass2){
      alert("as senhas não são iguais!");
      return false;
    };
  };
</script>
@endsection