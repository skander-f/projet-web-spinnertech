function connexion()
{
  var mail=f.mail.value;
  var pwd=f.pwd.value;
  if ((mail.length==0)||(pwd.length==0))
    alert("Veuillez saisir vos identifiants");
  else
  {
    var position_pt=mail.indexOf(".");
    var position_a=mail.indexOf("@");
    var prenom=mail.substring(0,position_pt);
    var nom=mail.substring(position_pt+1,position_a);
    alert("Bienvenue "+prenom+" "+nom);
    window.location="index.html";
  } 
}