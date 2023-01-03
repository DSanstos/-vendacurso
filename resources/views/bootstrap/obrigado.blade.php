@extends('bootstrap.model')
@php 
@endphp
<div class="container py-3">
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <span class="fs-4 text-white">Laravel Fullstack</span>
        </a>
      </div>
  
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Parabéns</h1>
        <p class="fs-5 text-muted">
            Enviamos um link de ativação ao seu e-mail. Você está a poucos passos de começar a mudar a sua vida tornando-se um programador fullstack em Laravel.
            Disponibilizamos 2 formas de pagamento, no cartão em 12x ou Pix, com super desconto de R$ 500, no CNPJ da Kingkernel.  
        </p>
      </div>
    </header>
  
    <main >
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Cartão em até 12x</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 1.400</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>até 12x de R$ <span class="text-success">116,67</span></li>
                <li>Rede Cielo</li>
              </ul>
              <!-- <a href="{{$linkId}}" class="w-100 btn btn-lg btn-success">Link de pagamento</a> -->
              <form method='post' action='https://cieloecommerce.cielo.com.br/transactionalvnext/order/buynow' target='blank'><input type='hidden' name='id' value='284c19d8-5d9d-4a92-a774-ed97e6b3d51e' /><input type='image' name='submit' alt='Comprar' src='https://cieloecommerce.cielo.com.br/backoffice/Content/img/buttons/button-5-1.png' /></form>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">PIX</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$ 900</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>PIX CNPJ: <span class="text-primary cnpj" id="copy">44.198.847/0001-06</span></li>
                <img src="qr-900.jpeg" class="img-fluid">
                <li>Será preciso enviar o comprovante</li>
                <a href="https://wa.me/5511953610234" class="w-100 btn btn-lg btn-primary">Enviar</a>
              </ul>
            </div>
          </div>
        </div>
      </div>  
    </main>
</div>
@section('footerpage')
<script>
  let btn = document.querySelector('#copy');

  btn.addEventListener('click', function(e) {

    let textArea = document.querySelector('.cnpj');
    document.execCommand('copy');
    alert("PIX copiado: " + textArea.innerHTML);
  
});
</script>
@endsection