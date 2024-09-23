



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
			width:30%;
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
        <!-- <div class="img"> -->
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMglkwPM5m8X-FDwCoob5Ac-XCudAuDds7sgi0rNws1v9Ru2lyulA9JaqDoxgL0MAkxyU&usqp=CAU" alt="" style="width: 100%;height: 500px;"> -->
        <!-- </div> -->

    <div class="container">
	<h3>User Registration</h3>
	<form onsubmit="myfun()" class="forumm" method="post" id="reg" action="reg.php">
			<div id="span">Name</div><input class="form-control" type="text" id="fname" name="fname"><p id="chkfname" style="color:red;display:none;" >*Fill Your Name</p><br />
			<div id="span">Username</div><input class="form-control" type="text" id="uname" name="username"><p id="chkuser" style="color:red;display:none;" >*Fill user Name</p><br />

			<div id="span">Email</div><input name="email" class="form-control" type="email" id="mail"><p id="chkmail"style="color:red;display:none;"  >*Fill Email</p><br />
			<div id="span">Phone Number</div><input class="form-control" type="text" id="pn" name="phone"><p id="chkpn" style="color:red;display:none;" >*Fill Phone Nubmer</p><br />
		
            <div id="span">Enrollment Number</div><input class="form-control" type="text" id="enroll" name="enroll"><p id="chkenroll"style="color:red;display:none;"  style="color:red;display:none;" >*Fill Enrollment Number</p><br />
            
            <div id="span">Branch And Year</div><input class="form-control" type="text" id="bandy" name="bandy"><p id="chkbandy"style="color:red;display:none;" style="color:red;display:none;"  >*Fill Branch and Year</p><br />
			

			
			<div id="span">Password</div><input class="form-control" type="password" id="pass"><br />
			<div id="span">Confirm Password</div><input name="pass" class="form-control" type="text" id="cpass">
		<hr /><button class="btn btn-danger" onclick="myfun()" name="btn" type="button" style="margin-left:33%;width:30%;">
		SIGN UP  <i style="font-size:16px" class="fa">&#xf054;</i></button>
	</form>
			
				<hr /><button class="btn btn-light" onclick="window.location.reload()">Clear All</button>
				<a class="btn btn-light" href="userlogin1.html">Already SignUP!!Login here</a>
				<br /><hr />
	</div>

	<script>

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function myfun()
	{
		var ch1=false,ch2=false,ch3=false,ch4=false,ch5=false,ch6=false;
		var uname=document.getElementById("uname").value;
		var chkuname=document.getElementById("chkuser");
		if(uname=="")
		{
			chkuname.style.display='inline-block';
		}
		else
		{
			ch6=true;
			chkuname.style.display='none';
		}
	
		var fname=document.getElementById("fname").value;
		var chkfname=document.getElementById("chkfname");
		var str=new RegExp(/[0-9]/);
		var forfname=str.test(fname);
		if(forfname==true)
		{
			chkfname.innerHTML="*Only alphabets allowed.";
			chkfname.style.display='inline-block';
		}
		else if(fname=="")
		{
			chkfname.innerHTML="*Fill First Name";
			chkfname.style.display='inline-block';
		}
		else
		{
			ch1=true;
			chkfname.style.display='none';
		}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////
		
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var mail=document.getElementById("enroll").value;
		var chkmail=document.getElementById("chkenroll");
		var formail =new RegExp(/^[0-9]+[A-Z]+[0-9]+$/);
		var cme=formail.test(enroll);
		if(cme!=true)
		{
			chkenroll.innerHTML="*Enter Correct enrollment(08xxCSxxyyzz)";
			chkenroll.style.display='inline-block';
		}
		else if(mail=="")
		{
			chkenroll.innerHTML="*Fill Enrollment No ";
			chkenroll.style.display='inline-block';
		}	
		else 
		{
			ch3=true;
			chkenroll.style.display='none';
		}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var pn=document.getElementById("pn").value;
		var chkpn=document.getElementById("chkpn");
		var forpn= new RegExp (/(^[0-9]{3})+([0-9]{8})+$/);
		var seeme=forpn.test(pn);
		if(seeme!=true)
		{
			chkpn.innerHTML="Enter Phone Number (0xxxyyyyyyy)";
			chkpn.style.display='inline-block';
		}else if(pn=="")
		{
			chkpn.innerHTML="*Fill Phone Number";
			chkpn.style.display='inline-block';
		}
		else 
		{
			ch4=true;
			chkpn.style.display='none';
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var pass=document.getElementById("pass").value;
		var cpass=document.getElementById("cpass").value;
		var spass=document.getElementById("match");
		if(pass=="")
		{
			
			spass.innerHTML="*Fill password";
			spass.style.display='inline-block';
		}
		else
		{
		if(pass==cpass)
		{
			ch5=true;
			spass.style.display='inline-block';
			spass.innerHTML="*password matched";
		}
		else
		{
			spass.style.display='inline-block';
			spass.innerHTML="*password NOT matched";
		}
		}
		if(ch1==true&&ch2==true&&ch3==true&&ch4==true&&ch5==true&&ch6==true){
		document.getElementById("reg").submit();
		
		}
		////////////////////////////////////////////////////////////////////////////////////////////////////////
		//
		
		
		
	}
</script>
</body>
</html>













<?php
include("config.php");
$uname=trim($_POST["username"]);
$fname=trim($_POST["fname"]);

$email=trim($_POST["email"]);
$ph=trim($_POST["phone"]);

$enroll=trim($_POST["enroll"]);
$bandy=trim($_POST["bandy"]);

$passw=trim($_POST["pass"]);
$date= date("F j, Y, g:i a"); 

$servername='localhost';
$username='root';
$password='';
$dbname='project';


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	$query1="SELECT * FROM `userreg`";
	$result=mysqli_query($conn,$query1);
	
	if(mysqli_query($conn,$query1))
	{
		$check=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row['username'];
			if($uname==$name)
			{
				$check=1;
			}
		}
		if($check==0)
		{
			$query="INSERT INTO `userreg` (`id`, `username`, `fname`, `email`, `phone`, `enroll`, `branch_and_year`,`pass`, `date`) VALUES ('$id','$uname','$fname','$email','$ph','$enroll','$bandy','$passw','$date')";
			$chk=mysqli_query($conn,$query);
	
				if($chk)
				{
					$msg="<h5 style='padding:10px'>Sign Up Successfully!! Now you can <a href='login.html'>Login here</a>
					<i style='font-size:24px ;color:red;float:right' class='fa'>&#xf046;</i></h5>";
				}
				else
				{
					echo "not entered";
				}l
			
		}
		else if($check==1)
		{
			function generateRandomString($length = 4) {
				return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
			}
			
			
			
		$newname=  generateRandomString();
			$newname=$uname.$newname;
			$newname2=$uname.generateRandomString();
			$newname3=$uname.generateRandomString();
			$newname4=$uname.generateRandomString();
			$newname5=$uname.generateRandomString();
		
		
			
				$msg="<h4>User name ($uname) already exist .Please <a href='login.html'> try again </a>with different.</h4><br />
				<br /><ol class='list-group list-group-flush'><li class='list-group-item list-group-item-light'>You can try $newname </li><li class='list-group-item list-group-item-light'>
				You can try $newname2</li><li class='list-group-item list-group-item-light'>You can try $newname3 </li>
				<li class='list-group-item list-group-item-light'>You can try $newname4 </li>
				<li class='list-group-item list-group-item-light'>You can try $newname5<hr /></li></ol>";
		}
	}
	else
	{
		echo "not checked";
	}
}
else
{
	echo"connection not established";
}
?>

