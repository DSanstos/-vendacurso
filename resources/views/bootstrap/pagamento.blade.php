@extends('bootstrap.model')
@section("bodypage")
<div class="container">

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Formas de Pagamento</h1>
        <p class="fs-5 text-muted">Nesta Compra antecipada, conseguimos liberar estas formas de pagamento facilitado para você.</p>
      </div>

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <h2>PIX</h2>
            <img src="../qrcode_300.jpeg">
            <p>Pague diretamente ao Instrutor</p>
            <p> chave: <strong>(96) 99163-5311</strong> nome: <i>Daniel Jose dos Santos</i></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">    
            <h2>Botão de pagamento</h2>
            <form method='post' action='https://cieloecommerce.cielo.com.br/transactionalvnext/order/buynow' target='blank'><input type='hidden' name='id' value='73ccfd28-7088-418f-8afa-3b604e6ac9f4' /><input type='image' name='submit' alt='Comprar' src='https://cieloecommerce.cielo.com.br/backoffice/Content/img/buttons/button-5-1.png' /></form>
            <p>Pague e parcele no cartão de crédito com as facilidades da <strong>Cielo</strong>. Pagamento no crédito e no débito.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            
            <h2>PicPay</h2>
            <p>Pague utilizando sua conta do <a href="https://picpay.me/daniel.santos.ap/300.0">PicPay</a></p>
            <p> Popular forma de pagamento online. Se você possui conta picpay, essa é outra facilidade.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
      </div>
</div>
@endsection