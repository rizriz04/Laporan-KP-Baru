<?php
// membuat tombol KIRIM untuk melakukan undian dan tombol PEMENANG untuk melihat pemenang 
echo"
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Membuat undian Doorprize dengan PHP</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
	</head>
	<body>
	    <div class='container'>
	    	<form action='hasil.php' method='post' enctype='multipart/form-data'>
                <div class='form-group '>
                    <div>
                        <button type='submit' name='submit'  class='btn btn-primary' style='margin-top: 50px;'><strong>KIRIM</strong></button>
                        <a href='/pemenang.php' class='btn btn-success' style='margin-top: 50px;'><strong>PEMENANG</strong></a>
                    </div>
                </div>
            </form>
	    </div>
	</body>
</html>
";
?>