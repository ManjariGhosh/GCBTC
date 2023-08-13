<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	
	<!-- Import Google Font - Yanone Kaffeesatz  -->	
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
 
	<title>Admin Panel</title> 
	
	<style type="text/css"> 
	
	* { margin: 0px; padding: 0px; }
	
	body { 
		margin: 0 auto; 
		background: #222222; 	
		color: #555;	 
		width: 800px; 
				
		/* make reference to the Yanone Kaffeesatz font */
		font-family: 'Yanone Kaffeesatz', arial, sans-serif;
	}
	
	h1 { 
		color: #555; 
		margin: 0 0 2px 0; 
	}	
	h5{
	   color: #555; 
		margin: 0 0 20px 0;
		font-family: Verdana;
	}
	label {	
		font-size: 20px;
		color: #666; 
	}
	
	form { 
		float: left;
		border: 1px solid #ddd; 
		padding: 30px 40px 20px 40px; 
		margin: 130px 0 0 0;
		width: 715px;
		background: #fff;
				
		/* -- CSS3 - define rounded corners for the form -- */	
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px; 		
		
		/* -- CSS3 - create a background graident -- */
		background: -webkit-gradient(linear, 0% 0%, 0% 40%, from(#EEE), to(#FFFFFF)); 
		background: -moz-linear-gradient(0% 40% 90deg,#FFF, #EEE); 
		
		/* -- CSS3 - add a drop shadow -- */
		-webkit-box-shadow:0px 0 10px #ccc;
		-moz-box-shadow:0px 0 10px #ccc; 
		box-shadow:0px 0 10px #ccc;		 		
	}	
	
	fieldset { border: none; }
	
	#user-details { 
		float: left;
		width: 230px; 
	}
	
	#user-message { 
		float: right;
		width: 405px;
	}
	
	input, textarea { 		
		padding: 8px; 
		margin: 4px 0 20px 0; 
		background: #fff; 
		width: 220px; 
		font-size: 14px; 
		color: #555; 
		border: 1px #ddd solid;
		
		/* -- CSS3 Shadow - create a shadow around each input element -- */ 
		-webkit-box-shadow: 0px 0px 4px #aaa;
		-moz-box-shadow: 0px 0px 4px #aaa; 
		box-shadow: 0px 0px 4px #aaa;
		
		/* -- CSS3 Transition - define what the transition will be applied to (i.e. the background) -- */		
		-webkit-transition: background 0.3s linear;							
	}
	
	textarea {		
		width: 390px; 
		height: 175px; 		 		
	}
	
	input:hover, textarea:hover { 
		background: #eee; 
	}
		
	input.submit { 	
		width: 150px; 
		color: #eee; 
		text-transform: uppercase; 
		margin-top: 10px;
		background-color: #18a5cc;
		border: none;
		
		/* -- CSS3 Transition - define which property to animate (i.e. the shadow)  -- */
		-webkit-transition: -webkit-box-shadow 0.3s linear;
		
		/* -- CSS3 - Rounded Corners -- */
		-moz-border-radius: 4px; 
		-webkit-border-radius: 4px;
		border-radius: 4px; 
						
		/* -- CSS3 Shadow - create a shadow around each input element -- */ 
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#18a5cc), to(#0a85a8)); 
		background: -moz-linear-gradient(25% 75% 90deg,#0a85a8, #18a5cc);		
	} 
	
	input.submit:hover { 		
		-webkit-box-shadow: 0px 0px 20px #555;
		-moz-box-shadow: 0px 0px 20px #aaa; 
		box-shadow: 0px 0px 20px #555;	
		cursor:  pointer; 
	} 		
	.style10
        {
            color: #FF3300;
            font-weight: bold;
            font-family: Verdana;
            font-style: italic;
            font-size: x-small;
        }			
	</style> 
	<script type ="text/javascript" >
function valid()
{
    if (document.getElementById("UserName").value == "")
    {
    alert("User Name Can't Be Blank.");
	document.getElementById("UserName").focus();
    return false;
    }
    else if (document.getElementById("Password").value == "")
    {
    alert("Password Can't Be Blank.");
	document.getElementById("Password").focus();
    return false;
    }
    else
    {
    return true; 
    }
}

if (window.Event)
  document.captureEvents(Event.MOUSEUP);

function nocontextmenu() {
  event.cancelBubble = true, event.returnValue = false;

  return false;
} 

function norightclick(e) {
  if (window.Event) {
    if (e.which == 2 || e.which == 3) return false;
  }
  else if (event.button == 2 || event.button == 3) {
    event.cancelBubble = true, event.returnValue = false;
    return false;
  }
}

if (document.layers)
  document.captureEvents(Event.MOUSEDOWN);

document.oncontextmenu = nocontextmenu;
document.onmousedown = norightclick;
document.onmouseup = norightclick;

</script>
</head> 
 
<body> 
	
	<form method="post" action="login.php" onsubmit ="javascript: return valid();">
	
		<h1>Website Administrative Panel - GCBT College</h1>
		<fieldset id="user-details">	
			
			<label for="name">User Name:</label>
			<input type="text" name="UserName" id="UserName" value="" /> 
		
			
			<label for="phone">Password:</label> 
			<input type="password" name="Password" id="Password" value=""  /> 
			<input type="submit" value="Login" name="submit" class="submit" />
			 <br/>
					<span class="style10">
                        <?php $qryid=0;
						if(isset($_GET['id']))
							$qryid=$_GET['id'];
                        if(!$qryid)
	                        $qryid=0;
                        if($qryid==1)  
                        echo "<b>  Invalid User Name and Password.</b>";
                        if($qryid==2)  
                        echo "<b>  User Name or Password can't be blank.</b>";
                        if($qryid==3)  
                        echo "<b>  Database connection error.</b>";
                        ?>
                     </span>
		</fieldset><!--end user-details-->
		
		<fieldset id="user-message">
				<img src="images/login.png" alt="Login" >
 		</fieldset><!-- end user-message -->
		 
	</form>	
	<br/>&nbsp;<br/>
 <center><div><font color="white">Developed By: IBS Consultancy Services Pvt. Ltd</font></div></center>

</body> 
</html> 