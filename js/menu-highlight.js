// highlight active menu page
$(".nav-link").each(function() {
  var href = $(this).attr("href");
  var location = window.location.pathname.split("/").pop();
  
  if (href === location) {
    $(this).css("background", "#ddd");
  }
});