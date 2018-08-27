<!DOCTYPE html>

<html>
<head>
     <meta name="charset" content="utf-8" />
     <meta name="description" content="Hoop - social network" />
     <style>
         * 
	 { 
             padding: 0;
             margin: 0;
	 } 
         #header
	 {
             width: 1000px;
	     height: 50px;
	     margin: 0 auto;
	 }
         a 
	 {
             color: red;
	     text-decoration: none;
             margin-top: 30px;
	 }
         #content
	 {
             width: 1000px;
             min-height: 400px;
             margin: 0 auto;
         }
         
     </style>
</head>
<body>
     <div id="header">
          <h2><a href="index.php">Hoop - social network</a></h2> 
     </div>
     <div id="content">
<?php
            session_start();
            if(isset($_POST['submit']))
	    {
		    
		    $user = $_POST['user'];
		    $_SESSION['newuser'] = $_POST['user']; 
	    }
         ?>
         <p>Hoop - social network</p>
         <p>Add user:
	 </br>
         <form name="form" method="POST" action="http://localhost:8080/index.php">
	   <input name="user" type="text"></br></br>
           <input name="submit" type="submit" value="Submit"></br>
	 </form>
	 </p>
         <?php
	     if(isset($_SESSION['newuser'])) 
	     {
		     echo 'New user added:</br>';
		     echo 'User:'.$_SESSION['newuser'].'</br>';
     echo 'Add friend:<form name="form1" method="POST" action="http://localhost:8080/index.php"><input name="addfriend" type="submit" value="Add friend"></form></br>';

	     
	     }

	     if(isset($_POST['addfriend']))
	     {
		          //echo 'New user added:</br>';
                     //echo 'User:'.$_SESSION['newuser'].'</br>';
     //echo 'Add friend:<form name="form1" method="POST" action="http://localhost:8080/index.php"><input name="addfriend" type="submit" value="Add friend"></form></br>';

                         $newfriend = $_SESSION['newuser'];
			 echo 'Friend Added:'.$_SESSION['newuser'].'</br>';
                         echo '<a class="twitter-timeline" href="https://twitter.com/'.$newfriend.'">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> ';


             }

	    
	          
         ?>
     </div>
     <div id="footer"></div>
</body>
</html>
