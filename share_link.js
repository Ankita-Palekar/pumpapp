$(".share").click(function(){
	var picked_link_id=$(this).parent().parent().attr("data-linkid");
	$.cookie("picked_link_id",picked_link_id);


})


$(".share_modal li button").click(function(){
 // $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"groups_ws2.php\">View Links</a>");
var id=$(this).attr("data-gid");
var lid=$.cookie("picked_link_id");
var me=$.cookie("user");
 $(this).replaceWith("<button type=\"button\" class=\"btn btn-xs btn-success\" disabled=\"disabled\">Successfully Shared</button>");
 $.ajax({
  type: 'GET',
  url:"http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=sharedNotification&notifiyersID="+me+"&groupID="+id+"&LinkID="+lid ,
  success:function(data){
  console.log(data);
  
    }
})

})
	// http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=sharedNotification&notifiyersID=2&groupID=9&LinkID=2