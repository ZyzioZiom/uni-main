// show rest of form
$("#next").click(function() {
	// get name input to display on form
	var displayName = $("#name").val();
	// print name between <span> in #thankyou-msg
	$("#next-name span").html(displayName);

	$("#next").slideUp(function() {
		if (displayName.length > 0) {
		$("#next-name").removeClass("hidden");
		$("#next-name").css("display", "none");
		$("#next-name").fadeIn();
		}
	});
	$("#form-next").removeClass("hidden");
	$("#form-next").css("display", "none");
	$("#form-next").slideDown();

});


// reset language level check when checking different language
$('input[name=lang]:radio').click(function() {
	$('input[name=language]:radio').prop('checked', false);
	$('.LanguageDiv').hide();
    $('#choose-level-label').show();
    
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
	//ga('send', 'event', 'Form', 'Submit', 'Zapisanie się na listę');
	// Mixpanel conversion event
	//mixpanel.track("Zapisanie się na listę");
	// hide elements and show thank you message
	$("body").css("cursor", "auto"); // back to normal cursor
	$("#content").fadeOut(function() {
      $("#thankyou-row").removeClass("hidden");
    });
    // send virtual pageview (for remarketing, conversion tracking)
    // _gaq.push(['_setAccount', 'UA-12345-1']); // set AIESEC account
    // _gaq.push(['_trackPageview', '/thankyou']);
     
    
	});
	// get name input to display on thank you
	var displayName = $("#name").val();
	// print name between <span> in #thankyou-msg
	$("#thankyou-msg span").html(displayName);
	
  });