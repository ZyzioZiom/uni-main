<?
// Iterate through all groups and save them to array
foreach ($collection as $item) {
// assign group name to variable
  $group = $item->title;  
  
  $groupActive = $item->fields["czy-w-grupie-sa-wolne-miejsca-i-mozna-sie-zapisywac"]->values;
  $groupActive = $groupActive[0]["id"];
  
  
// put active and disabled groups in different arrays
  
  if ($groupActive == 1) { // active group
//  put group name is not in array already, put it there
    if (!in_array($group, $groupsActive)) {
      $groupsActive[] = $group;
    }
  } else { // disabled group
    if (!in_array($group, $groupsDisabled)) {
      $groupsDisabled[] = $group;
    }
  }
}


foreach($groupsActive as $group) {

  
  
  // get first word from group name
  $groupLanguage = strtok($group, " ");
  
  $groupLanguageLength = strlen($groupLanguage);
//  include space
  $groupLanguageLength += 1;
  
  // get "Ind" from group name
  //$groupInd = substr($group, intval($groupLanguageLength), 3);
  
  //echo $groupInd;
}
  /*
  // group number as input value will be sent to Podio
  echo '<div class="row"><div class="col-md-12">';

  echo "<label style='width: 100%;' class='groupLabel language".$groupLanguage."Group".$groupLevel." hidden'>  ";
  

  echo "<input id='language".$groupLanguage."Group".$groupLevel.".".$groupNumber."' type='radio' name='group' value='".$groupNumber."'>";
    
  echo "<span style='margin-left: 10px;'><strong>Grupa ".$groupNumber." - <span style='color: green;'>wolne miejsca</span></strong></span><br/>";

  */
  
?>


        <div class="form-group">
        <label>Który język Cię interesuje?</label><br/>
        <div class="choose-language">
        <input type="radio" id="languageEnglish" class="language-radio" name="language" value="en" required oninvalid="this.setCustomValidity('Musisz wybrać język')" >
          <label id="languageEnglishLabel" class="language-radio-label btn btn-default" for="languageEnglish">Angielski</label>
<!--
        <input type="radio" id="languageGerman" class="language-radio" name="language" value="de">
          <label id="languageGermanLabel" class="language-radio-label btn btn-default" for="languageGerman">Niemiecki</label>
-->
        <input type="radio" id="languageFrench" class="language-radio" name="language" value="fr">
          <label id="languageFrenchLabel" class="language-radio-label btn btn-default" for="languageFrench">Francuski</label>

        <input type="radio" id="languageItalian" class="language-radio" name="language" value="it">
          <label id="languageItalianLabel" class="language-radio-label btn btn-default" for="languageItalian">Włoski</label>

        <input type="radio" id="languageRussian" class="language-radio" name="language" value="ru">
          <label id="languageRussianLabel" class="language-radio-label btn btn-default" for="languageRussian">Rosyjski</label>

        <input type="radio" id="languageSpanish" class="language-radio" name="language" value="es">
          <label id="languageSpanishLabel" class="language-radio-label btn btn-default" for="languageSpanish">Hiszpański</label>

        <input type="radio" id="languageArabic" class="language-radio" name="language" value="ar">
          <label id="languageArabicLabel" class="language-radio-label btn btn-default" for="languageArabic">Arabski</label>


        </div>
      </div>
        


				<div class="form-group">
        <label id="choose-level-label">Wybierz poziom zaawansowania</label><br/>
        </div>
        <!-- English -->
        <div id="languageEnglishDiv" class="LanguageDiv">
             
        <input type="radio" id="englishA2" class="language-level-radio english-radio" name="language-level" value="1" required >
          <label id="" class="language-level-radio english-radio"	for="englishA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="englishB1" class="language-level-radio english-radio" name="language-level" value="2">
          <label id="" class="language-level-radio english-radio" for="englishB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="englishB2" class="language-level-radio english-radio" name="language-level" value="3">
          <label id="" class="language-level-radio english-radio" for="englishB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="englishC1" class="language-level-radio english-radio" name="language-level" value="4">
          <label id="" class="language-level-radio english-radio" for="englishC1">C1 Advanced</label><br/>  

        <input type="radio" id="englishInd" class="language-level-radio english-radio" name="language-level" value="5">
          <label id="" class="language-level-radio english-radio" for="englishInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>                </div>


        <!-- German --><!--
        <div id="languageGermanDiv" class="LanguageDiv">
           
        <input type="radio" id="germanA1" class="language-level-radio german-radio" name="language-level" value="6" >
          <label id="" class="language-level-radio" for="germanA1">A1 Beginner</label><br/>

        <input type="radio" id="germanA2" class="language-level-radio german-radio" name="language-level" value="7">
          <label id="" class="language-level-radio" for="germanA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="germanB1" class="language-level-radio german-radio" name="language-level" value="8">
          <label id="" class="language-level-radio" for="germanB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="germanB2" class="language-level-radio german-radio" name="language-level" value="9">
          <label id="" class="language-level-radio" for="germanB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="germanC1" class="language-level-radio german-radio" name="language-level" value="10">
          <label id="" class="language-level-radio" for="germanC1">C1 Advanced</label><br/>  

        <input type="radio" id="germanInd" class="language-level-radio german-radio" name="language-level" value="11">
          <label id="" class="language-level-radio" for="germanInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>          
        </div>
