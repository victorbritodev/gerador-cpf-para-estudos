<?php
include 'modelo/inicio.php';
?>


   <div class="container">
  <div class="row">
    <div class="col-ms-2 mt-5">
      <p class="text-white"> Olá, você escolheu a opção RG. </p>
     <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">O RG aparecerá no campo abaixo após o botão ser pressionado.</label>
    <input type="text" class="form-control" id="rg" aria-describedby="emailHelp">
    
  </div>
  
  
  <button type="button" onclick="gerarg();" class="btn btn-primary">Gerar</button>
</form>
    </div>
   
  </div>
</div>


    
<?php
include 'modelo/fimpag.php'
?>