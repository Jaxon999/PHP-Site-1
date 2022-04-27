<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->

<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <style type="text/css">
    	.header
    	{
    		width: 100%;
    		height: 10%;
    		background-color: lightskyblue;
            color: olive;
    	}
		.footer
		{
    		width: 100%;
    		height: 10%;
    		background-color: lightslategray;
    		position: absolute;
    		bottom: 0%;
            color: olive;
    	}
        #Logo
        {
            width: 7%;
            height: 10%;
            position: absolute;
            top: 0%;

        }
    </style>
</head>
<body>
<?php
if (isset($_POST['choice'])){
    if ($_POST['choice'] == "Logout"){
     header('Location: Logout.php');
     }
}
?>



<div class="header">
	<center><h1>Jaxon's Shopping mall</h1></center>
    <center><h3>CSC-155-201H</h3></center>
    <img id="Logo" src="img/Logo.png" alt="Computer store logo">
</div>