-->
        <!-- French -->
        <div id="languageFrenchDiv" class="LanguageDiv">
            
        <input type="radio" id="frenchA1" class="language-level-radio french-radio" name="language-level" value="12" >
          <label id="" class="language-level-radio" for="frenchA1">A1 Beginner</label><br/>

        <input type="radio" id="frenchA2" class="language-level-radio french-radio" name="language-level" value="13">
          <label id="" class="language-level-radio" for="frenchA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="frenchB1" class="language-level-radio french-radio" name="language-level" value="14">
          <label id="" class="language-level-radio" for="frenchB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="frenchB2" class="language-level-radio french-radio" name="language-level" value="15">
          <label id="" class="language-level-radio" for="frenchB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="frenchC1" class="language-level-radio french-radio" name="language-level" value="16">
          <label id="" class="language-level-radio" for="frenchC1">C1 Advanced</label><br/>  

        <input type="radio" id="frenchInd" class="language-level-radio french-radio" name="language-level" value="17">
          <label id="" class="language-level-radio" for="frenchInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>   
            

        <!-- Italian -->
        <div id="languageItalianDiv" class="LanguageDiv">
           
        <input type="radio" id="italianA1" class="language-level-radio italian-radio" name="language-level" value="18" >
          <label id="" class="language-level-radio" for="italianA1">A1 Beginner</label><br/>

        <input type="radio" id="italianA2" class="language-level-radio italian-radio" name="language-level" value="19">
          <label id="" class="language-level-radio" for="italianA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="italianB1" class="language-level-radio italian-radio" name="language-level" value="20">
          <label id="" class="language-level-radio" for="italianB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="italianB2" class="language-level-radio italian-radio" name="language-level" value="21">
          <label id="" class="language-level-radio" for="italianB2">B2 Upper-intermediate</label><br/>  

<!--
        <input type="radio" id="italianC1" class="language-level-radio italian-radio" name="language-level" value="22">
          <label id="" class="language-level-radio" for="italianC1">C1 Advanced</label><br/>  
-->

        <input type="radio" id="italianInd" class="language-level-radio italian-radio" name="language-level" value="23">
          <label id="" class="language-level-radio" for="italianInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>  
                 
       

        <!-- Russian -->
        <div id="languageRussianDiv" class="LanguageDiv">
          
        <input type="radio" id="russianA1" class="language-level-radio russian-radio" name="language-level" value="24" >
          <label id="" class="language-level-radio" for="russianA1">A1 Beginner</label><br/>

        <input type="radio" id="russianA2" class="language-level-radio russian-radio" name="language-level" value="25">
          <label id="" class="language-level-radio" for="russianA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="russianB1" class="language-level-radio russian-radio" name="language-level" value="26">
          <label id="" class="language-level-radio" for="russianB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="russianB2" class="language-level-radio russian-radio" name="language-level" value="27">
          <label id="" class="language-level-radio" for="russianB2">B2 Upper-intermediate</label><br/>  

<!--
        <input type="radio" id="russianC1" class="language-level-radio russian-radio" name="language-level" value="28">
          <label id="" class="language-level-radio" for="russianC1">C1 Advanced</label><br/>  
-->

        <input type="radio" id="russianInd" class="language-level-radio russian-radio" name="language-level" value="29">
          <label id="" class="language-level-radio" for="russianInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div> 
          
          
        <!-- Spanish -->
        <div id="languageSpanishDiv" class="LanguageDiv">
            
        <input type="radio" id="spanishA1" class="language-level-radio spanish-radio" name="language-level" value="30" >
          <label id="" class="language-level-radio" for="spanishA1">A1 Beginner</label><br/>

        <input type="radio" id="spanishA2" class="language-level-radio spanish-radio" name="language-level" value="31">
          <label id="" class="language-level-radio" for="spanishA2">A2 Pre-intermediate</label><br/>

        <input type="radio" id="spanishB1" class="language-level-radio spanish-radio" name="language-level" value="32">
          <label id="" class="language-level-radio" for="spanishB1">B1 Intermediate</label><br/>
          
        <input type="radio" id="spanishB2" class="language-level-radio spanish-radio" name="language-level" value="33">
          <label id="" class="language-level-radio" for="spanishB2">B2 Upper-intermediate</label><br/>  

        <input type="radio" id="spanishC1" class="language-level-radio spanish-radio" name="language-level" value="34">
          <label id="" class="language-level-radio" for="spanishC1">C1 Advanced</label><br/>  

        <input type="radio" id="spanishInd" class="language-level-radio spanish-radio" name="language-level" value="35">
          <label id="" class="language-level-radio" for="spanishInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>
             
                 

        <!-- Arabic -->
        <div id="languageArabicDiv" class="LanguageDiv">
        
        <input type="radio" id="arabicInd" class="language-level-radio arabic-radio" name="language-level" value="36">
          <label id="" class="language-level-radio" for="arabicInd">Zajęcia indywidualne (wszystkie poziomy)</label><br/>
        </div>  
