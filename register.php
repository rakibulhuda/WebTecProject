<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>

				    <legend>Registration</legend>

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
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>


												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">

															<option>Ahmedabad
															<option>Baroda
															<option>Jamnagar
															<option>Rajkot
															<option>Porbandar
															<option>Anand
															<option>Surat
															<option>Surendranagar
															<option>Jamnagar
															<option>Junagadh
															<option>Amreli
															<option>Bhavnagar
															<option>Mehsana


													</select>

												</tr>

												<tr><td>&nbsp;</tr>



												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
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
