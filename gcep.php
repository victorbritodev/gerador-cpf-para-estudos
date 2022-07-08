<?php
include 'modelo/inicio.php';
// finalizado, sem mais edições.
?>


   <div class="container">
  <div class="row">
    <div class="col-ms-2 mt-5">
      <p class="text-white"> Olá, você escolheu a opção CEP. </p>
     <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">o CEP aparecerá no campo abaixo após o botão ser pressionado.</label>
    <input type="text" class="form-control" id="cep" aria-describedby="emailHelp">
    
  </div>
  
  
  <button type="button" onclick="geracep();" class="btn btn-primary">Gerar</button>
</form>
    </div>
   
  </div>
</div>


    
<?php
include 'modelo/fimpag.php'
?>