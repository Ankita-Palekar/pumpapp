$.ajax({
  type: 'GET',
 url: "http://localhost/pumpapp/all_notify.php",
success:function(data){
 $("#update").append(data);
  }
});
chrome.browserAction.setBadgeBackgroundColor({color:[190, 0, 0, 230]});
chrome.browserAction.setBadgeText({text:"32"});