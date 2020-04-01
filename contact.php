<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Contact</legend>
            <div class="post">

									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}

											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}

										?>

										<table>
											<form action="process_register.php" method="POST">

												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
												<tr>

                          <tr><td>&nbsp;</tr>

                          <tr>
  													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
  													<td><input type='text' name='mail' size="30"></td>

  												</tr>

                          <tr><td>&nbsp;</tr>

                          <tr>
                            <td><b>Comment:</b>&nbsp;&nbsp;</td>
                            <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
                            <td>&nbsp;</td>
                          </tr>


													<td colspan='2' align='center'>
														<input type='submit' value="  Submit  ">
													</td>
												</tr>
											</form>
										</table>
									</div>
                </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
  require_once "./template/footer.php";
?>
