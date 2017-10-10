<html>
   <head>
      <title>Exemplo Modal Bootstrap</title>
      <meta http-equiv="Content-Language" content="pt-br">
	  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	  <meta name="viewport" content="width=device-width, initial-scale=1">	
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css_interno/fixa_modal.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <button class="btn btn-success" data-toggle="modal" data-target="#modal_fixo"> Clique aqui para abrir o Modal Bootstrap fixo com rolagem </button>
            </div>
         </div>
      </div>
      <div class="modal fade" id="modal_fixo" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
                  <h4 class="modal-title" >MODAL COM FIXO COM ROLAGEM</h4>
               </div>
               <div class="modal-body fixa-header-footer">
                  <label for="name">Campo 1</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 1" data-toggle="tooltip" data-placement="top"  >
                  </div>
                  <label for="name">Campo 2</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 2" data-toggle="tooltip" data-placement="top" >
                  </div>
                  <label for="name">Campo 3</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 3" data-toggle="tooltip" data-placement="top" >
                  </div>
                  <label for="name">Campo 4</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 4" data-toggle="tooltip" data-placement="top" >
                  </div>
                  <label for="name">Campo 5</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 5" data-toggle="tooltip" data-placement="top">
                  </div>
                  <label for="name">Campo 6</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 6" data-toggle="tooltip" data-placement="top">
                  </div>
                  <label for="name">Campo 7</label>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Campo 7" data-toggle="tooltip" data-placement="top">
                  </div>
               </div>
               <div class="modal-footer ">
                  <button type="button" class="btn btn-primary">Confirmar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>