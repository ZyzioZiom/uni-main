
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
<!-- Google Tag Manager --
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FPPX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P9FPPX');</script>
<!-- End Google Tag Manager -->
      
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand nav-link" href="./"><img class="text-center" src="img/logo.png" style="width:60px; margin: 0 auto;" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><p class="navbar-text"><a class="navbar-title nav-link" href="./">Warsztaty językowe</a></p></li>
        
      </ul>
      


      <ul class="nav navbar-nav navbar-right">
        <li style="background: orange" ><a href="signup.php"><strong><span style="color: white;">ZAPISZ SIĘ</span></strong></a></li>
        <li><a class="nav-link" href="harmonogram.php">HARMONOGRAM</a></li>
        <li><a class="nav-link" href="news.php">AKTUALNOŚCI</a></li>
        <li><a class="nav-link" href="prices.php">CENNIK</a></li>
        <li><a class="nav-link" href="about.php">O WARSZTATACH</a></li>
        <li><a href="https://www.facebook.com/lckrakow" target="_blank"><img src="img/FB-f-Logo__blue_100.png" style="height: 20px;" /></a></li>
        
        
        </ul>  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



  
   
 


  

   
 


    <div id="thankyou-row" class="row hidden">
      <div class="col-md-8 centered thankyou fontface wheat">
    <h1 id="thankyou-msg" class="thankyou-msg text-center"><span></span>, dziękujemy za zapisanie się na warsztaty!</h1>
    <p class="thankyou-msg text-center">Teraz sprawdź swoją skrzynkę pocztową.</p>
      </div>
    </div>
   

      <div id="content" class="row fontface">
      <div class="col-md-10 centered heading">
         <div class="logo text-center"></div>
      <br/>
        <h1 class="text-center  wheat">Wypełnij formularz już teraz i zapisz się na warsztaty</h1>
        <h2 class="text-center  wheat">Liczba miejsc ograniczona!</h2>
        <br/>
        <div class="col-md-6 centered">
        <form id="form" class="form" enctype="multipart/form-data">

        <div class="form-group">
				<label for="name">Jak masz na imię?</label>
					<input type="text" class="form-control" id="name" name="name" required
								oninvalid="this.setCustomValidity('Podaj swoje imię')" 
								oninput="setCustomValidity('')">
			
           </div>
          <div id="next" class="btn btn-primary submit">DALEJ</div>
        
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
          <label>Czy uczestniczyłeś już wcześniej w warsztatach AIESEC University?</label><br/>
          
          <input type="radio" id="attendedYes" name="attended" value="1">
                 <label for="attendedYes" class="radio-list-label">Tak</label>
          
          <input type="radio" id="attendedNo" name="attended" value="2" checked>
                 <label for="attendedNo" class="radio-list-label">Nie</label>
        </div>
        

        <div class="form-group">
        <label>Który język Cię interesuje?</label><br/>
        <div class="choose-language">
        <input type="radio" id="languageEnglish" class="language-radio" name="lang" value="en" required oninvalid="this.setCustomValidity('Musisz wybrać język')" >
          <label id="languageEnglishLabel" class="language-radio-label btn btn-default" for="languageEnglish">Angielski</label>
<!--
        <input type="radio" id="languageGerman" class="language-radio" name="lang" value="de">
          <label id="languageGermanLabel" class="language-radio-label btn btn-default" for="languageGerman">Niemiecki</label>
