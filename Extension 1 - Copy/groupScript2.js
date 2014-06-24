$(window).load(function(){

  

});


$("document").ready(function(){

var data="Success";
   var trial = $.ajax({
   url: "http://localhost/pumpapp/Extension%201%20-%20Copy/share_with_group.php",
   type: "GET",
    success: function(data){
      $("#update").append(data);
      $('.loader').fadeOut(-1000);
      $('body').css('background', '#f5f5f5');
          }

});


$("button").click(function(){
alert("hello");
});

});
