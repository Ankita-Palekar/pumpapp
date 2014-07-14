$(".share").click(function(){
	var picked_link_id=$(this).parent().parent().attr("data-linkid");
	$.cookie("picked_link_id",picked_link_id);


})


$(".share_modal li button").click(function(){
 // $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"createGroup.php\">View Links</a>");
var id=$(this).attr("data-gid");
var lid=$.cookie("picked_link_id");
var me=$.cookie("user");
 alert("Successfully Shared!");
  $.ajax({
  type: 'GET',
  url:"http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=sharedNotification&notifiyersID="+me+"&groupID="+id+"&LinkID="+lid ,
  success:function(data){
  console.log(data);

    }
})

})

