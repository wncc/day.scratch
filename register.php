<?php
include 'header.php';?>
<form method='post' action='reg.php'>
<legend>Register your team!</legend>
<table>
<tr><td>Member1 Name : </td><td><input width='100px' type='text' name='name1'></td></tr>
<tr><td>Member1 Phone : </td><td><input width='100px' type='text' name='phone1'></td></tr>
<tr><td>Member1 E-mail : </td><td><input width='100px' type='text' name='mail1'></td></tr>
<tr><td>Member2 Name : </td><td><input width='100px' type='text' name='name2'></td></tr>
<tr><td>Member2 Phone : </td><td><input width ='100px' type='text' name='phone2'></td></tr>
<tr><td>Member2 E-mail : </td><td><input width = '100px' type='text' name='mail2'></td></tr>
</table>
<input type='submit' name='submit' value='Register'>
</form>
<?php 
include 'footer.php';
?>
