

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AV Luxury Apartments and Condos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="../src/signinup.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    </head>

    <body>


        <?php include ("../src/header.php"); ?>

     
   
          <div class="content" style="height: 780px; background-color:rgb(73, 73, 74);">

          <div class="main">
              <input type="checkbox" id="chk" aria-hidden="true">
               <div class="signup">
                   <form method="POST">
                       <label for="chk" aria-hidden="true">Sign Up</label>
                       <input type="text" name="text" placeholder="User Name" name="uname" required="">
                       <input type="email" name="email" placeholder="E-mail" name="email" required="">
                       <input type="password" name="pswd" placeholder="Password" name="password" required="">
                       <button>Sign Up</button>
                                         
                    
                    </form>
               </div>

               <div class="login">
                   <form method="POST">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="E-mail" required="">
                    <input type="password" name="pswd" placeholder="password" required="">
                    <button>Login</button>  
                   </form>
               </div>

          </div>


          
          
          
            
</div>  
<?php include ("../src/footer.php"); ?> 
    
      
    
    <script>
        /* Open when someone clicks on the span element */
        function openNav() {
        document.getElementById("myNav").style.width = "100%";
        }

        /* Close when someone clicks on the "x" symbol inside the overlay */
        function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <script>
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            $(".zoom-div img").css({
                width:(100 + scroll/5) + "%"
            })
        })
    </script>
    
    </body>
</html>

<?php
     require '../src/php/config.php';

	
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
    $pwd = MD5($password);
	
	
	$sql ="INSERT INTO signup_db(user_name, email, password)values('$uname','$email','$password')";
	
	if($config->query($sql)){
		echo"Inserted successfully";
	}
	else{
		echo"Error:". $config->error;
	}
	
	

?>