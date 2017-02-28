<html>
<head>
    <title>Register</title>
    
    <style> 
    #para1 {
    text-align: center;
    color: green;
    background-color: lightblue;
    }
    </style>
</head>
 
<body id="para1">
    <a href="index.php">Home</a> <br />
    <?php
    include("connection.php");
 
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $eemail = $_POST['eemail'];
        $dob = $_POST['dob'];
        $hobbies = $_POST['hobbies']
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pass = $_POST['password'];
 
        if($user == "" || $pass == "" || $name == "" || $eemail == "")  || $dob == ""|| $hobbies == ""|| $city == "" || $state == ""{
            echo "All fields should be filled. Either one or many fields are empty.";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO login(name,lname, eemail, dob, hobbies, city, state,  password) VALUES('$name', 'lname', '$eemail', '$dob', $hobbies','$city' , '$state',  md5('$password'))")
            or die("Could not execute the insert query.");
            
            echo "Registration successfully";
            echo "<br/>";
            echo "<a href='login.php'>Login</a>";
        }
    } else {
?>
        <p><font size="+2">Register</font></p>
        <form name="form1" method="post" action="">
            <table width="75%" border="0">
                <tr> 
                    <td width="10%">First Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td width="10%">Last Name</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                
                <tr> 
                    <td>Email</td>
                    <td><input type="email" name="eemail"></td>
                </tr> 
                <tr> 
                    <td width="10%">Date Of Birth</td>
                    <td><input type="date" name="dob"></td>
                </tr>     
                <tr> 
                    <td width="10%">Hobbies</td>
                    <td><input type="text" name="hobbies"></td>
                </tr>   
                <tr> 
                    <td width="10%">City</td>
                    <td><input type="text" name="hobbies"></td>
                </tr> 
                <tr> 
                    <td width="10%">City</td>
                    <td><input type="text" name="city"></td>
                </tr> 
            <tr> 
                  <!--  <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr> */
                <tr>  -->
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr> 
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>