-->
        <input type="radio" id="languageFrench" class="language-radio" name="lang" value="fr">
          <label id="languageFrenchLabel" class="language-radio-label btn btn-default" for="languageFrench">Francuski</label>

        <input type="radio" id="languageItalian" class="language-radio" name="lang" value="it">
          <label id="languageItalianLabel" class="language-radio-label btn btn-default" for="languageItalian">Włoski</label>

        <input type="radio" id="languageRussian" class="language-radio" name="lang" value="ru">
          <label id="languageRussianLabel" class="language-radio-label btn btn-default" for="languageRussian">Rosyjski</label>

        <input type="radio" id="languageSpanish" class="language-radio" name="lang" value="es">
          <label id="languageSpanishLabel" class="language-radio-label btn btn-default" for="languageSpanish">Hiszpański</label>

        <input type="radio" id="languageArabic" class="language-radio" name="lang" value="ar">
          <label id="languageArabicLabel" class="language-radio-label btn btn-default" for="languageArabic">Arabski</label>


        </div>
      </div>
        


				<div class="form-group">
        <label id="choose-level-label">Wybierz poziom zaawansowania</label><br/>
        </div>
        <!-- English -->
        <div id="languageEnglishDiv" class="LanguageDiv">
             
        <input type="radio" id="englishA2" class="language-level-radio english-radio" name="language" value="1" required >
          <label id="" class="language-level-radio english-radio"	for="englishA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="englishB1" class="language-level-radio english-radio" name="language" value="2">
          <label id="" class="language-level-radio english-radio" for="englishB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="englishB2" class="language-level-radio english-radio" name="language" value="3">
          <label id="" class="language-level-radio english-radio" for="englishB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="englishC1" class="language-level-radio english-radio" name="language" value="4">
          <label id="" class="language-level-radio english-radio" for="englishC1">C1 Advanced</label><br/>  

        <input type="radio" id="englishInd" class="language-level-radio english-radio" name="language" value="5">
          <label id="" class="language-level-radio english-radio" for="englishInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>                </div>


        <!-- German --><!--
        <div id="languageGermanDiv" class="LanguageDiv">
           
        <input type="radio" id="germanA1" class="language-level-radio german-radio" name="language" value="6" >
          <label id="" class="language-level-radio" for="germanA1">A1 Beginner</label><br/>

        <input type="radio" id="germanA2" class="language-level-radio german-radio" name="language" value="7">
          <label id="" class="language-level-radio" for="germanA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="germanB1" class="language-level-radio german-radio" name="language" value="8">
          <label id="" class="language-level-radio" for="germanB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="germanB2" class="language-level-radio german-radio" name="language" value="9">
          <label id="" class="language-level-radio" for="germanB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="germanC1" class="language-level-radio german-radio" name="language" value="10">
          <label id="" class="language-level-radio" for="germanC1">C1 Advanced</label><br/>  

        <input type="radio" id="germanInd" class="language-level-radio german-radio" name="language" value="11">
          <label id="" class="language-level-radio" for="germanInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>          
        </div>
-->
        <!-- French -->
        <div id="languageFrenchDiv" class="LanguageDiv">
            
        <input type="radio" id="frenchA1" class="language-level-radio french-radio" name="language" value="12" >
          <label id="" class="language-level-radio" for="frenchA1">A1 Beginner</label><br/>

        <input type="radio" id="frenchA2" class="language-level-radio french-radio" name="language" value="13">
          <label id="" class="language-level-radio" for="frenchA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="frenchB1" class="language-level-radio french-radio" name="language" value="14">
          <label id="" class="language-level-radio" for="frenchB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="frenchB2" class="language-level-radio french-radio" name="language" value="15">
          <label id="" class="language-level-radio" for="frenchB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="frenchC1" class="language-level-radio french-radio" name="language" value="16">
          <label id="" class="language-level-radio" for="frenchC1">C1 Advanced</label><br/>  

        <input type="radio" id="frenchInd" class="language-level-radio french-radio" name="language" value="17">
          <label id="" class="language-level-radio" for="frenchInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>   
            

        <!-- Italian -->
        <div id="languageItalianDiv" class="LanguageDiv">
           
        <input type="radio" id="italianA1" class="language-level-radio italian-radio" name="language" value="18" >
          <label id="" class="language-level-radio" for="italianA1">A1 Beginner</label><br/>

        <input type="radio" id="italianA2" class="language-level-radio italian-radio" name="language" value="19">
          <label id="" class="language-level-radio" for="italianA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="italianB1" class="language-level-radio italian-radio" name="language" value="20">
          <label id="" class="language-level-radio" for="italianB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="italianB2" class="language-level-radio italian-radio" name="language" value="21">
          <label id="" class="language-level-radio" for="italianB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="italianC1" class="language-level-radio italian-radio" name="language" value="22">
          <label id="" class="language-level-radio" for="italianC1">C1 Advanced</label><br/>  

        <input type="radio" id="italianInd" class="language-level-radio italian-radio" name="language" value="23">
          <label id="" class="language-level-radio" for="italianInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>  
                 
       

        <!-- Russian -->
        <div id="languageRussianDiv" class="LanguageDiv">
          
        <input type="radio" id="russianA1" class="language-level-radio russian-radio" name="language" value="24" >
          <label id="" class="language-level-radio" for="russianA1">A1 Beginner</label><br/>

        <input type="radio" id="russianA2" class="language-level-radio russian-radio" name="language" value="25">
          <label id="" class="language-level-radio" for="russianA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="russianB1" class="language-level-radio russian-radio" name="language" value="26">
          <label id="" class="language-level-radio" for="russianB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="russianB2" class="language-level-radio russian-radio" name="language" value="27">
          <label id="" class="language-level-radio" for="russianB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="russianC1" class="language-level-radio russian-radio" name="language" value="28">
          <label id="" class="language-level-radio" for="russianC1">C1 Advanced</label><br/>  

        <input type="radio" id="russianInd" class="language-level-radio russian-radio" name="language" value="29">
          <label id="" class="language-level-radio" for="russianInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div> 
          
          
        <!-- Spanish -->
        <div id="languageSpanishDiv" class="LanguageDiv">
            
        <input type="radio" id="spanishA1" class="language-level-radio spanish-radio" name="language" value="30" >
          <label id="" class="language-level-radio" for="spanishA1">A1 Beginner</label><br/>

        <input type="radio" id="spanishA2" class="language-level-radio spanish-radio" name="language" value="31">
          <label id="" class="language-level-radio" for="spanishA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="spanishB1" class="language-level-radio spanish-radio" name="language" value="32">
          <label id="" class="language-level-radio" for="spanishB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="spanishB2" class="language-level-radio spanish-radio" name="language" value="33">
          <label id="" class="language-level-radio" for="spanishB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="spanishC1" class="language-level-radio spanish-radio" name="language" value="34">
          <label id="" class="language-level-radio" for="spanishC1">C1 Advanced</label><br/>  

        <input type="radio" id="spanishInd" class="language-level-radio spanish-radio" name="language" value="35">
          <label id="" class="language-level-radio" for="spanishInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>
             
                 

        <!-- Arabic -->
        <div id="languageArabicDiv" class="LanguageDiv">
        
        <input type="radio" id="arabicInd" class="language-level-radio arabic-radio" name="language" value="36">
          <label id="" class="language-level-radio" for="arabicInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>  
        
          
          
        
          
          
        <!-- Language groups -->
           <div class="form-group">
             <label id="choose-group-label" class="hidden"><br/>Wybierz grupę</label><br/>
             <div id="languageGroupChoose">
             

