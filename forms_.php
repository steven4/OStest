<?php
function my_forms_page(){
	echo "<div id='main_content'>
<div id='heading'><div class='form_left'>My Form</div>
<hr />
</div>

<form action='Return_Form.php'' method='Post'>
<center>
<table>
<tr><td class='description'>First Name</td><td><input type='text' name='firstname_text' class='form_text'></td></tr>
<tr><td class='description'></td><td></td></tr>
<tr><td class='description'>Last Name</td><td><input type='text' name='lastname_text' class='form_text'></td></tr>
<tr><td class='description'></td><td></td></tr>
<tr><td class='message_description' valign='top'>Message</td><td><textarea name='message_text' class='form_text_area'></textarea></td></tr>
<tr><td class='description_button_tag'></td><td id='td_button'><button type='submit' name='submit'><img src='images/button_back.png'></button></td></tr>

</table>	
</center>

</form>
</div>";
	
}


function my_forms_page_return($message){
	echo "<div id='main_content'>
<div id='heading'><div class='form_left'>My Form</div>
<hr />
</div>

<center>
<table>
<tr><td class='description'></td><td></td></tr>
<tr><td class='description'></td><td></td></tr>
<tr><td class='description'></td><td></td></tr>
<tr><td class='description'></td><td></td></tr>
<tr><td class='message_description'></td><td >$message</td></tr>
<tr><td class='description_button_tag'></td><td></td></tr>
</table>	
</center>

</div>";
	
}


?>

