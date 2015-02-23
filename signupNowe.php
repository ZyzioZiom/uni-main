<?php include "setcookie.php"; ?>
<? 
// Load the cache process
include("cache_signup.php");
// load Podio api auth 
include 'getauthenticate.php'; ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zapisz się | Warsztaty językowe AIESEC University</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<? include "top-body.php"; ?>

 


    <div id="thankyou"></div>
   

      <div id="content" class="row fontface">
      <div class="col-md-10 centered heading">
         <div class="logo text-center"></div>
      <br/>
        <h1 class="text-center  fontcolor">Wypełnij formularz już teraz i zapisz się na warsztaty</h1>
        <h2 class="text-center  fontcolor">Liczba miejsc ograniczona!</h2>
        <br/>
        <div class="col-md-6 centered">
        <form id="form" class="form" enctype="multipart/form-data">

        <div class="form-group">
				<label for="name">Jak masz na imię?</label>
					<input type="text" class="form-control" id="name" name="name" required
								oninvalid="this.setCustomValidity('Podaj swoje imię')" 
								oninput="setCustomValidity('')">
			
           </div>
          <div id="next" class="btn btn-orange submit">DALEJ</div>
        
        <div id="form-next" class="hidden">
          
        
         
				
        <div class="form-group">
        <label id="next-name" for="lastname"><span></span> A jak masz na nazwisko?</label>
          <input type="text" class="form-control" id="lastname" name="lastname" required
                oninvalid="this.setCustomValidity('Podaj swoje nazwisko')" 
                oninput="setCustomValidity('')">
        </div>

        <div class="form-group">
        <label for="phone">Twój numer telefonu:</label>
          <input type="text" class="form-control" id="phone" name="phone" required
                oninvalid="this.setCustomValidity('To znacznie ułatwi nam kontakt!')" 
                oninput="setCustomValidity('')">
        </div>

        <div class="form-group">
        <label for="email">Jeszcze tylko Twój e-mail:</label>
          <input type="email" class="form-control" id="email" name="email" required
                oninvalid="this.setCustomValidity('Podaj prawidłowy adres email')" 
                oninput="setCustomValidity('')">
        </div>
          
        <div class="form-group">
          <label>Przysługuje mi zniżka (patrz <a href="prices.php" target="_blank"><span style="color: white;">cennik</span></a>)</label><br/>
          
          <input type="radio" id="attendedYes" name="attended" value="1">
                 <label for="attendedYes" class="radio-list-label">Tak</label>
          
          <input type="radio" id="attendedNo" name="attended" value="2" checked>
                 <label for="attendedNo" class="radio-list-label">Nie</label>
        </div>
        

        <? include 'getlevels.php'; ?>
        
          
          
        
          
          
        <!-- Language groups -->
           <div class="form-group">
             <hr/>
             <div id="languageGroupChoose">
              
             <? include 'getgroupsNowe.php'; ?>
             </div>
          </div>
          
          
          <br/>
				<input id="submit" class="btn btn-orange submit" type="submit" name="submit" value="ZAPISZ SIĘ">	
				
          
     
  </div>

  </form>

</div>

</div>
        
     


 <? include 'footer.php'; ?>  
    </div>
<? include 'bottom-scripts.php'; ?>
    


    
  </body>
</html>
<?php
// Save the cache
include("cache_footer.php");
?>