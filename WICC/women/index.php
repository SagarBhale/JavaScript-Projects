
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
	<style>
		.forumm #span{
			display:inline-block;
			width:80%;
		}
		.forumm input{
			display:inline-block;
			width:65%;
		}
		body{
			background-image:url("comp.jpg");
			    background-repeat: no-repeat;
				background-width:100%;
				background-height:100%;
				background-size: cover;				
		}
		.container{
		background:white;
		margin-top:10px;
		border:1px solid black;
		border-radius:10px;
	}
	.container p{
		
	}
	.container h3{
		border-bottom:2px solid #c0c0c0;
		text-align:center;
		padding-bottom:7px;
	}


    nav{
  background:white;
  padding: 5px 40px;
}
nav ul{
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
nav ul li{
  padding: 15px 0;
  cursor: pointer;
}
nav ul li.items{
  position: relative;
  width: auto;
  margin: 0 16px;
  text-align: center;
  order: 3;
}
nav ul li.items:after{
  position: absolute;
  content: '';
  left: 0;
  bottom: 5px;
  height: 2px;
  width: 100%;
  background:#0877df;
  opacity: 0;
  transition: all 0.3s linear;
}
nav ul li.items:hover:after{
  opacity: 1;
  bottom: 8px;
}
nav ul li.logo{
  flex: 1;
  color: white;
  font-size: 23px;
  font-weight: 600;
  cursor: default;
  user-select: none;
}
nav ul li a{
  color: black;
  font-size: 18px;
  text-decoration: none;
  transition: .4s;
}
nav ul li:hover a{
  color: #555b62;
}
nav ul li i{
  font-size: 23px;
}
nav ul li.btn{
  display: none;
}
nav ul li.btn.hide i:before{
  content: '\f00d';
}
@media all and (max-width: 900px){
  nav{
    padding: 5px 30px;
  }
  nav ul li.items{
    width: 100%;
    display: none;
  }
  nav ul li.items.show{
    display: block;
  }
  nav ul li.btn{
    display: block;
  }
  nav ul li.items:hover{
    border-radius: 5px;
    box-shadow: inset 0 0 5px#0877df,
                inset 0 0 10px #0877df;
  }
  nav ul li.items:hover:after{
    opacity: 0;
  }
}




	</style>

</head>
<body>	
	<header>
        <nav>
            <ul>
                <li class="logo"><img src="https://sdbc.ac.in/wp-content/uploads/2022/06/Logo-SDBC-250x62.png"
                        alt="bansal logo" width="250" height="75"></li>
                <li class="items"><a href="home.html">Home</a></li>
                <li class="items"><a href="registration.html">Register Complaint</a></li>
                <li class="items"><a href="login.html">User Login</a></li>
                <li class="items"><a href="adminf.html">Admin</a></li>
                <li class="items"><a href="aboutUs.html">About</a></li>
                <li class="items"><a href="#">Contact</a></li>
                <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
        <!-- <div class="img"> -->
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMglkwPM5m8X-FDwCoob5Ac-XCudAuDds7sgi0rNws1v9Ru2lyulA9JaqDoxgL0MAkxyU&usqp=CAU" alt="" style="width: 100%;height: 500px;"> -->
        <!-- </div> -->
        <script>
            $(document).ready(function () {
                $('.btn').click(function () {
                    $('.items').toggleClass("show");
                    $('ul li').toggleClass("hide");
                });
            });
        </script>


    </header>
        
</body> 






<div class="container">
	<h3>User Registration</h3>
    <form onsubmit="myfun()" class="forumm" method="post" id="reg" action="index.php">

    <div id="span">First Name</div><input  class="form-control" type="text" name="fname" id="fname"><p id="chkfname" style="color:red;display:none;" >*Fill Your First Name</p><br />


    <div id="span">Last Name</div><input class="form-control" type="text" name="lname" id="lname"><p id="chkflname" style="color:red;display:none;" >*Fill Your Last Name</p><br />


    <div id="span">User Name</div><input class="form-control" type="text" name="lname" id="uname"> <p id="chkuname" style="color:red;display:none;" >*Fill Your User Name</p><br />


    <div id="span">Email</div> <input class="form-control" type="text" name="email" id="email"> <p id="chkemail" >*Fill Email</p><br />


    <div id="span">Phone Number</div><input class="form-control" type="text" name="phone" id="phone"> <p id="chkphone" >*Fill phone nubmer</p><br />


    <div id="span">Enrollment Number</div><input class="form-control" type="text" name="enroll" id="enroll"><br/>


    <div id="span">Branch And Year</div> <input class="form-control" type="text" name="bandy" id="bandy"><br/>


    <div id="span">Password</div> <input  class="form-control"type="text" name="pass" id="pass"><br/> 


    <hr /><button class="btn btn-danger"name="btn" type="submit" style="margin-left:33%;width:30%;">
		SIGN UP  <i style="font-size:16px" class="fa">&#xf054;</i></button>
</form>
			
            <hr /><button class="btn btn-light" onclick="window.location.reload()">Clear All</button>
            <a class="btn btn-light" href="userlogin1.html">Already SignUP!!Login here</a>
            <br /><hr />
</div>


	</body>
</html>



<?php
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "icc";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

@$fname=$_POST['fname'];

@$lname=$_POST['lname'];

@$uname=$_POST['uname'];

@$email=$_POST['email'];

@$phone=$_POST['phone'];

@$enroll=$_POST['enroll'];

@$bandy=$_POST['bandy'];

@$pass=$_POST['pass'];

@$cpass=$_POST['cpass'];

@$date=$_POST['F j, Y, g:i a'];


$sql = "INSERT INTO `userregistration` (`srno`, `fname`, `lname`, `uname`, `email`, `phone`, `enroll`, `bandy`, `pass`, `cpass`,`date`) 

VALUES (NULL,'$fname', '$lname', '$uname', '$email', '$phone', '$enroll', '$bandy', '$pass', '$cpass','$date')";



if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";
  
  } else {
  
    echo "Error: " . $sql . "<br>" . $conn->error;
  
  }
  
  $conn->close();
  
  ?>