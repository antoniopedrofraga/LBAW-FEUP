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

   var text = $('#searchTextBox').val();

   $.getJSON("../ajax/search-auctions.php", { text: text }, function(data) {

    $("#searchDropdown").css({
     'opacity' : '1',
     'pointer-events' : 'auto',
     'z-index' : '1'
    });


    $("#searchDropdown").html('');
    var output = "";
    for (auction in data) {
      output += "<li onclick='window.location=\"../pages/auction.php?id=" + data[auction].idleilao + "\"'>";
      output += "<div>";
      var image = data[auction].link == null ? "https://placehold.it/800x600" : data[auction].link;
      console.log(data[auction]);
      output += '<div class="image"><img src="' + image + '"></div>';
      output += '<p class="name"><a>' + data[auction].nome + '</a></p>';
      output += '</div>';
      output += '</li>';
    }
    
    if (data == null || data.length == 0)
      output = "<li>Não foram encontrados leilões...</li>";

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