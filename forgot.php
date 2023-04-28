<html>
    <head>
        <title> Forgot password </title>
        <link href="faviconn.png" rel="icon">
        <style>
             body 
            {
                font-family: "Inconsolata", monospace;
                background-size:cover;
                color: #0d1e2d;
                background-image: url("Backgr.jpg");
                background-repeat: no-repeat;
            }
            .field
            {    
                width:100%;
                height:50px;
                margin-bottom:15px;
               
            }
            .body{
                margin:auto;
                margin-top:130px;
                border-style: none;
                border-color:white;
                padding-left:30px;
                padding-top:30px;
                width:300px;
                padding-right:30px;
                padding-bottom: 20px;
                background-color:rgba(255,255,255,0.4)
            }
            .field input 
            {
                height: 100%;
                width: 100%;
                outline: none;
                padding-left: 15px;
                border-radius: 5px;
                border: 1px solid lightgrey;
                border-bottom-width: 2px;
                font-size: 15px;
              
            }
            form
            {
                height:250px;
            }
            .field .buttonup
            {
                height: 100%;
                width: 100%;
                outline: none;
                padding-left: 15px;
                border-radius: 5px;
                border: 1px solid lightgrey;
                border-bottom-width: 2px;
                font-size: 15px;
            }
            .field button
            {
                background-color: rgb(159, 233, 192);
                height: 100%;
                width: 100%;
                outline: none;
                padding-left: 15px;
                border-radius: 5px;
                border: 1px solid  rgb(159, 233, 192);
                border-bottom-width: 2px;
                font-size: 15px;
                margin-top:15px;
            }
            .body a
            {
                text-decoration: none;
                color:black;
                font-size:25px;
            }
            .login
            {
                margin-bottom:10px;
            }
        </style>
    </head>
    <body>
        <div class="body">
            <a href="reg.php" style="float:left"><u>Forgot password</u></a>
            <br>
            <br>        
            <form method='post'>
               
                <div class="field" style="padding-top:50px;">
                    <input type="text" name="e-mail" placeholder="e-mail" required>
                </div>
                
                <div class="field">
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
           
            
            <?php
                // include('conf.php');
                // if(isset($_POST['submit']))
                // {
                //     $name=$_POST['name'];
                //     $email=$_POST['e-mail'];
                //     $password =password_hash( $_POST['password'],PASSWORD_BCRYPT);
                //     $role=3;
                //     $hql="SELECT * from `user` where `e-mail`='$email';";
                //     $op=mysqli_query($conn,$hql);
                //     if(mysqli_num_rows($op)==0)
                //     {
                //         $sql = "INSERT INTO `user`(`name`,  `e-mail`, `password`,`Role` ) VALUES ('$name','$email','$password','$role')";
                //         $result = $conn->query($sql);
                //         //$r=mysqli_fetch_assoc($result);  
                //         if ($result == TRUE) 
                //         {
                //             header("location:http://localhost/php/myportfolio/index.php");
                //         }
                //         $conn->close(); 
                //     }
                //     else
                //     {
                //         echo "<br>";
                //         echo "Email already exist. Go to login page.";
                //     }
                // } 
        
              
        include "conf.php";
       
function sendmail($email)
    {        
        $receiver = $email;
        $subject = "Forgot password";
        // $body = "Hi, Hwt we are happy to tell you that we have started our website kindly join with us for your comfort";
        $body = "Hello, user youe email is verified click here to reset your password.<a href='http://localhost/php/myportfolio/reset.php?email=$email'>RESET</a>";
        $sender = "From:homeservice.pme@gmail.com";
        $sender  .= 'MIME-Version: Homeservice' . "\r\n";
        $sender  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if(mail($receiver, $subject, $body, $sender))
        {
            echo "**Email sent successfully to $receiver";
        }
        else
        {
            echo "**Sorry, failed while sending mail!";
        }
    }
        
        if (isset($_POST['submit'])) 
        {
           
            $email = $_POST['e-mail'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                    ECHO "**Invalid email format";
                  
            }
            else
            {
                $hql="SELECT * from `user` where `e-mail`='$email';";
                $op=mysqli_query($conn,$hql);

                if(mysqli_num_rows($op)==0)
                {
                    echo "**email is not registered.";

                    $conn->close(); 
                }
                else
                {
                    sendmail($email);
                }
            }
        }
        ?>
            
        </div>
    </body>
</html>