function removeProfilePic() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById('userProfilePic').src='propics/client.png';
    }
  };
  xhttp.open("POST", "ajax/removeProfilePic.php", true);
  xhttp.send();
}

function readAllNoti(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	   document.getElementById("notiBell").innerHTML=0;
	}
  };
	xhttp.open("POST", "ajax/readAllNoti.php", true);
	xhttp.send();
}