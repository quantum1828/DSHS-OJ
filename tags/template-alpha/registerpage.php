<?php 
$cache_time=1;
require_once("oj-header.php");
require_once("include/db_info.inc.php");

?>
<title>Register Page</title>
<form action="register.php" method="post">
	<br><br>
	<center><table>
		<tr><td colspan=2 height=40 width=500>&nbsp;&nbsp;&nbsp;<?php echo $MSG_REG_INFO?></td></tr>
		<tr><td width=25%><?php echo $MSG_USER_ID?>:</td>
			<td width=75%><input name="user_id" size=20 type=text>*</td>
		</tr>
		<tr><td><?php echo $MSG_NICK?>:</td>
			<td><input name="nick" size=50 type=text></td>
		</tr>
		<tr><td><?php echo $MSG_PASSWORD?>:</td>
			<td><input name="password" size=20 type=password>*</td>
		</tr>
		<tr><td><?php echo $MSG_REPEAT_PASSWORD?>:</td>
			<td><input name="rptpassword" size=20 type=password>*</td>
		</tr>
		<tr><td><?php echo $MSG_SCHOOL?>:</td>
			<td><input name="school" size=30 type=text></td>
		</tr>
		<tr><td><?php echo $MSG_EMAIL?>:</td>
			<td><input name="email" size=30 type=text></td>
		</tr>
		<?php if($OJ_VCODE){?>
		<tr><td><?php echo $MSG_VCODE?>:</td>
			<td><input name="vcode" size=4 type=text><img src=vcode.php>*</td>
		</tr>
		<?php }?>
		<tr><td></td>
			<td><input value="Submit" name="submit" type="submit">
				&nbsp; &nbsp;
				<input value="Reset" name="reset" type="reset"></td>
		</tr>
	</table></center>
	<br><br>
</form>
<?php require_once("oj-footer.php");?>
