<?php
	session_start();
	include_once('../dbconfig.php');
	if (isset($_SESSION['userLogged'])) {
		$item=$_POST['item'];
		$likedBy=$_SESSION['userLogged'];
		$isthere=mysqli_fetch_assoc(mysqli_query($dbase,"SELECT `iid` FROM `interested` WHERE `id`='$item' AND `likedBy`='$likedBy'"));
		$isthere=$isthere['iid'];
		if(empty($isthere))
		{
			mysqli_query($dbase,"INSERT INTO `interested` (`likedBy`,`id`) VALUES ('$likedBy','$item')");
			$send="Not Interested";

			$totalCount=mysqli_fetch_assoc(mysqli_query($dbase,"SELECT COUNT(`iid`) FROM `interested` WHERE `id`='$item'"));
			$totalCount=$totalCount['COUNT(`iid`)'];
			if($totalCount>=2){
				$user=mysqli_fetch_assoc(mysqli_query($dbase,"SELECT `uname` FROM `sell` WHERE `id`='$item'"));
				$user=$user['uname'];
				mysqli_query($dbase,"INSERT INTO `notifications` (`notify`,`notifier`,`notification`,`category`) VALUES ('$user','','OHO Auction','auctionAvail')");
			}
		}
		else
		{
			// $isthere=$isthere['iid'];
			mysqli_query($dbase,"DELETE FROM `interested` WHERE `iid`='$isthere'");
			$send="Interested";
		}
	}
	echo $send;

	
?>