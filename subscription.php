<html>
    <head>
        <title>subscription</title>
    <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="faviconn.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <style>
            body
            {
                /* background-image: url("sub.jpg"); */
                font-family: "Inconsolata", monospace;
            }
            .box1
            {
                border-style: solid;
                border-color: black;
                border-width: 5px;
                /* background-color: rgb(223,223,223);/ */
                width: 27%;
                margin-left:4%;
                float: left;   
                border-top-left-radius: 90px;
                border-top-right-radius: 90px;
                height: 500px;
                position: relative;
                
            }
            .box2
            {
                border-style: solid;
                border-color: black;
                border-width: 5px;
                /* background-color: rgb(255,239,127); */
                width: 27%;
                margin-left:4%;
                float: left;   
                border-top-left-radius: 90px;
                border-top-right-radius: 90px;
                height:500px;
                position: relative;
            }
            .box3
            {
                border-style: solid;
                border-color: black;
                border-width: 5px;
                /* background-color:rgb(230,190,152); */
                width: 27%;
                margin-left:4%;
                height:500px;
                float: left;   
                border-top-left-radius: 90px;
                border-top-right-radius: 90px;
                position: relative;
            }
            h3
            {
                text-align:center;
                font-size:25px;
            }
            h1
            {
                text-align:center;
            }
            li
            {
                font-size:20px;
            }
            .container
            {
                weight: 100%;
            }
            .button
            {
                position:absolute;                
                bottom:30px;
                width:80%;
                height:50px;
                margin-left:10%;
                
            }

            .button .sub
            {
                width: 100%;
                height:100%;
                background-color: MediumSeaGreen;
            }
            .sub:hover
            {
                cursor: pointer;
            }
            .prize
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>To get details of worker first you should take subscription of our website.</h1>
        <div class="container">
            <div class="box1">
                <h3>Silver</h3>
                <ul>
                    <li>Get contact details of 15 professionals</li><br>
                    <li>professional available in 90 min</li><br>
                    <li>Get well skilled professionals</li><br>
                    <li>Life time access</li><br>
                </ul> 
                <div class="prize">
                    <span style="font-size:25px; color:red">₹199/</span><span>15 profile</span>
                </div>
                <div class="button">
                    <a href="http://localhost/php/stripe_payment_getway_php/silver.php" style="text-decoration:none;color:black"><button class="sub">Get subscription</button></a>
                </div>
            </div>
            <div class="box2">
                <h3>Gold</h3>
                
                <ul>
                    <li>Get contact details of 30 professionals</li><br>
                    <li>professional available in 30 min</li><br>
                    <li>Get well skilled professionals</li><br>
                    <li>Life time access</li><br>   
                </ul>
                <div class="prize">
                    <span style="font-size:25px; color:red">₹299/</span><span>30 profile</span>
                </div>
                
                <div class="button">
                    <a href="http://localhost/php/stripe_payment_getway_php/gold.php" style="text-decoration:none;color:black"><button class="sub">Get subscription</button></a>
                </div>
            </div>
            <div class="box3">
                <h3>Bronze</h3>
                <ul>
                    <li>Get contact details of 5 professionals</li><br>
                    <li>professional available in 3 Hr</li><br>
                    <li>Get well skilled professionals</li><br>
                    <li>Life time access</li><br>
                </ul>
                <div class="prize">
                    <span style="font-size:25px; color:red">₹99/</span><span>5 profile</span>
                </div>
                <div class="button">
                    <a href="http://localhost/php/stripe_payment_getway_php/bronze.php" style="text-decoration:none;color:black"><button class="sub">Get subscription</button></a>
                </div>
            </div>
        </div>
    </body>    
</html>
    