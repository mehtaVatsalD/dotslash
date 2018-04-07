<?php
session_start();
if(isset($_SESSION['notVerified']))
{
	header('Location:verifyMail.php');
}
if (!isset($_SESSION['userLogged'])) {
	header('Location:login.php');
}
include_once('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>TradIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobtab.css">
</head>
<body>
	<div class="containerp">
		<?php include_once('header.php'); ?>
		<div class="rowp">
			<div class="icont">
				<div id="sellBox">
					<div id="sellWordDiv"><span id="sellWord">Sell</span></div>
					<form name="sell">
						<table id="sellTable">
							<tr>
								<td colspan="2"><p class="formRemark"><span class="starImp">*</span> Denotes Mandatory Fields</p></td>
							</tr>
							<tr>
								<td class="signTd"><label for="iname" class="slabels">Item Name<span class="starImp">*</span> :</label></td>
								<td><span class="starImpm">*</span><input type="text" name="iname" class="signupips" placeholder="Item Name"></td>
							</tr>
							<tr>
								<td class="signTd"><label for="itype" class="slabels">Item Type<span class="starImp">*</span> :</label></td>
								<td>
									<span class="starImpm">*</span>
									<select class="signupips">
											<option>Book</option>
											<option>Drawing Instrument</option>
											<option>Musical Instrument</option>
											<option>Electronic Gadget</option>
											<option>Cycle</option>
											<option>Lab Equipment</option>
											<option>Other</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="signTd"><label for="description" class="slabels">Description<span class="starImp">*</span> :</label></td>
								<td>
									<p style="color: #607d8b;"><span class="starImpm">*</span>Description:</p>
									<textarea class="tadesign" cols="20" rows="5"></textarea>
								</td>
							</tr>
							<tr>
								<td class="signTd"><label for="price" class="slabels">Price(INR)<span class="starImp">*</span> :</label></td>
								<td><span class="starImpm">*</span><input type="text" name="price" class="signupips" placeholder="Price" style="width: 75%;"><span id="rupeeSymbol"><i class="fa fa-rupee"></span></i></td>
							</tr>
							<tr>
								<td class="signTd"><label for="address" class="slabels">Address :</label></td>
								<td>
									<p style="color: #607d8b;">Address:</p>
									<textarea class="tadesign" cols="20" rows="5"></textarea>
								</td>
							</tr>
							<tr>
								<td class="signTd"><label for="amobno" class="slabels">Alternate Mobile Number :</label></td>
								<td><p style="color: #607d8b;">This should not be that you registered</p><input type="text" name="amobno" class="signupips" placeholder="Alernate Mobile Number"></td>
							</tr>
							<tr>
								<td class="signTd"><label for="sellPics" class="slabels">Upload Pictures<span class="starImp">*</span>:</label></td>
								<td id="ImagesSellTd">
									<p style="color: #607d8b;"><span class="starImpm">*</span>Upload Pictures</p>
									<div class="uploadDivSell btn btn-info">
    									<span class="plus"><i class="fa fa-plus"></i></span>
    									<input type="file" accept=".jpg,.jpeg,.png" class="sellPics" name="sellpics" onchange="uploadImgSell(this)" />
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" class="btn btn-primary" value="POST" id="signupBtn">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/int.js"></script>
</html>