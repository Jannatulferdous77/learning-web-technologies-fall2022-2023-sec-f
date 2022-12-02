<?php
if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
     {
         echo "Must be filled all info...";
     }
     else if($_GET['err'] == 'exist')
     {
         echo "The username or email are already exist.....";
     }

    else if($_GET['err'] == 'incorrect')
    {
        echo "Password and Confirm password must be same...";
    }

    else if($_GET['err'] == 'invalidpass')
    {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
}


?>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="..assect/css/reg.css"> 
</head>
<body>
<center>
<form action="../controllers/regC.php" method ="post">
        <table border="3px">
          <div class="box">
            <div class="title0">
            Railway E-ticket Service
            </div>
            <div>
                <a href="home.php">Home</a> 
                    <a href="login.php">Login</a> 
                    <a href="reg.php">Registration</a>
            </div>
          </div>
                 
            <tr>
                <td colspan=2 align="center">
                    
                        <table>
                            <div class="box">
                            <div class="title">Name </div>
                        <div class="inputBox">
                             <input type="text" name="name" size="50" class="inputBox1">
                        </div>
                        </div>
                        <div class="box">
                         <div class="title">
                            Email
                         </div>
                        <div class="inputBox">
                          <input type="email" name="email"  size="50" class="inputBox1">
                        </div>
                        </div>
                            
                        <div class="box">
                         <div class="title1">
                            Username 
                         </div>
                        <div class="inputBox">
                          <input type="text" name="username" size="50" class="inputBox1" >
                        </div>
                        </div>


                        <div class="box">
                         <div class="title2">
                             Password 
                         </div>
                        <div class="inputBox">
                          <input type="password" name="password" size="50" class="inputBox1">
                        </div>
                        </div>
                          
                        
                        <div class="box">
                         <div class="title3">
                             Confirm Password 
                         </div>
                        <div class="inputBox">
                          <input type="password" name="ConfirmPassword" size="50" class="inputBox1">
                        </div>
                        </div>
               
                        </table>
                        <div class="box1">
                            <fieldset class="box2">
                            <legend align="center" class="title4">Gender</legend>
                            <input type="radio" name="gender" value="male"/> Male 
                            <input type="radio" name="gender" value="female"/> Female 
                            <input type="radio" name="gender" value="other"/> Other
                            </fieldset>
                        </div>
                        <div class="box1">
                        <fieldset class="box2">
                            <legend  align="center" class="title4">Date of Birth</legend>
                            <input type="date" name="dob"> 
                        </fieldset>
                        </div>
                        
                        <br>
                        <input type="submit" name="btn" value="Submit"/>
                        <input type="reset" name="reset" placeholder="Reset">
                    
             
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>