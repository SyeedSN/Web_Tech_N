<?php
  $UnameErr= $nameErr  = $genderErr = $dobErr= $addressErr= $emailrr= $passErr = "";
  $Uname = $name = $gender = $dob = $address = $email=  $pass =   "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Uname"])) {
		$UnameErr = "UserName is required";
	  } else {
		  $Uname = $_POST["Uname"];
		  echo $Uname;
	  }
	if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
	  echo $name;
    }
	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	  } else {
		$gender = $_POST["gender"];
		echo $gender;
	  }
	if (empty($_POST["dob"])) {
		$dobErr = "Date of Birth is required";
	  } else {
		$dob = $_POST["dob"];
	 }
	if (empty($_POST["address"])) {
		$addressErr = "Address is required";
	  } else {
		$address= $_POST["address"];
	  }
    if (empty($_POST["email"])) {
      $emailrr = "email is required";
    } else {
      $email= $_POST["email"];
	  echo $email;
	}
    
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $pass = $_POST["pass"];
	  echo $pass;
	}


    
  }



  if ($Uname != "" && $name != "" && $gender != ""&& $email!= "" && $pass != "" ) {
	  //echo "hello";
    $jsonData = file_get_contents('../Model/admindata.json');
    $array_data = json_decode($jsonData, true);
    $input = array(
	  "Uname"        =>    $Uname,
      "name"         =>    $name,
	  "gender"       =>    $gender,
	  "dob"          =>    $dob,
      "address"      =>    $address,
      "email"        =>    $email,
      "pass"         =>    $pass,
      

    );

    $array_data[] = $input;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/admindata.json', $final_data);
    header("Location:Admin_login.php");
    echo $final_data;
  
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="e_clinic";
    
    $conn=new mysqli($serverName,$userName,$password,$dbName);
    if ($conn->connect_error)
    {
        die("Conncetion failed: ".$conn->connect_error);
    }
    else
    {
      /*
        echo "Successfully connection Created"."<br>";
        $q="CREATE TABLE Admin (id INT (4) AUTO_INCREMENT PRIMARY KEY,uname VARCHAR(30) NOT NULL,name VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,dob DATENOT NULL,Gender VARCHAR(30) NOT NULL, Address VARCHAR(100) NOT NULL,Password VARCHAR(30) NOT NULL)";
        $result=$conn->query($q);
        if($result)
            {
                echo"Table Succesfully created ";
            }
             
         else
            {    
                echo "Error occured";
            }
            */
        //echo "Successfully connection created!"."<br/>";
    //$q="INSERT INTO teacher(id,name,email)VALUES(".$id.",".$name.",".$email.")";
    
        $q="INSERT INTO RegisterAdmin (username,name,email,dob,gender,address,password) VALUES('".$Uname."','".$name."','".$email."','".$dob."','".$gender."','".$address."','".$pass."')";
    //echo $q;
        $result=$conn->query($q);
        if($result)
            echo " successfully inserted";
        else
            echo "Error occured!";
    }
    $conn->close();
  
  
  }
  //Database connection

  



  ?>