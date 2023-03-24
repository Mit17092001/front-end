<html>
    <head>
        <link href="favicon.png" rel="icon">
        <style>
            body
            {
                font-family: Arial, Helvetica, sans-serif;
            }
            form
            {
                border-style: ridge;
                border-width:10px;
                border-color:rgb(230,240,250);
                width:300px;
                margin:auto;
                margin-top:50px;  
                padding-top:10px;
                padding-left:10px; 
                padding-bottom:30px;
                padding-right:10px;
                background-color: rgb(255,252,247);
                height: 400px;
            }
            table input, table select
            {
                width: 200px;
                height: 35px;
            }
            .field
            {
                width:100%;
                height:50px;
                margin-top:10px;
            }
            .field button
            {
                width:100%;
                height:100%;
                background-color:mediumseagreen;
                border-color: mediumseagreen;
                border-radius: 10px;
                border-style:solid;

            }
        </style>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Address</td><td>: <input type="text area" name="add" required></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        : <select name="city">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Surat">Surat</option>
                            <option value="vadodara">vadodara</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>pincode</td><td>: <input type="number" name="pin" required></td> 
                </tr>
                </table>
                <div class="field">
                    <button type="submit" name="submit">submit</button>
                </div>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $add=$_POST['add'];
                $city=$_POST['city'];
                $state= "Gujarat";
                $country="India";
                $pin=$_POST['pin'];
                header("location:http://localhost/php/myportfolio/ack.php");
            }
        ?>
    </body>
</html>