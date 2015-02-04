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
	$("#form-next").slideDown();
//  send Analytics event
//  ga('send', 'event', 'Form', 'Expand', 'Rozwinięcie formularza');
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
$('input[name=lang]:radio').click(function() {
	$('input[name=language]:radio').prop('checked', false);
	$('.LanguageDiv').hide();
   
    
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
        // only one option, so make it checked already
        $('#arabicInd').prop('checked',true);
	}
});


// Ajax form

 $('#form').submit(function(submit) {
 submit.preventDefault();



// insert form data into variable
var dataString = $("#form").serialize(); 


   
//alert(dataString);
 $.ajax({
  type: "POST",
  url: "register.php",
  data: dataString, // form data as data to send
  beforeSend: function(){ // while sending
     $("body").css("cursor", "progress"); // loading cursor
     $("#submit").val("CHWILECZKĘ...");
    
   },
})
 
 .fail(function(msg) {
    alert("Wystąpił błąd! Spróbuj jeszcze raz. \n" + msg);
    // error event tracking
    ga('send', 'event', 'Form', 'Submit', 'Błąd wysłania formularza');
    mixpanel.track("Błąd wysłania formularza");
  })
 .complete(function() {
 	$("body").css("cursor", "auto"); // back to normal cursor
 })
  .done(function( msg ) { // data sent with success
	// show output
	//alert(msg); 
   
	// Analytics conversion event
//	ga('send', 'event', 'Form', 'Submit', 'Zapisanie się na warsztaty');
   
	// Mixpanel conversion event
//	mixpanel.track("Zapisanie się na warsztaty");
	// hide elements and show thank you message
	$("body").css("cursor", "auto"); // back to normal cursor
	$("#content").fadeOut(function() {
      $("#thankyou-row").removeClass("hidden");
    });
    // send virtual pageview (for remarketing, conversion tracking)
//    _gaq.push(['_setAccount', 'UA-34751885-2']); // set AIESEC account
//    _gaq.push(['_trackPageview', '/thankyou']);
     
    
	});
   
   
	// get name input to display on thank you
	var displayName = $("#name").val();
	// print name between <span> in #thankyou-msg
	$("#thankyou-msg span").html(displayName);
	
  });