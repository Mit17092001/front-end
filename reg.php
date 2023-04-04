<html>
    <head>
        
        <link href="faviconn.png" rel="icon">
        <style>
             body 
            {
                font-family: "Inconsolata", monospace;
                background-size:cover;
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

        </style>
    </head>
    <body>
        <div class="body">
            <a href="reg.php" style="float:left"><u>Register</u></a>
            <br>
            <br>        
            <form method='post'>
                <div class="field">
                    <input type="text" name="name" placeholder="Username" required>
                </div>
                <div class="field">
                    <input type="text" name="e-mail" placeholder="e-mail" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <div class="field">
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
            <?php
                include('conf.php');
                if(isset($_POST['submit']))
                {
                    $name=$_POST['name'];
                    $email=$_POST['e-mail'];
                    $password=$_POST['password'];
                    $role=3;
                    $hql="SELECT * from `user` where `e-mail`='$email';";
                    $op=mysqli_query($conn,$hql);
                    if(mysqli_num_rows($op)==0)
                    {
                        $sql = "INSERT INTO `user`(`name`,  `e-mail`, `password`,`Role` ) VALUES ('$name','$email','$password','$role')";
                        $result = $conn->query($sql);
                        //$r=mysqli_fetch_assoc($result);  
                        if ($result == TRUE) 
                        {
                            header("location:http://localhost/php/myportfolio/index.php");
                        }
                        $conn->close(); 
                    }
                    else
                    {
                        echo "<br>";
                        echo "Email already exist. Go to login page.";
                    }
                } 
            ?>
            <div class="login">
                <a href="index.php">Login Here</a>
            </div>
        </div>
    </body>
</html>