$("document").ready(function(){

var data="Success";
   var trial = $.ajax({
   url: "http://localhost/pumpapp/Extension%201%20-%20Copy/share_with_group.php",
   type: "GET",
    success: function(data){
      $("#update").append(data);
          }

});


});



