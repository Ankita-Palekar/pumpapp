$("document").ready(function(){

var data="Success";
   var trial = $.ajax({
   url: "http://localhost/pumpapp-master/Extension%201%20-%20Copy/display_groups.php",
   type: "GET",
    success: function(data){
      $("#update").append(data);
      $('.loader').fadeOut(-1000);
      $('body').css('background', '#f5f5f5');
      $("button").click(function(){
     var max=$(this).attr("id");
     alert(max);
     chrome.tabs.query({'active': true, 'lastFocusedWindow': true}, function (tabs) {
   var  curl = tabs[0].url;  
   var safe_curl=encodeURIComponent(curl);
     $(this).replaceWith("<button type=\"button\" class=\"done_share btn btn-labeled btn-success\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon-ok\"></i></span>Shared</button>");
    $.ajax({
          url: "/share_with_group.php",
       type: "POST",
           data:{id: max},
       success: function(data){
          var link_id=2;
              var id=data;
             alert(id);
              var uri="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=sharedNotification&notifiyersID=2&groupID="+Number(id)+"&LinkID=-1&link_url="+safe_curl;
              var safe_uri=encodeURIComponent(uri);
              console.log(uri);
              $.ajax({
                  url: uri,
                  type:"GET",
                 // dataType: "jsonp",
                  success:function(data){
                    alert("Done!");
                  },
                  error:function(data){
                    alert("Not shared succesfully");
                  }



              });

           }
    
     });
  });
   });

}
          

});

 $("#back").click(function(){
window.location.href="picker.html";
 });

$("#main_page").click(function(){

    var newURL = "http://localhost/pumpapp/index.php";
    chrome.tabs.create({ url: newURL });

});


});
