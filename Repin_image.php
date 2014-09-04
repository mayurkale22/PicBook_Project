<?php
include "Header.php";

       if (isset($_POST['submit'])){  
			if (!empty($_POST['board_id']) && isset($_POST['board_id'])){
				$idesc =  $_POST['idesc'];
				$board_id =  $_POST['board_id'];
				$image_id =  $_POST['image_id'];	
							 // repin image
							$database->database_query("INSERT INTO repin_images (original_image_id, board_id, description, create_date) VALUES 
														 ('".$image_id."', '".$board_id."', '".$idesc."', now())");
			
							echo "The image has been added successfully.";
							echo '<script>javascript:parent.jQuery.fancybox.close();</script>';	

        	}     
		}// submit

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
	<h2><u>Pick a Board</u></h2>
	<p>
       <form  action='repin_image.php' method='post' name="form1" id="form1">
	   <div style="width:10px">
						<fieldset>
							<legend>Pin It</legend>
							 <div class='container'>
							<table width="490" border="0">
							  <tr>
								<td><label for='username'>Select a board:</label></td>
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
								<input type="hidden" value="<?php echo $_GET['_imgid'];?>" name="image_id">
								</td>
							  </tr>
							  
							  <tr>
								<td> <label for='desc' >Description:</label></td>
								<td><textarea name="idesc" rows="5" cols="40"></textarea></td>
							  </tr>
								<td colspan="2" align="right">
								<input type='submit' name='submit' value='Pin It' />
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