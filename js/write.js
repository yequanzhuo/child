$(document).ready(function(){
  $(".inwrite").keydown(function(){
    $(".a").css("background-color","#EACBB4");
  });
  $("body").keyup(function(){
    $(".mainbox").css("background-color","");
  });
});