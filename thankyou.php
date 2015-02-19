<!DOCTYPE html>
<html lang="pl">
  <head>
  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warsztaty językowe AIESEC University</title>

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
    
<?
$name = $_GET["name"];
?>
    
<div id="content">


<div id="thankyou-row" class="row">
      <div class="col-md-8 centered thankyou fontface fontcolor">
    <h1 id="thankyou-msg" class="thankyou-msg text-center"><span><? echo $name; ?></span>, dziękujemy za zapisanie się na warsztaty!</h1>
    <p class="thankyou-msg text-center">Teraz sprawdź swoją skrzynkę pocztową.</p>
      </div>
</div>
 
  

  
<? include 'footer.php'; ?>
</div>
<? include 'bottom-scripts.php'; ?>
    
<script>
	// Analytics conversion event
//	ga('send', 'event', 'Form', 'Submit', 'Zapisanie się na warsztaty');    
</script>
  </body>
</html>
