$("document").ready(function(){
	
$("#save").click(function(){
  window.location.href="save.html " ;
  // alert("Clicked");
// var url="multi";
//    alert(url);
//      chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
//    var  murl = tabs[0].url; 



// var max=30;//keep this filled and try to use post method on url

//   var jxh= $.ajax({ 
//     type:"POST",
//     url:"http://localhost/pumpapp/Extension 1/save.php",
//     data:"url="+murl,
//     success:function(data){
//       console.log(data);

//     }

// });
  
// //doSomething();
// jxhr.done(function(){alert("Complete");});

});





$("#shareg").click(function(){
//  alert("showing Groups");

   $.ajax({
   url: "http://localhost/pumpapp/Extension 1/share_with_group.php",
    success: function(data){
        console.log(data);  
          }
     

  });

  window.location.href="share_with_group.html " ;
  document.write(data);

});


$("#save_tags").click(function(){

 chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  curl = tabs[0].url;   
//keep this filled and try to use post method on url
var tags=$("input").val();
  var jxhr= $.ajax({ 
    type:"POST",
    url:"http://localhost/pumpapp/Extension 1/save_tags.php",
    data:{"url":curl ,"tags":tags},
    success:function(data){
      console.log(data);
    }
});

});

window.location.href="save_tags.html";
});


$("#clicked").click(function(){
  chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  turl = tabs[0].url;   
//keep this filled and try to use post method on url
  var jr= $.ajax({ 
    type:"POST",
    url:"http://localhost/pumpapp/Extension 1/remove.php",
    data:"url="+turl ,
    success:function(data){
      console.log(data);
    }
});

});
  window.location.href="removed.html";
});

});
// function doSomething() {
//     $.get("save.php");
//     return false;
// }
