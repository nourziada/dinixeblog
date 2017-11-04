<?php 
	
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Your name <info@address.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	$pageTitle = "دنكس- تواصل معنا";
	include 'header.php';

	
	if(isset($_POST['btnsubmit'])) {

		$to = "eng.nour.ziadaa@gmail.com";
		$sub = "Dinixe Blog Contact";

		
		if(isset($_SERVER["REQUEST_METHOD"]) == "POST") {

			

			$name = $_POST['fullname'];
			$email = $_POST['email'];
			$title = $_POST['title'];
			$content = $_POST['content'];

			$errors = array();
			$success = array();

			$body = "";
			$body = $body . " Name " . $name . "\n";
			$body = $body . "Email " . $email . "\n";
			$body = $body . "Title " . $title . "\n";
			$body = $body . "Content " . $content ;

			if (empty($name) || empty($email) || empty($title) || empty($content)) {
				$errors [] = " عذراً ! بعض الحقول فارغة ";
			}else {

				if(mail($to, $sub, $body,$headers)) {
					$success [] = "تم الارسال بنجاح";
				}
			}

			


		} /* End of Server */
	} /* End of Button Submit */
?>

	<div class=" news-page  news-detaile  con1  " align="center" style="padding:0 0 50px 0">
	    <div class="relativ-po" style="background: url(img/slider3.png) center center; background-size: cover ; height: 311px">
	        <div class="overllay">
	            <div class="tit3" align="center">
	                <h1>
	                    راسلنا
	                </h1>


	                <div class="pull-left threeF"> نحن هنا من أجلك , يمكنك الحصول على المساعدة من خلال تعبئة النموذج بالاسفل , وسنقوم بالرد عليك في أقرب وقت</div>


            </div>
        </div>
    </div>

    <!-- Code For printing the Errors-->
	<?php 

		if(isset($errors)) {
			foreach ($errors as $error) {
			echo "<div class=\"container\" style=\"margin-top:10px\">
		    	<div class=\"alert alert-danger\" role=\"alert\"> <strong>";

		    			
		    				echo $error;
		    			

		    	echo "</div>
		    </div>	";	
		    }
		}
	    


		if(isset($success)) {
			foreach ($success as $succes) {
			echo "<div class=\"container\" style=\"margin-top:10px\">
		    	<div class=\"alert alert-success\" role=\"alert\"> <strong>";

		    			
		    				echo $succes;
		    			

		    	echo "</div>
		    </div>	";	
		    }
		}
	    
	    		
	?>  		
    	


    <form class="text-right container contact-us" action="contact.php" method="POST" dir="rtl">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
				   <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم كاملاً">
				</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
				   <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكتروني">
				</div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
				   <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="عنوان الموضوع">
				</div>
            </div>
            <div class="col-md-6"></div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="form-group">
				   <textarea class="form-control" name="content" placeholder="الموضوع" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
            </div>

            <div align="center" class="button-sub">
                <button name="btnsubmit" type="submit">ارسال</button>
            </div>
        </div>
    </form>


</div>

<script>
$(document).ready(function(){


	$(".nav-item:first").removeClass('active'); // This is the change.
    $(".nav-item:nth(1)").removeClass('active'); // This is the change.
    $(".nav-item:nth(2)").addClass('active'); // This is the change.


});

</script>


<?php include 'footer.php'; ?>