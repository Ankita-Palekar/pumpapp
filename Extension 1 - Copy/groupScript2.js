$("document").ready(function(){

var data="Success";
   var trial = $.ajax({
   url: "http://localhost/pumpapp/Extension%201%20-%20Copy/display_groups.php",
   type: "GET",
    success: function(data){
      $("#update").append(data);
      $('.loader').fadeOut(-1000);
      $('body').css('background', '#f5f5f5');
      $("button").click(function(){
     $(this).replaceWith("<button type=\"button\" class=\"btn btn-labeled btn-success\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon-ok\"></i></span>Shared</button>");
     var max=$(this).attr("id");
    $.ajax({

          url: "http://localhost/pumpapp/Extension%201%20-%20Copy/share_with_group.php",
       type: "POST",
           data:{id: max},
       success: function(data){
        
          var link_id=2;
              var id= data;
             // alert(id);
              var uri="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/sharedNotification;notifiyersID=1;groupID="+id+";LinkID="+link_id+";";
              var safe_uri=encodeURIComponent(uri);
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
   // alert(max);
   });

}
          

});

 


});
