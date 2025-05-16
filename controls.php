<?php 
session_start();

if(isset($_POST["name_user"])){
	$_SESSION["name_user"] = trim(htmlspecialchars($_POST["name_user"]));
}

//echo $_SESSION["name_user"] ;
?>

<meta charset="UTF-8">

<script src="./jquery-3.7.1.js" sourcemappingurl="./jquery-3.7.1.min.map"></script>

<style>

#menu{
	position: absolute; 
	background-color: lightgray;
	height: 40px;
	width: 450px;
	border-radius: 10px;
}
#menubild{
	height: 40px;
	width: 40px;
}

</style>

<div id="menu">
	<div style="position: absolute; left: 10px; font-size: 30px;" id="user_container">
		<form action="./controls.php" method="POST">
			<input type="submit" style="width: 30px;" value="ok" id="user_ok"/>
			<input type="text" name="name_user" id="user_name" style="width: 130px;" value="<?php echo $_SESSION['name_user']; ?>" placeholder="user name"/>
		</form>
	</div>
	
	<div style="position: absolute; left: 200px; font-size: 30px;"><a onclick="window.parent.location.href = 'index.php';">⌂</a></div>
	<div style="position: absolute; left: 250px; color: black; font-size: 20px; margin-top: 10px;">ⓩⓤⓚⓤⓝⓕⓣ</div>
	<div style="position: absolute; right: 0px; font-size: 30px;"><a onclick="history.back()">🔙</a></div>
	
</div>
<script>
$(document).ready(function() {
	$(window).click(function() {
	  $("#user_ok").hide("fast");
		$("#user_container").css("top", "10px");
	});

	$("#user_name").on("click", function(event) {
		$("#user_ok").show("fast");
		$("#user_container").css("top", "0px");
		event.stopPropagation();
	});
});
</script>