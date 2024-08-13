<?php
include_once 'dbc.php';  // Include your database connection code

if (isset($_POST['Submit'])) {
    $UID = $_POST['ID'];
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $Pass = $_POST['password'];
    $Subject = $_POST['subject'];

    $sql = "INSERT INTO contacttable (`UID`, `Full_Name`, `Email`, `Password`, `Subject`) 
            VALUES ('$UID', '$fullName', '$email', '$Pass', '$Subject')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("Location: #?signup=success");
        exit(); // Add exit to stop further execution
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="contactuscss/concs.css">

</head>
<body>
    <h1 class="h1">GARDEAN INSURENCE</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">About us</a>
        <a href="#">Help & support</a>
        <a href="#">Contact</a>
        <a href="#">VehicleRegistration</a>
    </nav>
    <!--navigation bar-->

    <main>
        <h1 class="h2">Contact Us</h1>
        <p class="p1">If you want to know more details about our survices or you want to get help in this portel you can contact our agent in hear. </p>

        <section class="s1">
            <div class="profile-box">
                <img src="contactimg/map.jpeg" alt="map" class="img">
                
            </div>
            <form>
            <div class="profile-box2">
                <div class="registration-form">
                    <h1>Drop a E-mail</h1>
                    <from action="insert.php" method="post">
                    <input type="hidden" name="ID" placeholder="Full Name">
                        <p>User ID</p>
                        <input type="text" name="ID" placeholder="Full Name">
                        <p>Full Name:</p>
                        <input type="text" name="fullname" placeholder="Use Name">
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="E-mail">
                        <p>Password:</p>
                        <input type="password" name="password" placeholder="Password">
                        <p>Subject:</p>
                        <input type="subject" name="subject" placeholder="Subject">
                        <button type="sub" name="Submit" >Submit</button>
                    </from>

                </div>
            </div>    
            </form>

            <div class="profile-box3">
                <div class="registration-form">
                    <h4>Hot Line :777888</h4>
                    
                </div>

            </div>
       
            
        </section>  
         
    </main>

    <!--footer is hear -->
    <footer>
        <p>Copyright 2023 External Navigation Bar</p>
    </footer>
    
</body>
</html>

