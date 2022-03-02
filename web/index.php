<?php
  include "function.php";
  $connect = connectdb();

  if(isset($_POST['newAccount'])){
    $account_id = $_POST['id'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $age = $_POST['age'];
    // $birthdate = date('Y-m-d H:i:s', strtotime($_POST['birthdate']));
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $description = $_POST['description'];

    $data = array(
        'id' => $name,
        'firstName' => $first_name,
        'lastName' => $last_name,
        'age' => $age,
        'email' => $email,
        'address' => $address,
        'country' => $country,
        'description' => $description,
    );

    $add = insert('account', $data);

    // $sql2 = "INSERT INTO enrollment(student_id) VALUES ('$student_id')";

  if ($add) {
      header("location: index.php");
  } else {
      echo "<script>alert('An error occured!');</scipt>";
  }
  }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire|Sofia&effect=neon|outline|emboss|shadow-multiple">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">
      // wait for the DOM to be loaded
      $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function
            $('#myForm').ajaxForm(function() {
                alert("Form Submitted!");
            });
        });
    </script>
</head>

<body>
    <div class="bg-container">
        <h1 class="font-effect-fire">BASIC FORM</h1>
        <div class="sub-container">
            <div class="child-container">
                <div class="form-container">
                    <form action="index.php" method="post" id="myForm">
                        <!-- // Label "For" and Input "ID" must be the same -->
                        <label for="idNum"><i class="fa fa-user"></i>  ID Number</label>
                        <input type="text" id="idNum" name="id" placeholder="Your ID.." class="input-field" required>

                        <label for="fname"><i class="fa fa-user"></i>  First Name</label>
                        <input type="text" id="fname" name="firstName" placeholder="Your name.." class="input-field" required>

                        <label for="lname"><i class="fa fa-user"></i>  Last Name</label>
                        <input type="text" id="lname" name="lastName" placeholder="Your last name.." class="input-field" required>

                        <label for="uAge"><i class="fa fa-user"></i>  Age</label>
                        <input type="text" id="uAge" name="age" placeholder="Your age.." class="input-field" required>

                        <label for="uEmail"><i class="fa fa-envelope"></i>  Email</label>
                        <input type="text" id="uEmail" name="email" placeholder="john@example.com" class="input-field" required>

                        <label for="adr"><i class="fa fa-address-card-o"></i>  Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>

                        <label for="country"><i class="fa fa-institution"></i> Country</label>
                        <select id="country" name="country">
                                <option value="philippines">Philippines</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>

                        <label for="description">Description</label>
                        <textarea type="text" id="description" name="description" placeholder="insert comment here..."></textarea>
                        <input type="submit" value="Add" name="newAccount" class="button">
                        <a class="previewbtn" href="preview.php">Preview</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>