<?php
include "Header.php";

       if (isset($_POST['submit'])){
         if (!empty($_FILES['file']["name"]) && isset($_FILES['file']["name"])){   
			if (!empty($_POST['iname']) && isset($_POST['iname'])){
				$iname =  $_POST['iname'];
				$idesc =  $_POST['idesc'];
				$board_id =  $_POST['board_id'];
				
				$temp = explode(".", $_FILES["file"]["name"]);
				$extension = end($temp);
				if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png")))
				  {
							$dest = $url->url_userTRdir($user->user_info[user_id]);
			
							$itype = explode("/",$_FILES["file"]["type"]);
							$itype = $itype[1];
						
								  // add image
							$database->database_query("INSERT INTO pin_images (board_id, image_name, image_description,image_type, create_date) VALUES 
														 ('".$board_id."', '".$iname."', '".$idesc."','".$itype."',now())");
							$image_id = $database->database_insert_id();
							$image_name = $image_id.'.'.$itype;
							
			
			
							if(!move_uploaded_file( $_FILES['file']['tmp_name'], $dest.$image_name)) 
								 { 
				 					echo '<font color="red" size="2">Error, while uploading file.</font>'; 
								 } 
			
								 // add tags				 
							if (!empty($_POST['itag']) && isset($_POST['itag'])){
									$tag_array = explode(",",$_POST['itag']);
									
									foreach ($tag_array as $tag_name) {
											$database->database_query("INSERT INTO tags VALUES('".$image_id."', '".$tag_name."',now())");
											}
							}
										
							echo "The image has been added successfully.";
							echo '<script>javascript:parent.jQuery.fancybox.close();</script>';	
							
					}else{
						echo '<font color="red" size="2">Please select valid image extension eg. gif or jpeg or jpg or png</font>';
					}
							
            } // image name
			else
			{
				 echo '<font color="red" size="2">Please Enter the Image Name </font>';
			}
		  } // file select
		else
		  {
				 echo '<font color="red" size="2">Please choose image </font>';
		  }	
        }     // submit


?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="JavaScript" >
	window.onerror = new Function("return true;");

		function setFormFocus() {
			document.forms[0].iname.focus(); 
			document.forms[0].iname.select();
		}
</script>



</head>
<body onLoad="setFormFocus()">
	<h2><u>Add a Pin</u></h2>
	<p>
       <form  action='addimage.php?_bid=<?php echo $_GET['_bid'];?>' method='post' enctype="multipart/form-data" name="form1" id="form1">
	   <div style="width:10px">
						<fieldset>
							<legend>Add a Pin</legend>
							 <div class='container'>
							<table width="490" border="0">
							
							  <tr>
								<td><label for='username'>Upload an image*:</label></td>
								<td><input name="file" type="file" id="file"></td>
							  </tr>
							  <tr>
							  <tr>
								<td><label for='username'>Name*:</label></td>
								<td><input type='text' name='iname' id='iname' value='' maxlength="50" autocomplete="off" /></td>
							  </tr>
							  <tr>
								<td><label for='username'>Pick a board:</label></td>
								<td>
								<select name="board_id" style="width: 165px">
								<?php 
								  $boards_query = "SELECT board_id, board_name FROM boards WHERE user_id ='".$user->user_info[user_id]."'";
								  $boards = $database->database_query($boards_query);
							
								  while($boards_name = $database->database_fetch_assoc($boards)) {
								  		if ($_GET['_bid'] == $boards_name['board_id']){?>
								  			<option value="<?php echo $boards_name['board_id'];?>" selected="selected"><?php echo $boards_name['board_name'];?></option>
										<?php }else{ ?>
											<option value="<?php echo $boards_name['board_id'];?>"><?php echo $boards_name['board_name'];?></option>
									<?php }
									 } ?>
								</select>
								</td>
							  </tr>
							  
							  <tr>
								<td> <label for='desc' >Description:</label></td>
								<td><textarea name="idesc" rows="5" cols="40"></textarea></td>
							  </tr>
							  <tr>
								<td><label for='tags'>Tag(s):</label></td>
								<td><input type='text' name='itag' id='itag' value='' maxlength="50" autocomplete="off" /></td>
							  </tr>
							  <tr>
								<td colspan="2" align="right">
								<input type='submit' name='submit' value='Add Pin' />
								<input type='submit' name='cancel' value='Cancel' onClick="javascript:parent.jQuery.fancybox.close();"/>
								</td>
							  </tr>
							</table>
							</div>
			
						</fieldset>
			</div>
			</form>

	</p>
	
</body>
</html>