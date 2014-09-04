<?php
include "Header.php";

       if (isset($_POST['submit'])){
            if (!empty($_POST['bname']) && isset($_POST['bname'])){
				$bname =  $_POST['bname'];
				$bdesc =  $_POST['bdesc'];
				$selected_privacy = $_POST['privacy'];
				$boards_query = $database->database_query("SELECT board_name FROM boards WHERE user_id ='".$user->user_info[user_id]."' AND board_name = '".$bname."'"); 
				if($database->database_num_rows($boards_query) >= 1) {
					echo "You already have a board called '<b><font color='red'>".strtoupper($bname)."'.</font></b>";
					
				}
				else{
			
					  // add board
	  				$database->database_query("INSERT INTO boards (user_id, board_name, board_description,Is_visible,create_time) VALUES 
											 ('".$user->user_info[user_id]."', '".$bname."', '".$bdesc."','".$selected_privacy."',now())");
					echo "The board has been created successfully.";
					echo '<script>javascript:parent.jQuery.fancybox.close();</script>';	
				}
				
            }
			else
			{
				 echo '<font color="red" size="2">Please Enter the Board Name </font>';
			}
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
	<h2><u>Create a Board</u></h2>

	<p>
       <form id='board' action='addboard.php' method='post' accept-charset='UTF-8'>
	   <div style="width:10px">
						<fieldset wi>
							<legend>Create a Board</legend>
							 <div class='container'>
							<table width="480" border="0">
							  <tr>
								<td><label for='username'>Name*:</label></td>
								<td><input type='text' name='bname' id='bname' value='' maxlength="50" autocomplete="off" /></td>
							  </tr>
							  <tr>
								<td> <label for='desc' >Description:</label></td>
								<td><textarea name="bdesc" rows="5" cols="40"></textarea></td>
							  </tr>
							  <tr>
								<td> <label for='privacy' >Board Privacy:</label></td>
								<td>
								<br />
									<input type="radio" name="privacy" value="1" checked> Everyone<br>
									<input type="radio" name="privacy" value="0"> Only My Friends
								</td>
							  </tr>
							  <tr>
								<td colspan="2" align="right">
								<input type='submit' name='submit' value='Create Board' />
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