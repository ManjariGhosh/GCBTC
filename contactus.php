<?php include("dbconnection.php"); 
ini_set('display_errors', 'On');
session_start();
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['Submit']))
   {
if(($_SERVER['REQUEST_METHOD']== "POST") && !empty($_POST['TextName']))
		{
			$name=$_POST["TextName"];
			$phone_no=$_POST["TextPhone"];
			$email_id=$_POST["TextMail"];
			$address=$_POST["TextAddress"];
			$address = str_replace("'", "''", $address);
			$message_type=$_POST["MessageType"];
			$message=$_POST["MessageType"];
			$message = str_replace("'", "''", $message);
			$feedback_date_time=date("Y-m-d H:i:s", strtotime('now'));
			$feedback_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
			$ID="";
			$query = "select ifnull(max(feedback_id),0)+1 as fid from feedback";
			$data = mysqli_query($link,$query); 
			if($info = mysqli_fetch_array($data)) 
			{ 
				$ID=$info['fid']; 
			} 
			$query="insert into feedback (feedback_id, name, phone_no, email_id, address, message_type, message, ip_address, feedback_date_time) values (".$ID.", '".$name."', '".$phone_no."', '".$email_id."', '".$address."', '".$message_type."', '".$message."','".$feedback_ip."','".$feedback_date_time."')";
			$Result = mysqli_query($link,$query) or die(mysqli_error());
			if($Result)
				$flag=1;
			else
				$flag=2;
		}
	}	
?>
<html>
<head>
	<title>WEBSITE</title>
	 <link rel="stylesheet" href="css/style.css" type="text/css" />
	 <style type="text/css">
		.right{text-align:right;}
		.bold{font-weight:bold;}
		.clear{clear:both;}
	</style>
	<style type="text/css">
		/* Validator error boxes */
		input:required:invalid, input:focus:invalid, textarea:required:invalid, textarea:focus:invalid
		{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT1JREFUeNpi/P//PwMpgImBRMACY/x7/uDX39sXt/67cMoDyOVgMjBjYFbV/8kkqcCBrIER5KS/967s+rmkXxzI5wJiRSBm/v8P7NTfHHFFl5mVdIzhGv4+u///x+xmuAlcdXPB9KeqeLgYd3bDU2ZpRRmwH4DOeAI07QXIRKipYPD35184/nn17CO4p/+cOfjl76+/X4GYAYThGn7/g+Mfh/ZZwjUA/aABpJVhpv6+dQUjZP78Z0YEK7OezS2gwltg64GmfTu6i+HL+mUMP34wgvGvL78ZOEysf8M1sGgZvQIqfA1SDAL8iUUMPIFRQLf+AmMQ4DQ0vYYSrL9vXDz2sq9LFsiX4dLRA0t8OX0SHKzi5bXf2HUMBVA0gN356N7p7xdOS3w5fAgcfNxWtn+BJi9gVVBOQfYPQIABABvRq3BwGT3OAAAAAElFTkSuQmCC);
			background-position:right top;background-repeat:no-repeat;box-shadow:none}

		input:required:valid,textarea:required:valid{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZZJREFUeNpi/P//PwMpgImBRMAy58QshrNPTzP8+vOLIUInisFQyYjhz98/DB9/fmT48/+35v7H+8KNhE2+WclZd+G0gZmJmYGThUNz1fUVMZtvbWT59eUXG9wGZIWMUPj993eJ5VeWxuy8veM/CzPL3yfvH/9H0QBSBDYZyOVm4mGYfn6q4cory5lYmFh+MrEwM/76/YsR7mk2ZjbWP///WP37/y8cqIDhx58fjvtu7XV6//ndT34G/v8FasUsDjKO/+A2PP3wpGLd+TVsfOz8XH6KAT+nHpokcu7h6d9q/BoMxToVbBYqlt9///+1GO4/WVdpXqY/zMqXn13/+vTjI9mj94/y//v9/3e9ZRObvYbDT0Y2xnm///x+wsfHB3GSGLf41jb3rv0O8nbcR66d+HPvxf2/+YZFTHaqjl8YWBnm/vv37yly5LL8+vuLgYuVa3uf/4T/Kd8SnSTZpb6FGUXwcvJxbAPKP2VkZESNOBDx8+9PBm4OwR1TwmYwcfzjsBUQFLjOxs52A2YyKysrXANAgAEA7buhysQuIREAAAAASUVORK5CYII=);
			background-position:right top;background-repeat:no-repeat}

	</style>
	<script type='text/javascript'>
	function refreshCaptcha(){
		var img = document.images['captchaimg'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
</script>
</head>
<body style="width:96%;background-color:  rgb(255,255,192);">
		<div style="width:100%;border:2px solid red;margin: 5px 10px 0px 10px;">
			<?php include("include/header.php");
			include("include/nav.php");
			?>
<div style="width:98%;padding:10px 50px 10px 50px;">
			<div style="float: left;width: 60%;padding: 5px 5px 5px 5px;">
				<form action="#" method="post" onsubmit="return confirm('Do you want to submit?');"  onreset="return confirm('Do you want to reset?');">
				<table border="0" cellpadding="3" cellspacing="5">
					<tr>
						<td><p class="right bold">Name : </p></td>
						<td><input type="text" id="TextName" name="TextName" maxlength="100" required></td>
					</tr>
					<tr>
						<td><p class="right bold">Phone No. : </p></td>
						<td><input type="text" id="TextPhone" name="TextPhone" maxlength="15" required></td>
					</tr>
					<tr>
						<td><p class="right bold">Email : </p></td>
						<td><input type="email" id="TextMail" name="TextMail" maxlength="100" required></td>
					</tr>
					<tr>
						<td><p class="right bold">Address : </p></td>
						<td><input type="text" id="TextAddress" name="TextAddress" maxlength="250" required></td>
					</tr>
					 <tr>
						<td><p class="right bold">Message Type : </p></td>
						<td>
							<select id='MessageType' name='MessageType' required>
								<option value=''>Select</option>
								<option value='Complaints'>Complaints</option>
								<option value='Enquiry'>Enquiry</option>
								<option value='Suggestion'>Suggestion</option>
								<option value='Others'>Others</option>
							</select>
						</td>
					</tr>
					<tr>
						<td valign="top"><p class="right bold">Message : </p></td>
						<td><textarea id="TextMessage" name="TextMessage" rows="4" cols="60" maxlength="800"></textarea></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Captcha code:</td>
						<td><img height="25px" src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
							<label for='captcha_code'>Enter the result here :</label>
							<input id="captcha_code" name="captcha_code" type="text">
							<br>
							Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
					</tr>
               		<tr>
						<td>&nbsp;</td>
						<td>
							<button type='submit' id='Submit' name='Submit' value='Submit'>Submit</button>&nbsp;&nbsp;
							<button type="reset" value='Reset'>Reset</button>
						</td>
				</tr>
				</table>
				</form>
			</div>
			<div style="float: right;width: 36%;padding: 5px 5px 5px 5px;">
			</div>
			<div style="clear: both;"></div>
</div>




			
<?php include("include/footer.php");
		?>
	</div>
	
</body>
</html>