<?php include "setcookie.php"; ?>

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


    <div id="thankyou-row" class="row hidden">
      <div class="col-md-8 centered thankyou fontface">
    <h1 id="thankyou-msg" class="thankyou-msg text-center"><span></span>, dziękujemy za zapisanie się na warsztaty!</h1>
    <p class="thankyou-msg text-center">Teraz sprawdź swoją skrzynkę pocztową.</p>
      </div>
    </div>
   

      <div id="content" class="row fontface">
      <div class="col-md-10 centered heading">
         <div class="logo text-center"></div>
      <br/>
        <h1 class="text-center">Wypełnij formularz już teraz i zapisz się na warsztaty</h1>
        <h2 class="text-center">Liczba miejsc ograniczona!</h2>
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
             <div id="languageGroupChoose"></div>
          </div>
          
          
          <br/>
				<input id="submit" class="btn btn-danger submit" type="submit" name="submit" value="ZAPISZ SIĘ">	
				
          
     
  </div>

  </form>

</div>

</div>
        
     
<? // tutaj kod który pobiera grupy językowe i generuje ich kod


// form-handler.js opisany ręcznie
// pobierz języki z harmonogramu
// pobierz wszystkie numery grup dla danego języka (po kropce)
// dla każdej grupy odnajdź itemy w harmonogramie i wylistuj ich dni oraz godziny
// zr

require_once "config.php";
// include Podio API
require_once 'podio-php-4.0.2/PodioAPI.php';

// authenticate client to Podio
Podio::setup($harmonogram_client_id, $harmonogram_client_secret);

// authenticate client to app
try {
  Podio::authenticate_with_app($harmonogram_app_id, $harmonogram_app_token);
  // Authentication was a success, now you can start making API calls.
}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
	echo $e . "<br><br><br>";
  }


          // weekdays
$days = array(NULL, "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");

// create array for language groups
$groups = array();

  // Get all groups by names
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false
	)); 

// Iterate through all groups and save them to array
foreach ($collection as $item) {
// assign group name to variable
  $group = $item->title;  

//  put group name is not in array already, put it there
  if(!in_array($group, $groups)){
        $groups[]=$group;
  }  
}

// now print all found groups with their times
// group = group name (ex. Niemiecki B2.1)
foreach($groups as $group) {
  // get first word from group name
  $groupLanguage = strtok($group, " ");
  
  // get group level
  $groupLevel = substr($group, -4, 2);
  
  // last character of group name
  $groupNumber = substr($group, -1);
  // group number as input value will be sent to Podio
  echo "<label class='language".$groupLanguage."Group".$groupLevel."'>";
  echo "<input type='radio' name='group' value='".$groupNumber."'>";
  echo "<strong>".$group ."</strong><br/>";
  
  // get all items with given group name
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false,
    "filters" => array(
      "title" => $group)
    )); 
  
  foreach($collection as $item) {
    $group = $item->title;  
    $start_time = $item->fields["hour2"]->start_time;
    $end_time = $item->fields["hour2"]->end_time;

    // add 1 hour to times (because of problems with UTC timezones on Podio)
    $start_time->add(new DateInterval('PT1H'));
    $end_time->add(new DateInterval('PT1H'));
    
    // print weekday and time
    echo "<table>";
    foreach ($item->fields["weekday"]->values as $day) {
    echo "<tr><td>";
      echo $day['text'];
    
    }
    echo "</td><td>";
      echo $start_time->format("H:i")." - ".$end_time->format('H:i');
    echo "</td></tr>";
}
  echo "</table></input>";
  echo "</label>";
}
  // separate items
    ?> </div>
         </div>
          <br/>
<?
?>
</div>
 
 <? include 'footer.php'; ?>   
      
<? include 'bottom-scripts.php'; ?>
    


    
  </body>
</html>
