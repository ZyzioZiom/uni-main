// show rest of form
function expandForm() {
  // get name input to display on form
	var name = $("#name").val();
	// print name between <span>
	$("#next-name span").html(name);

	$("#next").slideUp("fast", function() {
		if (name.length > 0) {
        $("#next-name span").append("!");
		$("#next-name span").removeClass("hidden");
		}
	});
	$("#form-next").removeClass("hidden");
	$("#form-next").css("display", "none");
	$("#form-next").slideDown(function() {
      $("#lastname").focus();
    });
//  send Analytics event
  ga('send', 'event', 'Form', 'Expand', 'Rozwinięcie formularza (kliknięcie przycisku DALEJ)');
}

// expand form on button click
$("#next").click(function() {
	expandForm();
});

// expand form on Enter pressed
$("input").keydown(function( event ) {
  if ( event.which == 13 ) {
    // disable submit on enter when not expanded
    if (!$("#form-next").is(":visible")) {
    event.preventDefault();
    }
    // expand only if not yet expanded
    if (!$("#form-next").is(":visible")) {
    expandForm();
  }
    // else submit form
  }
});

// automatically check English language to prevent not focusable errors which crash the form handling
$('#languageEnglish').prop('checked', true);
$('#languageEnglishDiv').show();
$('#languageEnglishLabel').removeClass("btn-default").addClass("btn-success");
$('#choose-level-label').show();
    

// reset language level check when checking different language
$('input[name=language]:radio').change(function() {
	$('input[name=language-level]:radio').prop('checked', false);
	$('.LanguageDiv').hide();
  hideGroups();
   
    
    $('.language-radio-label').removeClass("btn-success").addClass("btn-default");
    
	if ($('#languageEnglish').is(':checked')) {
		$('#languageEnglishDiv').show();
        $('#languageEnglishLabel').removeClass("btn-default").addClass("btn-success");
	}

	if ($('#languageGerman').is(':checked')) {
		$('#languageGermanDiv').show();
        $('#languageGermanLabel').removeClass("btn-default").addClass("btn-success");
	}
    
    if ($('#languageFrench').is(':checked')) {
		$('#languageFrenchDiv').show();
        $('#languageFrenchLabel').removeClass("btn-default").addClass("btn-success");
	}
    
    if ($('#languageItalian').is(':checked')) {
		$('#languageItalianDiv').show();
        $('#languageItalianLabel').removeClass("btn-default").addClass("btn-success");
	}
    
    if ($('#languageRussian').is(':checked')) {
		$('#languageRussianDiv').show();
        $('#languageRussianLabel').removeClass("btn-default").addClass("btn-success");
	}
    
     if ($('#languageSpanish').is(':checked')) {
		$('#languageSpanishDiv').show();
        $('#languageSpanishLabel').removeClass("btn-default").addClass("btn-success");
	}
    
    if ($('#languageArabic').is(':checked')) {
		$('#languageArabicDiv').show();
        $('#languageArabicLabel').removeClass("btn-default").addClass("btn-success");
        
	}
});

//Groups handling

function hideGroups() {
  // hide all groups
  $(".groupLabel").addClass("hidden");
//  $(".groupLabel").slideUp("fast");
//  uncheck all groups
  $('input[name=group]:radio').prop('checked', false);
//  make hidden inputs not required
  $('input[name=group]:radio').attr('required', false);
}

// choose language group
// language = level, lang = name

// change visible groups on level change
$('input[name=language-level]').change(function() {
var level;
var lang;

hideGroups();

if (this.checked) {
  level = $('label[for="' + this.id + '"]').html();

//get only two letters of level (ex. B2 or Za)
  level = level.substr(0,2);
}
  
$('input[name=language]').each(function() {
   if (this.checked) {
//     get language name   
     lang = $('label[for="' + this.id + '"]').html();
  
     
//    create class selector
     var  langClass = "language" + lang + "Group" + level;
   
     
     // make visible input required
      $("input[id^=" + langClass + "]").attr("required", true);
     
//     show matched groups
     $("." + langClass).removeClass("hidden");
     $("." + langClass).css("display", "none");
     $("." + langClass).slideDown("fast");
   }
});
});




// Ajax form - sign up

$('#form').submit(function(submit) {
submit.preventDefault();

// insert form data into variable
var dataString = $("#form").serialize(); 


$.ajax({
  type: "POST",
  url: "register.php",
  data: dataString, // form data as data to send
  beforeSend: function() { // while sending
     $("body").css("cursor", "progress"); // loading cursor
     $("#submit").val("CHWILECZKĘ...");

   },
})
 
 .fail(function(msg) {
    
    var displayName = $("#name").val(); 
    alert(displayName +", wystąpił błąd! Prawdopodobnie wszystko zadziałało tak jak trzeba, ale dla pewności spróbuj jeszcze raz.");
    // error event tracking
    ga('send', 'event', 'Form', 'Submit', 'Błąd wysłania formularza');
  })
 .complete(function() {
 	$("body").css("cursor", "auto"); // back to normal cursor
 })
  .done(function( msg ) { // data sent with success   

	// hide elements and redirect to thank you message
	$("body").css("cursor", "auto"); // back to normal cursor
	$("#content").fadeOut(function() {
      
    // get name input to display on thank you
	var displayName = $("#name").val(); 
    
    redirect = "thankyou.php?name=" + displayName;

//   redirect to thank you message
    window.location.assign(redirect);
    });

     
    
	});
   
  });