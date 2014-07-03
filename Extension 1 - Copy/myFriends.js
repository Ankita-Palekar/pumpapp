$("#return").click(function(){
  window.location.href="picker.html";
})

$("#home").click(function(){
  window.location.href="share_ind.html";
})

$("#go").click(function(){
  alert($("#myMail").val());
  window.location.href="success_indi.html";
})

$.ajax({
  type: 'GET',
 url: "http://localhost/pumpapp/Extension%201%20-%20Copy/get_friends.php",
success:function(data){
  var items=data;
  var myFriends=jQuery.parseJSON(items);
   function update( message ) {
      $( "<h4>" ).text( message ).appendTo( "#update" );
      $( "#update" ).scrollTop( 0 );
    }
  $(function() {
    $( "#friends" ).autocomplete({
      source: myFriends,
      select: function( event, ui ) {
        update( ui.item ?
          ui.item.value:
          "Nothing selected, input was " + this.value );
        $(".ui-widget").remove();
         $("#update").prepend("<h3>Selected Friend:</h3>");
       $("#update").append("<button id=\"ok\" class=\"btn btn-success\">Share Now!</button>");
      $("#update").append("<button id=\"back\" class=\"btn btn-danger\">Change User</button>");
         $("#back").click(function(){
          window.location.href="share_ind.html";
         });
         $("#ok").click(function(){
          
          window.location.href="success_indi.html";
         });

      }
    });
  });

 
}
});
