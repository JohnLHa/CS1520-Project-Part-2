<!doctype html>

<?php
$title = "Contact Us";
$content = '
<h1>Contact Us</h1>
<p>
	345 Curry Hollow Rd, 
	Pittsburgh PA 15236</p>
	
<p>Shoot us an email at:
	UrbaneNails@gmail.com</p>
	
<p>Call us at: (412) 653-6335</p>
<p>You can contact us via <a href="https://www.facebook.com/urbane.nails.5?lst=1805605701%3A100008018654152%3A1493522107">Facebook</a> as well.</p>

<h3>Contact Form</h3>

<form name="contactform" method="post" action="contactform.php">
	<table width="450px">
	 
		<tr>
			<td valign="top">
				<label for="first_name">First Name *</label>
			</td>
			<td valign="top">
				<input  type="text" name="first_name" maxlength="50" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top"">
				<label for="last_name">Last Name *</label>
			</td>
			<td valign="top">
				<input  type="text" name="last_name" maxlength="50" size="30">
			</td>
		</tr>
		 
		<tr>
			<td valign="top">
				<label for="email">Email Address *</label>
			</td>
			<td valign="top">
				<input  type="text" name="email" maxlength="80" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="telephone">Telephone Number</label>
			</td>
			<td valign="top">
				<input  type="text" name="telephone" maxlength="30" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="comments">Comments *</label>
			</td>
			<td valign="top">
				<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
			</td>
		</tr>
		 
		<tr>
			<td colspan="2" style="text-align:center">
				<input type="submit" value="Submit">
			</td>
		</tr>
		
	</table>
</form>




';


include 'template.php';

?>