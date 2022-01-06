</!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css"> 
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script> 
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="Index.css">
    <link rel="icon" href="../images/Rotan.png">
</head>
<body style="background-image: url(../images/wave.png);" style="background-size: auto;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
            	<form action="Login_P.php" method="post">
                    <div class="container">
                        <h5 class="text-center" style="font-family: mulilight;">LOGIN ADMIN</h5>
                        <hr>
                        <form>
                            <div class="form-group">
                                <input style="font-family: mulilight;" type="user" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <input style="font-family: mulilight;" type="password" name="password" class="form-control" placeholder="Password" required>
                            <button type="submit" class="btn btn-primary" style="font-family: mulilight;">LOGIN</button>
                            <button type="reset" class="btn btn-danger" style="font-family: mulilight;">RESET</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-8">
                    <div class="jumbotron">
                        <p class="text1" style="font-family: mulilight;">WELCOME <br>
                            <p class="text2" style="font-family: mulilight;">ADMINISTATOR <br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>