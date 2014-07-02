$("document").ready(function(){

$.ajax({
url: "http://localhost/pumpapp/Extension%201%20-%20Copy/get_friends.php",
success:function(data){
	var items=data;
	var searcher=jQuery.parseJSON(items);
	alert(searcher);
$('#search').keyup(function() {
	var searchField = $('#search').val();
	var myExp = new RegExp(searchField, "i");
	$.getJSON(items, function(data) {
		var output = '<ul class="searchresults">';
		$.each(data, function(key, val) {
			if (val.name.search(myExp) != -1) {
				output += '<li>';
				output += '<img src="images/'+ val.shortname +'_tn.jpg" alt="'+ val.name +'" WIDTH=32 HEIGHT=32 />    ';
				output += val.name;
				output += '</li></br>';
			}
		});
		output += '</ul>';
		$('#update').html(output);
	}); 


});
 }
});
});