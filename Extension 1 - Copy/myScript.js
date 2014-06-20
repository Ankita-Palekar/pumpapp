$("document").ready(function(){
	
$("#save").click(function(){
  window.location.href="save.html " ;

});




$("#save_tags").click(function(){

 chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  curl = tabs[0].url;   
//keep this filled and try to use post method on url
var tags=$("input").val();
var url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/addLinkPumpApp;userID=1;linkURL="+curl+";tags="+tags+";";
alert(url);
var max="ankit";
 $.ajax({ 
    type:'GET',
    url:url,
    data: max,
    // dataType:'jsonp',
    success:function(data){
      console.log(data);
    },
    error:function(data){
      console.log("oh no!");
     }
 });
});
});




});
// function doSomething() {
//     $.get("save.php");
//     return false;
// }
