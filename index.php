<?php
include 'modelo/inicio.php';
?>


   <div class="container">
  <div class="row">
    <div class="col-ms-2 mt-5">
      <p class="text-white"> Olá, bem vindo ao Gerador, escolha uma opção para ser gerada: </p>
      <a href="/gcpf.php">
      <button type="button" class="btn btn-outline-light">Gerador de CPF</button>
  </a>
   <a href="/grg.php">
      <button type="button" class="btn btn-outline-light">Gerador de RG</button>
  </a>
   <a href="/gsenha.php">
      <button type="button" class="btn btn-outline-light">Gerador de Senha 4 digitos</button>
  </a>
      <button type="button" class="btn btn-outline-light">Gerador de CEP</button>
    </div>
   
  </div>
</div>


    
<?php
include 'modelo/fimpag.php'
?>