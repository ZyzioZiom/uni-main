// highlight active menu page
$(".nav-link").each(function() {
  var href = $(this).attr("href");
  
//   split current address into array items divided by "/" and get name after last "/"
  var location = window.location.pathname.split("/").pop();
  
  if (href === location) {
    $(this).css("background", "#ddd");
  }
});

// change ZAPISZ SIĘ menu background to red when somebody clicks flag on index
$(".flag").mouseover(function() {
  $("#signup-nav").css("background", "red");
});

$(".flag").mouseout(function() {
  $("#signup-nav").css("background", "orange");
});


// change ZAPISZ SIĘ menu background to red when somebody hovers it
$("#signup-nav").mouseover(function() {
  $(this).css("background", "red");
});

$("#signup-nav").mouseout(function() {
  $(this).css("background", "orange");
});
