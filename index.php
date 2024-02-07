<?php
error_reporting(0);
define("DB_HOST","localhost");
define("DB_NAME","network_projectdb");
define("DB_USER","root");
define("DB_PASS","");

if(isset($_POST['submits'])){
    $username=$_POST['username'];
    $emails=$_POST['email'];
    $passwords=$_POST['password'];
    $phoneno=$_POST['phone'];
    $confipass=$_POST['conpass'];
    $dates=$_POST['date'];
    $genters=$_POST['genter'];

try {
    insetdata($username,$emails,$passwords,$phoneno,$confipass,$dates,$genters);
} catch (Exception $th) {
    echo 'Error '. $th->getMessage();
}
}
function dbconnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    return $db;
}

function insetdata($usernameone,$emailone , $passwordone,$phonenoone,$confipassone,$datesone,$gentersone){
    $cleckpass = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[@!#$%&])(?=.*\d)/',$passwordone);
    
   echo $cleckpass ? "<script>window.alert('Data Is True')</script>" : "<script>window.alert('Data Is Not True)</script>";
    if($cleckpass == true){
        $db=dbconnect();
        $pass1 =md5($passwordone);
    $qry="INSERT INTO regusers (username,email,password,phone,confirm,date,genter) 
    VALUES ('$usernameone','$emailone' , '$pass1','$phonenoone','$confipassone','$datesone','$gentersone')";
    $cleckpass = mysqli_query($db,$qry);
    echo $cleckpass ? "<script>window.alert('Account Created Successfully')</script>" : "<script>window.alert('Account Created Not Successfully')</script>";
        
    }
    else {
       throw new Excepstion("Error Processing Request", 1);
    }
    
    
};
// login
if(isset($_POST['loginsub'])){
    loginfun();
    
    
}


// Check if the connection was successful
if (!dbconnect()) {
    die("Connection failed: " . mysqli_connect_error());
}

function loginfun(){
    // Retrieve form data
$emails = mysqli_real_escape_string(dbconnect(), $_POST['email']);
$password = mysqli_real_escape_string(dbconnect(), $_POST['pass']);
$password = md5($password);
// Construct and execute the SQL query
$sql = "SELECT * FROM regusers WHERE email = '$emails' AND password = '$password'";

$result = mysqli_query(dbconnect(), $sql);

if (mysqli_num_rows($result) >= 1) {
   
    echo "<script>window.alert('User account Login Successful.')</script>";
    header("LOCATION:twofactor.php");
} else {
    echo "<script>window.alert('Invalid username or password.')</script>";
    
    
}

// Close the database connection
mysqli_close(dbconnect());
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <title>Nicholas</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <img class="ddimg" src="Full stack PHP developer - 480x480.png" alt="">
    <div class="stronepass">
        <div class="box1 bg-white">
            <div><img class="steiicon" src="settings.png" alt="">

                Random Password
                <div class="display">
                    <input type="text" id="password" class="geninput bg-success">
                    <img class="copybtn" src="images/copy.png" alt="" />

                </div>
                <button class="btngen bg-success text-white btna">Generator</button>
            </div>

        </div>


    </div>
    <form class="formclass" action="index.php" method="post">
        <div class="lableclass">
            <p>NICHOLAS</p>

        </div>
        <div class="reglable">
            <p class="regtitle">Create Account</p>
        </div>

        <div class="inputbox">

            <input name="username" class="usernameinput  " placeholder="Username" type="text"><br>
            <input name="email" class="emailinput" placeholder="Email" type="email"><br>
            <input name="password" class="passwordclass" placeholder="Password" type="password">
            <br>
            <input type="text" class="phoneint" name="phone" placeholder="Phone No"><br>
            <input type="text" class="conpass" name="conpass" placeholder="Confirm Password"><br>
            <input type="date" class="dateint" name="date"><br>
            <p class="txtone">Genter :</p>
            <div class="genclass">

                <input type="radio" class="radiocls" name="genter" value="Male"> Male
                <input type="radio" class="radiocls" name="genter" value="Female"> Female
                <input type="radio" class="radiocls" name="genter" value="Other"> Other
            </div>
            <br>
            <div class="robox g-recaptcha" data-sitekey="6LezBFUpAAAAAGKKVQY-XYVJqneHmJDbx33Z2XX3"></div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto regbtnclass">
                <input name="submits" class="btn btn-success" type="submit">


            </div>



        </div>
    </form>




    <form class="formclass1" action="index.php" method="post">
        <div class="lableclass">


        </div>
        <div class="reglable">
            <p class="regtitle">Login</p>
        </div>

        <div class="inputbox">

            <input name="email" class="usernameinputlog" placeholder="Username" type="text"><br><br>
            <input name="pass" class="passinputlogin" placeholder="Password" type="password"><br>

            <br>

            <br>
            <div class="d-grid gap-2 col-6 mx-auto regbtnclass">
                <input type="submit" name="loginsub" class="btn btn-success logbtnone" value="Login"><br>



            </div>


        </div>
    </form>
    <div class="mainrl">
        <butto name="register" class="btnreg" type="button"><img class="regicon" src="images/edit.png" alt="">
            </button>

    </div>
    <script src="js/scripts.js"></script>

    <script src="js/main.js"></script>




</body>

</html>