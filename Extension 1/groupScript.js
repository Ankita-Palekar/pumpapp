$("document").ready(function(){
	
// $("#save").click(function(){
//   // alert("Clicked");

//    var data="data=data";
//   var jxhr= $.ajax({ 
//     type:"POST",
//     url:"http://localhost/Extension 1/save.php",
//     data:data,
//     success:function(data){
//       console.log(data);
//     }
// });
// //doSomething();
// jxhr.done(function(){alert("Complete");});

// });






//  alert("showing Groups");
var data="Success";
   var trial = $.ajax({
   url: "http://localhost/Extension 1/share_with_group.php",
   type: "GET",
    success: function(data){
      $("#update").append(data);
          }
     

});


});









// function doSomething() {
//     $.get("save.php");
//     return false;
// }
