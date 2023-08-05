<?php
//Start the session.
session_start();
if (isset($_SESSION['user'])) header('location: dashboard.php');

$error_message = '';

if ($_POST) {
  include('database/connection.php');

  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = 'SELECT * FROM users WHERE users.username="' . $username . '" AND users.password="' . $password . '" LIMIT 1';
  $stmt = $conn->prepare($query);
  $stmt->execute();



  if ($stmt->rowCount() > 0) {
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetchAll()[0];
    $_SESSION['user'] = $user;

    header('Location: dashboard.php');
  } else $error_message = 'Please make sure that username and password are correct!';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial scale = 1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <title>INVENTORY MANAGEMENT SYSTEM</title>

  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body id="loginBody">
  <?php
  if (!empty($error_message)) {
  ?>
    <div class="errorMessage">
      <p><strong> ERROR: </strong> </p><?= $error_message ?> </p>
    </div>
  <?php } ?>
  <div class="container">

    <br />
    <br />
    <div class="loginHeader">
    <h1>INVENTORY PROCESS SYSTEM</h1>
<br>
      <b><h2> Tata  </b>Communications</h2>
      <br>
      <h3>Transformation Services</h3>
    </div>
    <div class="loginBody">
      <form action="login.php" method="POST">
        <div class="loginInputsContainer">
          <label for="">Username</label>
          <input placeholder="Username" name="username" type="text" />
        </div>

        <div class="loginInputsContainer">
          <label for="">Password</label>
          <input placeholder="Password" name="password" type="password" />
        </div>

        <div class="loginButtonContainer">
          <button>Login</button>
        </div>
      </form>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
</body>

</html>