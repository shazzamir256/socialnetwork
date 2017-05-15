<!DOCTYPE html>

<div id="content"/>                            <!-- Content Area Starts Here-->

<div>
<img src="images/english-cricket-team-final.jpg " style="float:left;margin-left:-40px; width:800px ;height:525px;"/></img>
</div>
<div id="form2" style="float:right;margin-top:20px;">
<form action="" method="post">
<br>
<h2 style="padding:30px; margin-left:50px;font-family:Comic Sans MS;">Sign Up Today!</h2>

<table>
<tr>
<td align="right"><strong>Name:</strong></td>
<td><input type="text" name="u_name" required="required" placeholder="Write Your Name" style="width:250px;height:20px;padding:10px;border: 1px solid black;border-radius:5px;"></td>
</tr>

<tr>
<td align="right"><strong>Password:</strong></td>
<td><input type="password" name="u_pass" required="required" placeholder="Write Your Password" style="width:250px;height:20px;padding:10px;border: 1px solid black;border-radius:5px;"></td>
</tr>

<tr>
<td align="right"><strong>Email:</strong></td>
<td><input type="email" name="u_email" required="required" placeholder="Write Your Email" style="width:250px;height:20px;padding:10px;border: 1px solid black;border-radius:5px;"></td>
</tr>

<tr>
<td align="right"><strong>Country:</strong></td>
<td><select name="u_country" style="width:270px;padding:10px;border: 1px solid black;border-radius:5px;">
<option>Select a Country</option>
<option>Australia</option>
<option>New Zealand</option>
<option>Sri Lanka</option>
<option>Pakistan</option>

</select></td>
</tr>

<tr>
<td align="right"><strong>Gender:</strong></td>
<td><select name="u_gender" style="width:270px;padding:10px;border: 1px solid black;border-radius:5px;">
<option>Male</option>
<option>Female</option>
</select></td>
</tr>

<tr>
<td align="right"><strong>Birthday:</strong></td>
<td><input type="date" name="u_birthday" required="required" style="width:250px;height:20px;padding:10px;border: 1px solid black;border-radius:5px;"></td>
</tr>

<tr>
<td align="right"><strong>Your Image:</strong></td>
<td><input type="file" name="image"></td>
</tr>

<tr>
<td colspan="6"><button name="sign_up" style="width:270px;padding:10px;border: 1px solid black;border-radius:5px;margin-left:68px;">Sign Up</button></td>
</tr>
</table>
</form> 
<?php include("insert_user.php"); ?>  
</div>

</div>                   