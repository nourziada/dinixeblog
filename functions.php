<?php

require 'connection.php';
	
	class Post {
		### Function to get All Posts form Data Base
		public function get_allposts(){

			global $connect;
			$sql = "SELECT * FROM posts ORDER BY id DESC";
			$stmt = $connect->prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		#### Function to get Post by Id Details
		public function get_post($id){
			global $connect;
			$sql = "SELECT * FROM posts WHERE id=?";
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$id,PDO::PARAM_INT);
			$stmt->execute();

			$rowCount = $stmt->rowCount();

			if($rowCount == 0) {
				return 0;
			}else {
				return $stmt->fetch(PDO::FETCH_ASSOC);

			}

		}



		##### Function to get all commencts By id #####

		public function get_comments($postid){
			global $connect;
			$sql = "SELECT * FROM comments WHERE postid=? ORDER BY id DESC";
			$stmt = $connect->prepare($sql);
			$stmt -> bindParam(1,$postid,PDO::PARAM_INT);
			$stmt->execute();

			$rowCount = $stmt->rowCount();
			if($rowCount == 0) {
				return 0;
			}else {
				return $stmt->fetchAll();
			}
		}



		###### Funtion to add comment 

		public function add_comment ($postid,$comment){
			global $connect;
			$sql = "INSERT INTO comments (postid, comment) VALUES (?, ?)";
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$postid);
			$stmt->bindParam(2,$comment);
			$stmt->execute();
		}


		###### Funtion to add Post 

		public function add_post ($title,$content,$date,$image){
			global $connect;
			$sql = "INSERT INTO posts (title, content, date, image) VALUES (?, ? , ? , ?)";
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$title);
			$stmt->bindParam(2,$content);
			$stmt->bindParam(3,$date);
			$stmt->bindParam(4,$image);
			$stmt->execute();
		}

		public function edit_post ($id,$title,$content,$image){
			global $connect;
			$sql = "UPDATE posts SET title=?, content=?, image=? WHERE id=?";
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$title);
			$stmt->bindParam(2,$content);
			$stmt->bindParam(3,$image);
			$stmt->bindParam(4,$id);
			$stmt->execute();
		}

		public function delete_post ($id){
			global $connect;
			$sql = "DELETE FROM posts WHERE id=?";
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$id);
			$stmt->execute();
		}

	}

	class Side {

		##### Function to get the Last 3 Projects 
		public function get_projects () {
			global $connect;
			$sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 3";
			$stmt = $connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}


	
