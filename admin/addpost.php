<?php 

	session_start();
	$pageTitle = "إضافة موضوع جديد";
	include 'headeradmin.php';
	require '../functions.php';



	$buttonName = "btn-add";
	$buttonValue = "إضافة";
	$titleValue = "";
	$contentValue = "";
	$imageValue = "";

	if(isset($_SESSION['login_email'])){

		/* Code For Edit Post */
		if(isset($_GET['box']) == 'edit'){

			$id = $_GET['id'];
			$buttonName = "btn-edit";
			$buttonValue = "تعديل";

				$post = new Post;
  				$data = $post->get_post($id);

  				if ($data == 0 ) {
  					$error = "عضراً ! لا يوجد موضوع بهضه التفاصيل ";
  					header("Location: dashboard.php");
  				}else {

  					$titleValue = $data['title'];
  					$contentValue = $data['content'];
  					$imageValue = $data['image'];
  				}
			

		}


		



		// IF THE method is POST DO THAT
		//	if(isset($_SERVER['REQUEST_METHOD']) == "POST"){
			
			if(isset($_POST['btn-add'])){
				### Code to Check if Add Post Or Edit Post
				#### here for Add post
			
				$title = $_POST['title'];
				$content = $_POST['content'];
				$date = time();

				$name       = $_FILES['image']['name'];  
				$temp_name  = $_FILES['image']['tmp_name']; 
				$location = '../img/';

								


				if(empty($title) || empty($content)) {
					$error = "عذراً ! الرجاء ملىء كافة الحقول";
				}else {

  					 
					if(move_uploaded_file($temp_name, $location.$name)){
					    $post = new Post;
	  					$post->add_post($title,$content,$date,$name);
	  			        $success = "تمت إضافة المنشور بنجاح ";
		            } else {
		            	$error = "عذراً ! يجب إضافة صورة للموضوع";
		            }

  					
				}

			}### end Code for check if Add post 
			else if (isset($_POST['btn-edit'])) {
				

				$title = $_POST['title'];
				$content = $_POST['content'];
				$id = $_POST['id'];

				$name       = $_FILES['image']['name'];  
				$temp_name  = $_FILES['image']['tmp_name']; 
				$location = '../img/';

				

				if(empty($title) || empty($content)) {
					$error = "عذراً ! الرجاء ملىء كافة الحقول";
				}else {


						#upload the new image 
						if(move_uploaded_file($temp_name, $location.$name)){
						    $post = new Post;
	  						$post->edit_post($id,$title,$content,$name);
		  			        $_SESSION['message'] = 'تم تعديل الموضوع بنجاح';
	  						header("Location: dashboard.php");
			            } else {
			            	$error = "عذراً ! يجب إضافة صورة للموضوع";
			            }
					
					

					

  					
				}
			}

			

		//} ##### if the method is GET , THERE IS EDIT

		
		
			
		


?>

<body id="body-loign">
	<div class="container container-login container-dashboard">

		<div id="container-header-form">
			<a href="dashboard.php" class="btn btn-primary">
				<span class="glyphicon glyphicon-star" aria-hidden="true">العودة الى الصفحة الرئيسية</span>
			</a>
		</div>


		<?php 

			if(isset($error)) {
				
				echo "<div class=\"container\" style=\"margin-top:10px\">
			    	<div class=\"alert alert-danger\" role=\"alert\"> <strong>";
			
			    				echo $error;		

			    	echo "</div>
			    </div>	";	
			}


			if(isset($success)) {
				
				echo "<div class=\"container\" style=\"margin-top:10px\">
			    	<div class=\"alert alert-success\" role=\"alert\"> <strong>";
			
			    				echo $success;		

			    	echo "</div>
			    </div>	";	
			}

		?>


		<form dir="rtl" id="add-post-form" method="POST" action="addpost.php" enctype="multipart/form-data">
		  <input type="hidden" name="id" value="<?php echo $id;?> ">
		  <div class="form-group">
		    <label for="exampleFormControlInput1">عنوان الموضوع</label>
		    <input name = "title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="أكتب هنا عنوان الموضوع الجديد" value="<?php echo $titleValue; ?>">
		  </div>


		  
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">تفاصيل الموضوع</label>
		    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $contentValue; ?></textarea>
		  </div>


		  <div class="form-group">
		    <label for="exampleFormControlFile1">صورة الموضوع</label>
		    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $imageValue;?>">
		  </div>

		<div align="center" class="button-sub">

		<?php
			
			

	  	?>
	  	
	    <button class="btn-sub" name="<?php echo $buttonName; ?>" type="submit"> <?php echo $buttonValue; ?></button>
	      		

	  	</div>
		  


		</form>

	</div>
</body>


<?php

}else #### if the visitor didn't login , redirect him to Login Page
	 {
		header("Location: login.php");		
	}
?>

