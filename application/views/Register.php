
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Sell & Buy</title>

 	<link rel="stylesheet" href="<?php echo base_url()."assets/css/w3.css"; ?>" >
 	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="img/fav.png" />
 	<style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		*{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		  font-family: 'Poppins',sans-serif;
		}
		body{
		  height: 100vh;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  padding: 10px;
		  background: linear-gradient(135deg, #71b7e6, #9b59b6);
		}
		.container{
		  max-width: 700px;
		  width: 100%;
		  background-color: #fff;
		  padding: 25px 30px;
		  border-radius: 5px;
		  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
		}
		.container .title{
		  font-size: 25px;
		  font-weight: 500;
		  position: relative;
		}
		.container .title::before{
		  content: "";
		  position: absolute;
		  left: 0;
		  bottom: 0;
		  height: 3px;
		  width: 30px;
		  border-radius: 5px;
		  background: linear-gradient(135deg, #71b7e6, #9b59b6);
		}
		.content form .user-details{
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		  margin: 20px 0 12px 0;
		}
		form .user-details .input-box{
		  margin-bottom: 15px;
		  width: calc(100% / 2 - 20px);
		}
		form .input-box span.details{
		  display: block;
		  font-weight: 500;
		  margin-bottom: 5px;
		}
		.user-details .input-box input{
		  height: 45px;
		  width: 100%;
		  outline: none;
		  font-size: 16px;
		  border-radius: 5px;
		  padding-left: 15px;
		  border: 1px solid #ccc;
		  border-bottom-width: 2px;
		  transition: all 0.3s ease;
		}
		.user-details .input-box input:focus,
		.user-details .input-box input:valid{
		  border-color: #9b59b6;
		}
		 
		 form .category{
		   display: flex;
		   width: 80%;
		   margin: 14px 0 ;
		   justify-content: space-between;
		 }
		 form .category label{
		   align-items: center;
		   display: inline-flex;
		   cursor: pointer;
		 }
		 form .category label .dot{
		  height: 18px;
		  width: 18px;
		  border-radius: 50%;
		  margin-right: 10px;
		  background: #d9d9d9;
		  cursor: pointer;
		  border: 5px solid transparent;
		  transition: all 0.3s ease;
		}
		
		 
		 form .button{
		   height: 45px;
		   margin: 35px 0
		 }
		 form .button input{
		   height: 100%;
		   width: 100%;
		   border-radius: 5px;
		   border: none;
		   color: #fff;
		   font-size: 18px;
		   font-weight: 500;
		   letter-spacing: 1px;
		   cursor: pointer;
		   transition: all 0.3s ease;
		   background: linear-gradient(135deg, #71b7e6, #9b59b6);
		 }
		 form .button input:hover{
		  /* transform: scale(0.99); */
		  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
		  }
		 @media(max-width: 584px){
		 .container{
		  max-width: 100%;
		}
		form .user-details .input-box{
			margin-bottom: 15px;
			width: 100%;
		  }
		  form .category{
			width: 100%;
		  }
		  .content form .user-details{
			max-height: 300px;
			overflow-y: scroll;
		  }
		  .user-details::-webkit-scrollbar{
			width: 5px;
		  }
		  }
		  
		  .btn.btn-primary {
				height: 100%;
				padding:2px 10px;
				border-radius: 5px;
				border: none;
				color: #fff;
				font-size: 18px;
				font-weight: 500;
				letter-spacing: 1px;
				cursor: pointer;
				transition: all 0.3s ease;
				background: linear-gradient(135deg, #71b7e6, #9b59b6);
			}

			.btn.btn-primary:hover {
				/* transform: scale(0.99); */
				background: linear-gradient(-135deg, #71b7e6, #9b59b6);
			}
			.btn.btn-info {
				height: 100%;
				padding:2px 10px;
				border-radius: 5px;
				border: none;
				color: #fff;
				font-size: 18px;
				font-weight: 500;
				letter-spacing: 1px;
				cursor: pointer;
				transition: all 0.3s ease;
				background: linear-gradient(135deg, #71b7e6, #9b59b6);
			}

			.btn.btn-info:hover {
				/* transform: scale(0.99); */
				background: linear-gradient(-135deg, #71b7e6, #9b59b6);
			}
			
		  
		  @media(max-width: 459px){
		  .container .content .category{
			flex-direction: column;
		  }
		}
     </style>
      
</head>
<body>
     <div class="container" id="rec">
	   
     <div class="title">Registration <a href="<?php echo base_url()?>"><button class="btn btn-info" style="float:right;">Home</button></a></div>
     <div class="content">
		<form action="<?php echo base_url().'Welcome/Register'; ?>" method="post">
			<div class="user-details">
			 <div class="input-box">
				<span class="details">First Name</span>
				<input type="text" name="fname" placeholder="Enter your First Name">
  			  </div>
                 <div class="input-box">
				<span class="details">Last Name</span>
				<input type="text" name="lname" placeholder="Enter your Last Name" >
  			  </div>
			  <div class="input-box">
				<span class="details">Email</span>
				<input type="text" name="email" placeholder="Enter your email">
  			  </div>
                 <div class="input-box">
				<span class="details">Password</span>
				<input type="password" name="pass" placeholder="Enter your password">
  			  </div>
			  <div class="input-box">
				<span class="details">Contact No</span>
				<input type="text" name="contact" placeholder="Enter your number">
  			  </div>
			   
			</div>  
			<div class="button">
			  <input type="submit" value="Register">
			</div>
		</form>
	     <p class="text-center">
			<center>No thanks I have account .&nbsp;&nbsp;<button class="btn btn-primary">Login</button></center>
		</p>
     </div>
     </div>
</body>
</html>
 
 
