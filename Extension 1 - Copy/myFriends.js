$("#back").click(function(){
window.location.href="picker.html";
});

$("#more").click(function(){
  window.location.href="alt_share_ind.html";
});

$("#main_page").click(function(){

    var newURL = "http://localhost/pumpapp/index.php";
    chrome.tabs.create({ url: newURL });

});


$.ajax({
  type: 'GET',
 url: "http://localhost/pumpapp-master/Extension%201%20-%20Copy/get_friends.php",
success:function(data){
  var items=data;
  var myFriends=jQuery.parseJSON(items);
 $(function() {
    var availableTags = myFriends;
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#friends" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 1,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  });
}
});

$("#go").click(function(){
  window.location.href="success_indi.html";
});
