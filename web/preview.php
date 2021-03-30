<?php
  include "function.php";
  $connect = connectdb();

    $sql = "SELECT * FROM account";
    if( isset($_GET['search']) ){
        if(isset($_GET['taskOption']) ){
            $selectOption = mysqli_real_escape_string($connect, htmlspecialchars($_GET['taskOption']));
        }
        $name = mysqli_real_escape_string($connect, htmlspecialchars($_GET['search']));
        $sql = "SELECT * FROM account WHERE $selectOption ='$name'";
    }
    $result = $connect->query($sql);
      //////////////////////////////////////////
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
    <script src="sort-table.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
      function deleteAccount(id){
        if(confirm("Are you sure to delete?")){
          window.location = 'deleteAccount.php?uid=' + id;
        }
      }
    </script>
</head>

<body>
    <div class="bg-container">
        <div class="topnav">
            <a class="returnbtn" href="index.php">Return</a>
        </div>
        <h1 class="font-effect-fire">TABLE PREVIEW</h1>
        <div class="search-container">
            <form action="" method="GET" class="searchform" style="max-width:85%">
                <input id="Gosearch" type="text" placeholder="Search.." name="search">
                <select name="taskOption" id="entityID">
                    <option value="id">by ID</option>
                    <option value="firstname">by First Name</option>
                    <option value="lastname">by Last Name</option>
                    <option value="age">by Age</option>
                    <option value="email">by Email</option>
                    <option value="address">by Address</option>
                    <option value="country">by Country</option>
                    <option value="description">by Description</option>
                </select>
                <button class="searchbtn" type="submit" name="searchAccount"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="table-container">
            <table id="customers">
            <thead>
                <tr>
                    <th onclick="sortTable1(this)">ID</th>
                    <th onclick="sortTable1(this)">First Name</th>
                    <th onclick="sortTable1(this)">Last Name</th>
                    <th onclick="sortTable1(this)">Age</th>
                    <th onclick="sortTable1(this)">Email</th>
                    <th onclick="sortTable1(this)">Address</th>
                    <th onclick="sortTable1(this)">Country</th>
                    <th onclick="sortTable1(this)">Description</th>
                    <th onclick="sortTable1(this)">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    if (isset($_GET['search']) && !$_GET['search']){
                    $sql = "SELECT * FROM account";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                        <td><a href="editAccount.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="#" onclick="javascript: deleteAccount(<?php echo $row['id']; ?>)">Delete</a></td>
                        </tr>
                <?php }} else {
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                        <td><a href="editAccount.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="#" onclick="javascript: deleteAccount(<?php echo $row['id']; ?>)">Delete</a></td>
                        </tr>
                <?php }}?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>