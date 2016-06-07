function getUsers(text) {
  console.log("Enter getUsers: " + text);
  
	$.getJSON("../ajax/search-users.php", { text: text }, function(data) {
   
		$("#info-users").html('');
		var output = "";

    for(users in data){
      output += "<label class=\"icon-title letter\" for=\"comment\">"+data[users].letter+"</label>";
      output += "<div class=\"well\">";
      
      for(user in data[users].users){
        output += "<div class=\"row\">";
        output += "<div class=\"col-md-12\">";
        output += "<span><a class=\"usr-name vcenter\" href=\"../pages/feedbackpage.php?id=" + data[users].users[user].idutilizador + "&tab=6\">" + data[users].users[user].nomeutilizador + "</a></span>";
        output += "<div class=\"col-md-4 pull-right\">";
        output += "<div class=\"col-md-4 pull-right\">";
        output += "<button type=\"button\" onclick=\"deleteUser(" + data[users].users[user].idutilizador + ",'" + data[users].users[user].nomeutilizador + "')\" class=\"btn btn-warning round usr-btn\" title=\"Eliminar utilizador\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
        output += "</div>";
        output += "<div class=\"col-md-4 pull-right\">";
        
        if(data[users].users[user].banido){
          output += "<button type=\"button\" onclick=\"unBanUser(" + data[users].users[user].idutilizador + ",'" + data[users].users[user].nomeutilizador + "')\" class=\"btn btn-warning round usr-btn\" title=\"Remover de utilizador banido\"><span class=\"glyphicon glyphicon-ban-circle\"></span></button>";
        }else{
          if(data[users].users[user].admin){
            output += "<button type=\"button\" onclick=\"unAdmin(" + data[users].users[user].idutilizador + ",'" + data[users].users[user].nomeutilizador + "')\" class=\"btn btn-warning round usr-btn\" title=\"Remover de administrador\"><span class=\"glyphicon glyphicon-thumbs-up\"></span></button>";
          }else{
            output += "<button type=\"button\" onclick=\"getAdmin(" + data[users].users[user].idutilizador + ",'" + data[users].users[user].nomeutilizador + "')\" class=\"btn btn-warning round usr-btn\" title=\"Tornar administrador\"><span class=\"glyphicon glyphicon-pushpin\"></span></button>";
          }
          output += "</div>";
          output += "<div class=\"col-md-4 pull-right\">";
          output += "<button type=\"button\" onclick=\"banishUser(" + data[users].users[user].idutilizador + ",'" + data[users].users[user].nomeutilizador + "')\" class=\"btn btn-warning round usr-btn\" title=\"Banir utilizador\"><span class=\"glyphicon glyphicon-asterisk\"></span></button>";
       
        }
        
        output += "</div>";
        output += "</div>";
        output += "</div>";                        
        output += "</div>";
        if (user < (data[users].users.length-1)){
           output += "<hr>";
        }
      }
      
      output += "</div>";
    }

    if (data == null || data.length == 0)
      output = "<li>Não foram encontrados users...</li>";
      
		$("#info-users").append(output);
	});
}

$('#searchTextBoxUsers').keyup(function() {

  var text = $('#searchTextBoxUsers').val();
  getUsers(text);

});

$( document ).ready(function() {
	getUsers(null);
});

function deleteUser(userid, username){
	$('input#id-user').attr('value',userid);
  $('input#username').attr('value',username);
	$('#delete-user-modal').modal({
		show: true
	});
}

function banishUser(userid, username){
  
	$('input#id-user-banish').attr('value',userid);
  $('input#username-banish').attr('value',username);
	$('#banish-user-modal').modal({
		show: true
	});
}

function unBanUser(userid, username){  
  $('input#id-user-unBanUser').attr('value',userid);
  $('input#username-unBanUser').attr('value',username);
	$('#unbanuser-user-modal').modal({
		show: true
	});
}

function unAdmin(userid, username){  
  $('input#id-user-unadmin').attr('value',userid);
  $('input#username-unadmin').attr('value',username);
	$('#unadmin-user-modal').modal({
		show: true
	});
}

function getAdmin(userid, username){  
  $('input#id-user-getadmin').attr('value',userid);
  $('input#username-getadmin').attr('value',username);
	$('#getadmin-user-modal').modal({
		show: true
	});
}

