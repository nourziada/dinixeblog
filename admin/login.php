<?php 

	session_start();
	$pageTitle = "دنكس- تسجيل الدخول";
	include 'headeradmin.php'; 

	if(isset($_SERVER['REQUEST_METHOD']) == 'POST') {
		if(isset($_POST['btnsubmit'])) {
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			##### check if the values is empty or not 
			if(empty($email) || empty($password)) {
				$error = "عذراً ! كافة الحقول مطلوبة";
			}else {
				$sql = "SELECT * FROM users WHERE email=? AND password=?";
				$stmt = $connect->prepare($sql);
				$stmt->bindParam(1,$email);
				$stmt->bindParam(2,$password);
				$stmt->execute();

				$count = $stmt->rowCount();

				### that mean there is a user with that values 
				if($count == 1) {
					$_SESSION['login_email'] = $email;
					header("Location: dashboard.php");
				}else  #### that means there is no user with that values 
				 {
					$error = "عذراً ! البريد الالكتروني أو كلمة المرور خطأ" ;
				}
			}
		}
	}
?>

<body id="body-loign">
<div class="container-all">
	<div class="container container-login">
		<img class="img-header" src="../img/logo.png">
		
		<p class="login-title">:::تسجيل الدخول الى لوحة التحكم:::</p>
		<?php 



		if(isset($error)) {
			
			echo "<div class=\"container\" style=\"margin-top:10px\">
		    	<div class=\"alert alert-danger\" role=\"alert\"> <strong>";
		
		    				echo $error;		

		    	echo "</div>
		    </div>	";	
		    
		}

		?>
		<form class="text-right container contact-us" action="login.php" method="POST" dir="rtl">
	        
	        <div class="row">
	        	<div class="col-md-4 offset-md-4"></div>
	            <div class="col-md-4">
	                <div class="form-group">
					   <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكتروني">
					</div>
	            </div>
	            <div class="col-md-4 offset-md-4"></div>

	            <div class="col-md-4 offset-md-4"></div>
	            <div class="col-md-4">
	                <div class="form-group">
					   <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="كلمة المرور">
					</div>
	            </div>
	            <div class="col-md-4 offset-md-4"></div>

	            <div align="center" class="button-sub">
	                <button name="btnsubmit" type="submit">تسجيل الدخول</button>
	            </div>
	        </div>
	    </form>

    </div>

</div>