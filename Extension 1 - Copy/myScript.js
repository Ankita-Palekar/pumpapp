$("document").ready(function(){
	
$("#save").click(function(){
  window.location.href="save.html " ;

});




$("#save_tags").click(function(){


 chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  curl = tabs[0].url;  
   var safe_curl=encodeURIComponent(curl);
   
var tags=$("input").val();
var url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/addLinkPumpApp;userID=1;linkURL="+safe_curl+";tags="+tags+";";
 $.ajax({ 
    type:'GET',
    url:url,
    //data: max,
    // dataType:'jsonp',
    success:function(data){
      console.log(data);
    },
    error:function(data){
      console.log("oh no!");
      window.location.href="save_tags.html";
     }
 });
});

});


$("#main_page").click(function(){

    var newURL = "http://localhost/pumpapp/index.php";
    chrome.tabs.create({ url: newURL });

});



});