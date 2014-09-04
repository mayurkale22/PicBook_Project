<?php
include "Header.php";

       if (isset($_POST['submit'])){
            if (!empty($_POST['bname']) && isset($_POST['bname'])){
				$bname =  $_POST['bname'];
				$bdesc =  $_POST['bdesc'];
				$selected_privacy = $_POST['privacy'];
				$id = $_POST['id'];
				if (strtolower($bname) == strtolower($_GET['board_name'])){
				
					$update_query  = "UPDATE boards SET board_name = '".$bname."', board_description = '".$bdesc."',";
					$update_query .= " Is_visible = '".$selected_privacy."', create_time=now()";
					$update_query .= " Where board_id = '".$id."'";
	  				$database->database_query($update_query);
					echo "The board has been updated successfully..";
					echo '<script>javascript:parent.jQuery.fancybox.close();</script>';	
				}else{
				
						$boards_query = $database->database_query("SELECT board_name FROM boards WHERE user_id ='".$user->user_info[user_id]."' AND board_name = '".$bname."'"); 
						if($database->database_num_rows($boards_query) >= 1) {
							echo "You already have a board called '<b><font color='red'>".strtoupper($bname)."'.</font></b>";
							
		
						}
						else{
					
							  // Alter Board
							  
							$update_query  = "UPDATE boards SET board_name = '".$bname."', board_description = '".$bdesc."',";
							$update_query .= " Is_visible = '".$selected_privacy."', create_time=now()";
							$update_query .= " Where board_id = '".$id."'";
							$database->database_query($update_query);
							echo "The board has been updated successfully.";
							echo '<script>javascript:parent.jQuery.fancybox.close();</script>';
						}
				}
				
				
            }
			else
			{
				 echo '<font color="red" size="2">Please Enter the Board Name </font>';
			}
        }    
		
	if (isset($_POST['delete'])){
			$id = $_POST['id'];	
			$path = $_POST['path'];	
			
			$query = "SELECT image_id,image_type FROM pin_images WHERE board_id ='".$id."'";
			$image_details = $database->database_query($query);
			while ($image_info = $database->database_fetch_assoc($image_details)){
					unlink ($path.$image_info['image_id'].'.'.$image_info['image_type']);
			}
			$boards_query = $database->database_query("DELETE FROM boards WHERE board_id ='".$id."'"); 
			
	 		echo '<font color="red" size="2">The board has been deleted successfully.</font>';
			echo '<script>javascript:parent.jQuery.fancybox.close();</script>';
	
	}	
		


?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script language="JavaScript" >
	window.onerror = new Function("return true;");

function setFormFocus() {
	document.forms[0].bname.focus(); 
	document.forms[0].bname.select();
}
</script>
</head>
<body onLoad="setFormFocus()">

	<?php if (isset($_GET['editboard_id'])){

			$query = "SELECT board_name,board_description,Is_visible FROM boards WHERE board_id ='".$_GET['editboard_id']."'";
			$boards_info = $database->database_fetch_assoc($database->database_query($query));

			echo '<h2>Edit Board | '.$boards_info['board_name'].'</h2>';
	}	
	?>
	<p>
       <form id='board' action='alter.php?editboard_id=<?php echo $_GET['editboard_id'];?>&board_name=<?php echo $_GET['board_name'];?>' method='post' accept-charset='UTF-8'>
	   <div style="width:10px">
  
					<fieldset wi>
							 <div class='container'>
							<table width="480" border="0">
							  <tr>
								<td><label for='username'>Name*:</label></td>
								<td><input type='text' name='bname' id='bname' value='<?php echo $boards_info['board_name'];?>' maxlength="50" autocomplete="off" />
									<input type="hidden" name="id" id="id" value='<?php echo $_GET['editboard_id'];?>' size="1">
									<input type="hidden" name="path" id="path" value='<?php echo $_GET['path'];?>' size="10">																
								</td>
							  </tr>
							  <tr>
								<td> <label for='desc' >Description:</label></td>
								<td><textarea name="bdesc" rows="5" cols="40"><?php echo $boards_info['board_description'];?></textarea></td>
							  </tr>
							  <tr>
								<td> <label for='privacy' >Board Privacy:</label></td>
								<td>
								<br />
									<?php if ($boards_info['Is_visible'] == 1) {
												echo '<input type="radio" name="privacy" value="1" checked> Everyone<br>
													  <input type="radio" name="privacy" value="0"> Only My Friends';}
										  else{
												echo '<input type="radio" name="privacy" value="1"> Everyone<br>
													  <input type="radio" name="privacy" value="0" checked> Only My Friends';}		
									?>				  								  
								</td>
							  </tr>
							  <tr>
								<td colspan="2" align="right">
								<input type='submit' name='delete' value='Delete Board' />
								<input type='submit' name='submit' value='Save Changes' />
								<input type='submit' name='cancel' value='Cancel' onClick="javascript:parent.jQuery.fancybox.close();"/>
								</td>
							  </tr>
							</table>
							</div>
							<div class='short_explanation'>* required fields</div>
			
						</fieldset>
					</div>			

			</form>

	</p>
	
</body>
</html>