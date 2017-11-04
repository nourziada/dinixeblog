<?php 

	session_start();
	$pageTitle = "لوحة التحكم";
	include 'headeradmin.php';
	require '../functions.php';

	

	### here we chack that if the visitor have login or not 
	if(isset($_SESSION['login_email'])){
		$post = new Post;
  		$posts = $post->get_allposts();

  		/* Code for Delete Post */
  		if(isset($_GET['box']) == "delete") {
  			$id = intval($_GET['id']);
  			$post->delete_post($id);
  			$success = "تمت عملية الحذف بنجاح";
  			header("Location:dashboard.php");
  		}
?>


<body id="body-loign">

	<div class="container container-login container-dashboard">


	<div id="header-btn">
		<a id="header-btn-out" href="logout.php" class="btn btn-danger">تسجيل الخروج</a>

		<a id="header-btn-in" href="addpost.php" class="btn btn-primary">إضافة موضوع جديد</a>
	</div>
	
	
	<?php 


			if(isset($success)) {
				
				echo "<div class=\"container\" style=\"margin-top:10px\">
			    	<div class=\"alert alert-success\" role=\"alert\"> <strong>";
			
			    				echo $success;		

			    	echo "</div>
			    </div>	";	
			}

			if(!empty($_SESSION['message'])) {
			   $message = $_SESSION['message'];

			   echo "<div class=\"container\" style=\"margin-top:10px\">
			    	<div class=\"alert alert-success\" role=\"alert\">";
			
			    				echo $message;		

			    	echo "</div>
			    </div>	";
			}

			unset($_SESSION['message']);

		?>
	

	<table class="table table-striped" dir="rtl">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>عنوان الموضوع</th>
		      <th>تاريخ الاضافة</th>
		      <th>تعديل | حذف</th>
		    </tr>
		  </thead>
		  <tbody>
		    

		    <?php
		    	$id = 1;
		    	foreach($posts as $post) {
		    		echo "

							<tr>
		      					<th scope=\"row\">" . $id++ . "</th>
		      					<td>" . $post['title'] . "</td>
		     					<td>" . $post['date'] . "</td>
		      					<td>
		      						<a href=\"addpost.php?box=edit&id=" . $post['id'] . "\" class=\"btn btn-info\">تعديل</a> | 
		      						<a href=\"dashboard.php?box=delete&id=" . $post['id'] . " \" class=\"btn btn-danger\">حذف</a>
		      					</td>
		    				</tr>


		    		";
		    	}

		    ?>
		    
		  </tbody>
		</table>

	</div>


</body>


<?php 

	}else #### if the visitor didn't login , redirect him to Login Page
	 {
		header("Location: login.php");		
	}

?>

