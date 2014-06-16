$("document").ready(function(){
	
$("#save").click(function(){
  // alert("Clicked");
// var url="multi";
//    alert(url);
     chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  url = tabs[0].url; 


alert(url);
var max=30;//keep this filled and try to use post method on url

  var jxhr= $.ajax({ 
    type:"POST",
    url:"http://localhost/Extension 1/save.php",
    data:max,
    success:function(data){
      console.log(data);
    }
});
// //doSomething();
// jxhr.done(function(){alert("Complete");});
window.location.href="save.html " ;
});


});


$("#shareg").click(function(){
//  alert("showing Groups");

   $.ajax({
   url: "http://localhost/Extension 1/share_with_group.php",
    success: function(data){
        console.log(data);  
          }
     

  });

  window.location.href="share_with_group.html " ;
  document.write(data);

});


});









// function doSomething() {
//     $.get("save.php");
//     return false;
// }
