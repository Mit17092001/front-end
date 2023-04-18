<?php
    session_start();
?>
<html>
    <head>
        <title> Login </title>
        <link href="faviconn.png" rel="icon">
        <style>
            body 
            {
                background-size:cover;
                font-family: "Inconsolata", monospace;
                color: #0d1e2d;
                background-image: url("background.jpg");
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
                border-color:#353738;
                padding-left:20px;
                width:300px;
                padding-right:20px;
                padding-bottom: 10px;
                background-color: rgba(255,255,255,0.1);
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
            .field .button
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
        </style>
    </head>
    <body>
        
        <div class="body">
        <a href="index.php" style="float:left"><u>Login</u></a>
        <br>
        <br>
        <form method="post" action="">
            <div class="field">
                <input type="text" name="email" placeholder="E-mail" required class="text"><br>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="password" required class="text"><br>
            </div>
            <div class="field">
                <button id="log" name="Login" value="Login" class="button">Login</button><br>
            </div>        
        </form>
        <?php 
            include('conf.php');
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {   
                $nErr=$pErr="";
                $email=$_POST['email'];
                $password=$_POST['password'];
                $sql="SELECT * from `user` where `e-mail`='$email'";
                $op=mysqli_query($conn,$sql);
                $r=mysqli_fetch_assoc($op);
                if(mysqli_num_rows($op)==1)
                {
                    if($r['is_verified']==1)
                    {            
                        if(password_verify($password,$r['password']))
                        {
                        // $_SESSION["name"]=$r['name'];
                            $_SESSION["e-mail"]=$r['e-mail'];
                            if(isset($_SESSION['e-mail']))
                            {?>
                            
                            <?php    header("location:http://localhost/php/myportfolio/home.php");
                            }
                        }        
                        else
                        {
                            $pErr="**invalid password";
                            echo $pErr;     
                            echo "<br>"; 
                        }
                    }
                    else
                    {
                        echo "**User is not verified.";
                    }
                //     else
                //     {
                //         $sql="SELECT * FROM `profile` WHERE `e-mail`='$email'";
                //         $lp=mysqli_query($conn,$sql);
                //         $y=mysqli_fetch_assoc($lp);
                //         if(mysqli_num_rows($lp)==1)
                //         {
                //             if(password_verify($password,$r['password']))
                //             {
                //                 $_SESSION["e-mail"]=$r['e-mail'];
                //                 header("location:http://localhost/php/Css/home.php");
                //             }
                //             else
                //             {
                //                 $pErr="**invalid password";
                //                 echo $pErr;     
                            
                //             }
                //         }
                //         else
                //         {
                        
                //             if(password_verify($password,$r['password']))
                //             {
                //                 $_SESSION["name"]=$r['name'];
                //                 $_SESSION["e-mail"]=$r['e-mail'];
                //                 if(isset($_SESSION['e-mail']))
                //                 {
                //                     header("location:http://localhost/php/Css/home3.php");
                //                 }
                //             }        
                //             else
                //             {
                //                 $pErr="**invalid password";
                //                 echo $pErr;     
                              
                //             }
                //         }
                    
                //     }
                }
                else
                {
                    echo "**invalid e-mail";
                }
            }
        ?>
        <div class="signup">
            <a href="reg.php" style="float:center">Register Here</a>
        </div>
        </div>
        </body>
</html>