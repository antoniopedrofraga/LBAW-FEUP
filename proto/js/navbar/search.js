$(function() {
  $(document).click(function() {
   $("#searchDropdown").css({
     'opacity' : '0',
     'pointer-events' : 'none',
     'z-index' : '1'
   });
 });

});



$('#searchTextBox').keyup(function() {

 if($(this).val().length > 0) {

   $("#searchDropdown").css({
     'opacity' : '1',
     'pointer-events' : 'auto',
     'z-index' : '1'
   });

   var text = $('#searchTextBox').val();

   $.getJSON("../ajax/search-auctions.php", { text: text }, function(data) {

    $("#searchDropdown").html('');
    var output = "";
    for (auction in data) {
      output += "<li onclick='window.location=\"../pages/auction.php?id=" + data[auction].idleilao + "\"'>";
      output += "<div>";
      output += '<div class="image"><img src="https://placehold.it/800x600"></div>';
      output += '<p class="name">' + data[auction].nome + '</p>';
      output += '</div>';
      output += '</li>';
    }
    
    if (data == null || data.length == 0)
      output = "<li><a>Não foram encontrados leilões...</a></li>";

    $("#searchDropdown").append(output);
  });

 } else {

  $("#searchDropdown").css({
   'opacity' : '0',
   'pointer-events' : 'none',
   'z-index' : '1'
 });

}

});