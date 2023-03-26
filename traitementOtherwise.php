<html>
<link rel="stylesheet" href="des.css">
<head>
    <style>body{
    text-align: center;
}</style>
<title>Guess the number</title>
  </head>
  <div class="title" > <h1>GUESS THE NUMBER</div>
  <?php 
  session_start();        
  if(isset($_POST['username']) && isset($_POST['level'])){
  $_SESSION['username']=$_POST['username'];
  $_SESSION['level']=$_POST['level'];
  $_SESSION['message']="";

    if ($_SESSION['level'] == 'easy')
        {
    $_SESSION['till'] = 10;
    $_SESSION['nbr_guesses'] = 5;
    $_SESSION['nbr_tries'] = 5;
    $_SESSION['score'] = 20;}
    elseif($_SESSION['level'] == 'medium')
    {
$_SESSION['till'] = 50;
$_SESSION['nbr_guesses'] = 10;
$_SESSION['nbr_tries'] = 10;
$_SESSION['score'] = 20;}
elseif($_SESSION['level'] == 'hard')
{
$_SESSION['till'] = 100;
$_SESSION['nbr_guesses'] = 20;
$_SESSION['nbr_tries'] = 20;
$_SESSION['score'] = 20;}
    }
   
    
    if(isset($_POST['submit'])){

  $_SESSION['number'] = rand(1, $_SESSION['till']);
}

  if (isset($_POST['guess'])) {
    $_SESSION['guess'] = $_POST['guess'];
    $_SESSION['nbr_guesses'] = $_SESSION['nbr_guesses'] - 1;
    if ($_SESSION['nbr_guesses'] > 0) {
        if ($_SESSION['guess'] == $_SESSION['number']) {
            $_SESSION['message'] = "<div>You guessed the number! Score :" . $_SESSION['score'] . "</div>";
        }
        else if ($_SESSION['guess'] > $_SESSION['number']) {
            $_SESSION['score'] = $_SESSION['score'] -  20 / $_SESSION['nbr_tries'];
            $_SESSION['message'] = "<div>Your guess (".$_SESSION['guess'].") is too high! Score :".$_SESSION['score']."</div>";
        } else if ($_SESSION['guess'] < $_SESSION['number']) {
            $_SESSION['score'] = $_SESSION['score'] -  20 / $_SESSION['nbr_tries'];
            $_SESSION['message'] = "<div>Your guess (".$_SESSION['guess'].") is too low! Score :".$_SESSION['score']."</div>";
        }
        
    }
    elseif($_SESSION['nbr_guesses']<0){
        $_SESSION['message']="<div>you have no tries left,".$_SESSION['score']."</div>";
        $_SESSION['score'] = $_SESSION['score'] -   20 / $_SESSION['nbr_tries'];

    }


}
  
  
  
 
?>
<div class='form-container'>
<body>
    <form method="post" action="traitementotherwise.php" role="form">
        <h1> Welcome <?php echo $_SESSION['username'] ?></h1>
        <h1> You have choosed the difficulty <?php echo $_SESSION['level'] ;?></h1>
        <h1> You still have : <?php echo $_SESSION['nbr_guesses'] ?> guesses</h1>
        <input type="number" name="guess" id="guess">
        <input type="submit" value="guess">
        </div>
                                        <?php
                                        if (isset($_SESSION['message'])) {
                                            echo $_SESSION['message'];
                                        }
                                        echo"<br>".$_SESSION['number'];
                                        ?>
                                    </div>
        
      </form>
    </body>
    </div>

  
  
  
  
  
  
</html>