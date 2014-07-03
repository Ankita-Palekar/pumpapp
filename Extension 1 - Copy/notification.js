$.ajax({
  type: 'GET',
 url: "http://localhost/pumpapp/all_notify.php",
success:function(data){
 $("#update").append(data);
  }
});
