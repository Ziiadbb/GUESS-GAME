<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="des.css">
<head>
	<title>Guess the number</title>
</head>
<div class="title" style="text-decoration: underline;" >GUESS THE NUMBER</div>
<div class="form-container">
<body>
	<form method="POST" action="traitementOtherwise.php">
		<input type="text" name="username" id="nombre" placeholder="username" required ><br>
        <label>
        <input type="radio" name="level" value="easy" name="easy">
        Easy (1-10) with 5 guesses</label>
        <br>
        <label>
            <input type="radio" name="level" value="medium" name="medium">
             Medium (1-50) with 10 guesses</label>
        <br>
        <label>
            <input type="radio" name="level" value="hard" name="hard" >
            Hard (1-100) with 20 guesses</label>
        <br>
		<input type="submit" name="submit" value="Valider">
	</form>

	
</body>
</div>
</html>
