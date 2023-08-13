<?php include("model/changepassword_code.php"); 
include("include/headtop.php"); ?>
<!-- CSS/Javascript Section -->
<script language="javascript">
function valid()
{
	if (document.getElementById("txtusername").value == "") 
	{
		alert("User Name can't be blank.");
		document.getElementById("txtusername").focus();
		return false;
	}	
	else if (document.getElementById("txtopwd").value == "") 
	{
		alert("Please, Enter Old Password.");
		document.getElementById("txtopwd").focus();
		return false;
	}	
	else if (document.getElementById("txtnpwd").value == "") 
	{
		alert("Please, Enter New Password.");
		document.getElementById("txtnpwd").focus();
		return false;
	}	
	else if (document.getElementById("txtnpwd").value != document.getElementById("txtcpwd").value) 
	{
		alert("New Password and Confirm Password are not matched.");
		document.getElementById("txtcpwd").focus();
		return false;
	}	
	else 
		return true; 
}
</script>
<?php  include("include/headfoot.php"); 
 include("include/bodytop.php"); 
 ?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
		<!-- Side Menu Start -->
          <ul class="nav navbar-nav side-nav">
            <?php include("include/sidemenu.php"); ?>
          </ul>
		  <!-- Side Menu End -->
		  
		  <!-- Top Menu Start -->
          <ul class="nav navbar-nav navbar-right navbar-user">
			<?php include("include/topmenu.php"); ?>
          </ul>
			<!-- Top Menu End -->
		</div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <?php include("model/changepassword_msg.php"); ?>
		<div class="row">
          <div class="col-lg-6">
            <form role="form" action="<?php echo $PHP_SELF;?>" method="post" name="rfqfrm" id="rfqfrm" enctype="multipart/form-data" onSubmit="javascript:return valid();">
			<fieldset>
				<table width="100%" align="center" cellspacing="2" cellpadding="2">
				<tr height="30px" ><td colspan="3">&nbsp;</td></tr>
				<tr height="30px" >
					<td width="40%">
						<label>User Name</label>
					</td>
					<td width="1%"><label>:&nbsp;</label></td>
					<td width="59%">
						<input name="txtusername" id="txtusername" type="text"  class="form-controlM" value="<?php echo $_SESSION['UserName'];?>" placeholder="User Name" required readonly />
					</td>
                 </tr>
				 <tr height="30px" >
					<td width="40%">
						<label>Old Password</label>
					</td>
					<td width="1%"><label>:&nbsp;</label></td>
					<td width="59%">
						<input class="form-controlM" name="txtopwd" id="txtopwd" type="password"  placeholder="Old Password" style="height: 29px;" required />
					</td>
                 </tr>
				 <tr height="30px" >
					<td width="40%">
						<label>New Password</label>
					</td>
					<td width="1%"><label>:&nbsp;</label></td>
					<td width="59%">
						<input name="txtnpwd" id="txtnpwd" type="password" class="form-controlM" placeholder="New Password" maxlength="15" style="height: 29px;" required />
					</td>
                 </tr>
				 <tr height="30px" >
					<td width="40%">
						<label>Confirm Password</label>
					</td>
					<td width="1%"><label>:&nbsp;</label></td>
					<td width="59%">
						<input name="txtcpwd" id="txtcpwd" type="password" class="form-controlM" placeholder="Confirm Password" maxlength="15" style="height: 29px;" required />
					</td>
                 </tr>
				 <tr height="30px" >
					<td width="40%">
						<label>&nbsp;</label>
					</td>
					<td width="1%"><label>&nbsp;</label></td>
					<td width="59%">
						<input type="submit" name="placeOrder" value="Save" />
					</td>
                 </tr>
				 <tr height="30px" ><td colspan="3">&nbsp;</td></tr>
				 </table>
			  </fieldset>
			</form>	 
		  </div>
		 </div>
	  
	
      </div><!-- /#page-wrapper -->
	  
<?php include("include/footer.php");  ?>
