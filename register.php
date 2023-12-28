<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>ลงทะเบียนสมาชิก</h2>
  <form action="register.php">
    <div class="mb-3 mt-3">
      <label for="email">Usersname:</label>
      <input type="usersname" class="form-control" id="usersname" placeholder="Enter usersname" name="usersname">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Picture:</label>
      <input type="pictur" class="form-control" id="pic" placeholder="Enter picture" name="pic">
    </div>
    <div class="mb-3">
      <label for="pic">Status:</label>
      <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
    //1.เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect("localhost", "root", "", "kim1");
    if (!$conn) { 
        echo "database not connect"; 
    }

    //2.เก็บค่าจากฟอร์มเข้าตัวแปร
    $usersname = $_GET['usersname']; 
    $pswd = $_GET['pswd']; 
    $email = $_GET['email']; 
    $pic = $_GET['pic']; 
    $status = $_GET['status']; 

    $sql = "INSERT INTO users VALUES('', '$usersname', '$pswd', '$email', '$pic', '$status')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "insert ok";
    } else {
        echo "error insert";
    }
?>

</body>
</html>