<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="./css-patient/navbar.css">
  <link rel="stylesheet" href="./css-patient/style1.css">
</head>

<body>

  <?php

  require '../Controller/patient_regCheck.php';

  ?>
  <header>
    <nav>
      <div class="logo"><img src="./images/logo.png" alt=""></div>
      <ul>
        <li class="nav-link"><a href="index.php">Home</a></li>
        <li class="nav-link"><a href="">About</a></li>
        <li class="nav-link"><a href="">Contact</a></li>
        <li><button class="btn sign-up"><a href="./all_signUp.php">Sign Up</a></button></li>
        <li><button class="btn log-in"><a href="./all_login.php">Login</a></button></li>
      </ul>
    </nav>
  </header>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Registration</h2>
    <label for="">Name:</label>
    <input type="text" name="name">
    <span class="err-msg2"> <?php echo $nameErr; ?></span>
    <!-- <br><br> -->
    <label for="">E-mail:</label>
    <input type="email" name="email">
    <span class="err-msg2"> <?php echo $emailErr; ?></span>
    <!-- <br><br> -->
    <label for="">Password:</label>
    <input type="password" name="pass">
    <span class="err-msg2"> <?php echo $passErr; ?></span>
    <!-- <br><br> -->
    <label for="">Address:</label>
    <input type="text" name="address">
    <span class="err-msg2"> <?php echo $addressErr; ?></span>
    <!-- <br><br> -->
    <label for="">Date of Birth:</label>
    <input type="date" name="dob">
    <span class="err-msg2"> <?php echo $dobErr; ?></span>
    <!-- <br><br> -->
    <label for=""> Gender:</label>
    <div>
      <input class="radio" type="radio" name="gender" value="female">Female
      <input class="radio" type="radio" name="gender" value="male">Male
      <input class="radio" type="radio" name="gender" value="other">Other
    </div>
    <span class="err-msg2"> <?php echo $genderErr; ?></span>
    <!-- <br><br> -->
    <input class="btn-sub" type="submit" name="submit" value="Submit">

    <div>
      <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
    </div>
  </form>





</body>

</html>