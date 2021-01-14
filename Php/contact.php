<!DOCTYPE html>
<html>
<head>
 
<?php require "head.php"?>

</head>
<body>
<?php require "base.php" ?>
 <div class="livre">
   <div> 
    <h1>Nous contacter</h1>
    <h2>Formulaire :</h2> 
    <fieldset>
   		 <legend>Indormation sur le client</legend>
   		 		<label>Email :</label>
   		 		<input type="email" id="mail" name="client_mail" required=""><br>  
   		 		<label>Pourquoi nous contacter :</label> 		
   			<select name="duration" required="">
				<option value="Test">Tester la page contact</option>
                <option value="Question" selected="">Question sur le site</option>
                <option value="Bug">Bug découvert</option>
            </select><br>
			<textarea id="addreq" name="client_addreq" placeholder="Votre message"></textarea><br>
			<button type="reset">Reset</button>
			<button type="submit">Envoyer</button>	
	</fieldset> 
</div>
</div>
</body>
</html>