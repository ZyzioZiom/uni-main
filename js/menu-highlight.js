// highlight active menu page
$(".nav-link").each(function() {
  var href = $(this).attr("href");
  var href = "/main/" + href;
  
  if (href === window.location.pathname) {
    $(this).css("background", "#ddd");
  }
});