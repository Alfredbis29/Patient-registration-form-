<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" type="" href="style.css">
</head>
<body>

        <div class="container">

            <style>
                .header
                {
                    color: white;
                    padding: 20px;
                    top: 30px;
                }
                .header h1
                {
                    color: white;
                    text-align: center;
                }
                
            </style>
                <div class="row">
                    <div class="header">
                        <h1 style="text-align: center;">PATIENT REGISTRATION FORM</h1>
                    </div>
                </div>

                <div class="row">
                    <form class="form-responsive col-md-12" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">First Name</label> -->
                            <input type="text" class="form-control"name="fname" placeholder="First Name" required> 
                            </div>
                            <div class="form-group col-md-6">
                            <!-- <label for="inputPassword4">Password</label> -->
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputAddress">Address</label> -->
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            
                            
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputAddress2">Address 2</label> -->
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <!-- <label for="inputCity">City</label> -->
                            <input class="form-control" type="text" name="country" placeholder="Country" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="city" placeholder="City" required>
                             
                            </div>
                            <div class="form-group col-md-4">
                            <!-- <label for="inputZip">Zip</label> -->
                            <input class="form-control" type="text" name="address" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">First Name</label> -->
                            <input class="form-control" type="text" name="age" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                            <!-- <label for="inputPassword4">Password</label> -->
                            <input class="form-control" type="date" name="date" placeholder="Birth Date" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">First Name</label> -->
                            <input class="form-control" type="text" name="contact" maxlength="10" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group col-md-6">
                            <!-- <label for="inputPassword4">Password</label> -->
                            <select class="form-control" name="gender" id="" placeholder = "Select your Gender">
                                                    <option disabled selected>Select your Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>other</option>
                                                </select>   
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">First Name</label> -->
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-6">
                            <!-- <label for="inputPassword4">Password</label> -->
                            <input class="form-control" type="password" name="cf_pass" placeholder="Confirm your Password" required>
                    
                            </div>
                        </div>
                        <button id="submit" type="submit" name="register" class="btn btn-primary">Register Patient</button>
                        </form>
                </div>
                <br>
                <div class="row">
                    <div class="table">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Age</th>
                                                <th>Birth date</th>
                                                <th>Phone Number</th>
                                                <th>Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 0; 
                                                $query = "SELECT * FROM patients";
                                                $run = mysqli_query($con,$query);
                                                while($row = mysqli_fetch_array($run))
                                                {
                                                    $f_name = $row['first_name'];
                                                    $l_name = $row['last_name'];
                                                    $p_email = $row['email'];
                                                    $p_address = $row['address'];
                                                    $p_country = $row['country'];
                                                    $p_city = $row['city'];
                                                    $p_age = $row['age'];
                                                    $date = $row['birth_date'];
                                                    $contact = $row['phone_number'];
                                                    $p_gender = $row['gender'];

                                                    $i++;

                                                

                                            ?>
                                            <tr>
                                            <th><?php echo $i; ?></th>
                                            <td><?php echo $f_name; ?> </td>
                                            <td><?php echo $l_name ;?></td>
                                            <td><?php echo $p_email ;?></td>
                                            <td><?php echo $p_address ;?></td>
                                            <td><?php echo $p_country;?></td>
                                            <td><?php echo $p_city;?></td>
                                            <td><?php echo $p_age;?></td>
                                            <td><?php echo $date;?></td>
                                            <td><?php echo $contact;?></td>
                                            <td><?php echo $p_gender?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
                
        </div>

                


</body>
</html>
<?php 

                    if(isset($_POST['register']))
                    {
                        $first_name = $_POST['fname'];
                        $last_name = $_POST['lname'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $country = $_POST['country'];
                        $city = $_POST['city'];
                        $age = $_POST['age'];
                        $birth_date = $_POST['date'];
                        $phone_number = $_POST['contact'];
                        $gender = $_POST['gender'];
                        $password = $_POST['password'];
                        $cn_pass = $_POST['cf_pass'];

                        if($password == $cn_pass)
                        {
                            $insert_patient = "INSERT INTO patients(first_name,last_name,email,address,country,city,age,birth_date,phone_number,gender,password)
                                            VALUES('$first_name','$last_name','$email','$address','$country','$city','$age','$birth_date','$phone_number','$gender','$password')";
                        
                            $run_patient = mysqli_query($con,$insert_patient);
                            // $check = mysqli_num_rows($run_patient);
                            if($run_patient)
                            {
                                echo "<script>alert('Patient added')</script>";
                                echo "<script>window.open('index.php','_self')</script>";
                            }
                        }

                        
                        else
                        {
                            echo "<script>alert('Password not Corresponding')</script>";
                        }
                    }
                
                ?>