<div class="row"><div class="col-md-12"><label class='groupLabel languageAngielskiGroupA2 hidden'>  <input type='radio' name='group' value='1 required'><strong>Grupa 1</strong><br/><table><tr><td>Poniedziałek</td><td>08:00 - 09:30</td></tr><table><tr><td>Czwartek</td><td>12:00 - 13:00</td></tr></table></input></label></div></div><div class="row"><div class="col-md-12"><label class='groupLabel languageAngielskiGroupA2 hidden'>  <input type='radio' name='group' value='2 required'><strong>Grupa 2</strong><br/><table><tr><td>Poniedziałek</td><td>10:00 - 11:30</td></tr><table><tr><td>Środa</td><td>11:00 - 12:00</td></tr></table></input></label></div></div><div class="row"><div class="col-md-12"><label class='groupLabel languageArabskiGroupZa hidden'>  <input type='radio' name='group' value='2 required'><strong>Grupa 2</strong><br/><table><tr><td>Środa</td><td>13:00 - 15:00</td></tr></table></input></label></div></div><div class="row"><div class="col-md-12"><label class='groupLabel languageHiszpańskiGroupB1 hidden'>  <input type='radio' name='group' value='1 required'><strong>Grupa 1</strong><br/><table><tr><td>Wtorek</td><td>10:00 - 11:30</td></tr></table></input></label></div></div><div class="row"><div class="col-md-12"><label class='groupLabel languageNiemieckiGroupB2 hidden'>  <input type='radio' name='group' value='1 required'><strong>Grupa 1</strong><br/><table><tr><td>Wtorek</td><td>06:00 - 07:30</td></tr><table><tr><td>Poniedziałek</td><td>22:00 - 23:00</td></tr></table></input></label></div></div>             </div>
          </div>
          
          
          <br/>
				<input id="submit" class="btn btn-danger submit" type="submit" name="submit" value="ZAPISZ SIĘ">	
				
          
     
  </div>

  </form>

</div>

</div>
        
     


 <footer class="footer">
      <div class="container fontface">
        <h4>Nasi partnerzy</h4>
        <div class="row">
          <div class="col-md-4">
          <a href="http://www.soul.edu.pl/" target="_blank"><img style="max-height: 50px;" src="img/soul-logo.jpg" /><span style="color: darkblue;">Szkoła językowa SOUL</span></a>
          </div>
          <div class="col-md-5">
            
          </div>
          <div class="col-md-3">
            
             <a href="http://aiesec.pl/" target="_blank"><img style="max-width: 80%%; padding-bottom: 10px" src="img/powered-by-aiesec.png" />  </a>
          </div>
        </div>
      <div class="row">
       
      </div>
  
      </div>  
  
    </footer>

  
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery UI for effects -->
    <!-- <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script> -->
    <!-- form handler for validation and ajax request -->
    <script src="js/form-handler.js"></script>
     <script src="js/fade-content.js"></script>          


    
  </body>
</html>
