// highlight active menu page
$(".nav-link").each(function() {
  var href = $(this).attr("href");
  
//   split current address into array items divided by "/" and get name after last "/"
  var location = window.location.pathname.split("/").pop();
  
  if (href === location) {
    $(this).css("background", "#ddd");
  }
});