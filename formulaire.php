<?php
	if(isset($_POST) && !empty($_POST['nom'])  && !empty($_POST['objet']) && !empty($_POST['message'])){
		extract($_POST);
		$nom=$_POST['nom'];
		$mail=$_POST['mail'];
		$objet=$_POST['objet'];
		$msg=$_POST['message'];
		$destinataire= 'dieynabaguisse2017@gmail.com';
		$expediteur =$nom. ' <'.$mail.'>';
		$email=mail($destinataire,$objet,$message,$expediteur);
		if(mail($destinataire,$objet,$msg,$expediteur)){
			echo ' Email envoye avec succes !!';
		} 
		else{
			echo 'Echec envoi de mail!!';
		} 

	}else{
		echo "Formulaire no soumis ou des champs sont vides";
	} 
?>

<HTML>
<HEAD>
<TITLE>E-Mail Formulaire</TITLE>
<meta charset="utf-8">
<style >
form{
	align-items: center;
}
	input{
		height: 50px;
		width: 400px;
		font-size: 20px;

	}
	.sub{
		height: 50px;
		width: 90px;
	}
	.texte{
		font-size: 20px;
	}
</style>
</HEAD>
<BODY>
<FORM method="POST" action="">
	<h1>Remplissez le formulaire</h1>
<input type="text" name="nom" placeholder="Nom *" required="required" ><br><br>

<input type="mail" name="mail" placeholder="Email *" size=30  required="required"><br><br>
<input type="text" name="objet" placeholder="Objet *" size=30  required="required"><br><br>
<textarea name="message" placeholder=" Message *" cols=47 rows=7 class="texte"></textarea><br><br>
<input type="submit" value="Envoyer" class="sub">
</FORM>
</BODY>


</HTML>