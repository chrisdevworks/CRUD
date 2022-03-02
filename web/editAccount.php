<?php 
  include "function.php";
  $connect = connectdb();

  if(isset($_GET['id'])){
    // header("Location: index.php");
    $id = $_GET['id'];
    $account = getdata('account', $id);
  }

  if(isset($_POST['editAccount'])){
    $id = $_GET['id'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $age = $_POST['age'];
    // $birthdate = date('Y-m-d H:i:s', strtotime($_POST['birthdate']));
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $data = array(
        'firstName' => $first_name,
        'lastName' => $last_name,
        'age' => $age,
        'email' => $email,
        'address' => $address,
        'country' => $country,
        'description' => $description,
    );

    $update = update('account', $id, $data);

    if($update){
      header("location: preview.php");
    }else {
        echo "<script>alert('An error occurred!');</scipt>";
    }
    }

    
    if (isset($_GET['id']) != ''){
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire|Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div class="bg-container">
        <div class="container-fluid">
            <div class="row">
                <div class="topnav col-sm">
                    <a class="returnbtn" href="index.php">Home</a>
                </div>
                <div class="topnav col-sm">
                    <a class="returnbtn" href="preview.php">Preview</a>
                </div>
            </div>
        </div>
        <h1 class="font-effect-fire">EDIT FORM</h1>
        <div class="sub-container">
            <div class="child-container">
                <div class="form-container">
                    <?php if($account): ?>
                    <form action="" method="post">
                        <!-- // Label "For" and Input "ID" must be the same -->
                        <label for="idNum"><i class="fa fa-user"></i> ID Number</label>
                        <input type="text" id="idNum" name="id" placeholder="Your ID.." class="input-field"
                            value="<?php echo $account['id']; ?>">

                        <label for="fname"><i class="fa fa-user"></i> First Name</label>
                        <input type="text" id="fname" name="firstName" placeholder="Your name.." class="input-field"
                            value="<?php echo $account['firstName']; ?>">

                        <label for="lname"><i class="fa fa-user"></i> Last Name</label>
                        <input type="text" id="lname" name="lastName" placeholder="Your last name.." class="input-field"
                            value="<?php echo $account['lastName']; ?>">

                        <label for="uAge"><i class="fa fa-user"></i> Age</label>
                        <input type="text" id="uAge" name="age" placeholder="Your age.." class="input-field"
                            value="<?php echo $account['age']; ?>">

                        <label for="uEmail"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="uEmail" name="email" placeholder="john@example.com" class="input-field"
                            value="<?php echo $account['email']; ?>">


                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"
                            value="<?php echo $account['address']; ?>">

                        <label for="country"><i class="fa fa-institution"></i> Country</label>
                        <select id="country" name="country">
                            <option value="philippines"
                                <?php if($account['country'] == "Philippines"){ echo 'selected="selected"'; } ?>>
                                Philippines</option>
                            <option value="canada"
                                <?php if($account['country'] == "Canada"){ echo 'selected="selected"'; } ?>>Canada
                            </option>
                            <option value="usa"
                                <?php if($account['country'] == "USA"){ echo 'selected="selected"'; } ?>>USA</option>
                        </select>

                        <label for="description">Description</label>
                        <textarea type="text" id="description" name="description"
                            placeholder="insert comment here..."><?php echo $account['description']; ?></textarea>
                        <input type="submit" value="Save" name="editAccount" class="button">
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>