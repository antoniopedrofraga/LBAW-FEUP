$(function() {
  $(document).click(function() {
   $("#notifications").css({
     'opacity' : '0',
     'pointer-events' : 'none',
     'z-index' : '1'
   });
 });

});



$('#notifications').click(function() {


   $("#searchDropdown").css({
     'opacity' : '1',
     'pointer-events' : 'auto',
     'z-index' : '1'
   });

   var text = $('#searchTextBox').val();

   $.getJSON("../ajax/get-notifications.php", { username : } function(data) {

    $("#searchDropdown").html('');
    var output = "";
    for (auction in data) {
      output += "<li>";
      output += '<div onclick="#">';
      output += '<div class="image"><img src="https://placehold.it/800x600"></div>';
      output += '<div class="text">';
      output += '<p class="name">' + data[auction].nome + '</p>';
      output += '</div>';
      output += '</div>';
      output += '</li>';
    }
    if (data == null || data.length == 0)
      output = "<li><a>Não foram encontrados leilões...</a></li>";

    $("#searchDropdown").append(output);
  });

 }); 
