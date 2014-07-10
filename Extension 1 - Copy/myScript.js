$("document").ready(function(){

$("#save").click(function(){
  window.location.href="save.html " ;

});


chrome.browserAction.setBadgeBackgroundColor({color:[190, 0, 0, 230]});
chrome.browserAction.setBadgeText({text:"32"});


$("#save_tags").click(function(){


 chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  curl = tabs[0].url;  
   var safe_curl=encodeURIComponent(curl);
var tags=$("input").val();
var url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=addLinkPumpApp&userID=2&linkURL="+safe_curl+"&tags="+tags;
 $.ajax({ 
    type:'GET',
    url:url,
    //data: max,
    // dataType:'jsonp',
    success:function(data){
      alert(url);
      window.location.href="save_tags.html";
    },
    error:function(data){
      console.log("oh no!");
      
     }
 });
});

});

$("#notify").click(function(){
window.location.href="notify.html";
});


$("#main_page").click(function(){

    var newURL = "http://localhost/pumpapp/index.php";
    chrome.tabs.create({ url: newURL });

});

$("#back").click(function(){
window.location.href="picker.html";
});

$("#shareg").click(function(){
   $.ajax({
   url: "/share_with_group.php",
    success: function(data){
        console.log(data);  
          }
     

  });

  window.location.href="share_with_group.html" ;
});

$("#sharei").click(function(){

window.location.href="alt_share_ind.html";


});

});

