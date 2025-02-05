<?php 

require_once "session.php";
sessionStart();

$logged=isLoggedIn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="custom-js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        
        <h1 class="text-center mt-5 mb-5">Prenotazioni Sala</h1>
        <div class="row">
    
    <?php include "navbar.php"; ?>
    
      <div id="table" class="offset-2 col-6 justify-content-center">
      
      </div> 
       
       <?php if($logged): ?>
       
       <div class="container border col-6 offset-4">
          
          <div class="row offset-3 mt-4">
            <span >Seleziona inizio:</span>
            <span class="ml-2">hh</span><input class="col-3 ml-2" id="ini-hh" type="number" min=0 max=23 value="0">
            <span class="ml-2">mm</span><input class="col-3 ml-2" id="ini-mm" type="number" min=0 max=59 value="0">
          </div>

          <div class="row offset-3 mt-2">
            <span>Seleziona fine: </span>
            <span class="ml-2">hh</span> <input class="col-3 ml-2"  id="fin-hh" type="number" min=0 max=23 value="0">
            <span class="ml-2">mm</span><input class="col-3 ml-2"  id="fin-mm" type="number" min=0 max=59 value="0">
          </div>

          <div class="row mt-2">
            <span class="offset-3">Seleziona numero persone</span>
            <input class="col-2 ml-2" id="npers" type="number" min=1 max=200 value="1">
          </div>


          <button id="prenota" class="btn btn-sm btn-primary btn-block mt-4">Effettua prenotazione</button>
          <p id="pre-error" class="text-danger"></p>
       </div>
         
        <?php endif; ?>
      </div>
    </div>
    </div>
     
       


    <div class="bd-callout offset-2 col-10" style="border-left-color: #f0ad4e;">
        <h5>Info prenotazioni</h5>
        <p>Le prenotazioni fanno riferimento ad unico giorno, inoltre bisogna ricordare che la sala ha una capienza di 200 persone. Questo limite non pu&ograve; essere superato in nessun momento della giornata per nessun motivo.</p> 
    </div>
    </div>
    <?php include "noscript.php";?>

    <div id="err-cont" class="container">
    </div>

    <!-- Error Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  </div>
                </div>
              </div>
            </div>;

</body>
</html>
