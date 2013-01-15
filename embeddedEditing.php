<?php 
$password = "password";
if($_POST['pass']===$password and isset($_POST['pass'])){
    file_put_contents(preg_replace('/\.php$/', '', __FILE__)."_content", $_POST['data']);
}
?>
<html>
	<head>
		<title>Test TeacherWeb Copy Page</title>
		<script type="text/javascript">
			function showEditor(){
				document.getElementById("contentEditor").innerHTML='<form action="<?php echo basename(__FILE__);?>" method="POST"><textarea name="data" rows="10" cols="25">'+document.getElementById("content").innerHTML+'</textarea><br><input type="password" name="pass"><input type="submit"></form>'
			}
		
		</script>
	</head>
	<body>
		<pre>
            <div id="content">
            
			<?php echo file_get_contents(preg_replace('/\.php$/', '', __FILE__)."_content");?>
			
		    </div>
        </pre>
			<div id="contentEditor">
				<img id="banner" onclick="showEditor()" src="banner.png">
			</div>
	</body>
</html>