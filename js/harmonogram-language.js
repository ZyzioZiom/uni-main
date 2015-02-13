//harmonogram choose language groups to display

//show English on default
$(".Angielski").removeClass("hidden");

$("#harmonogramChooseLanguageList a").click(function(e) {
  // prevents scrolling to top on hash #
  e.preventDefault();
  
  var language = $(this).html();
  
//  hide all items
  $(".class-item").addClass("hidden");
  
  
  // change label language
  $("#harmonogramChooseLanguageButton").html(language + ' <span class="caret"></span>');
  
//  shows items with clicked language name as class
  $("div[class*=" + language + "]").removeClass("hidden");
  
});