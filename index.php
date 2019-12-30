<!DOCTYPE html>
<?php 
	include "show-data.php";
	include "update-data.php";
?>
<html>
<head>
	<title>Profile Page</title>

	<!-- Responsive -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav>
		<div class="menu-mobile">
			<a href="#" onclick="showMenu()">MENU</a>
		</div>
		<ul id="menu">
			<li><a href="#">HOME</a></li>
			<li><a href="#">PRODUCT</a></li>
			<li><a href="#">GALERY</a></li>
			<li><a href="#">NEWS</a></li>
			<li><a href="#">MY INVERTORY</a></li>
		</ul>
	</nav>

<!-- Profile -->
	<section id="box-profile">
		<div class="img-profile">
			<div class="photo" style="background-image: url(img/profile.PNG);"></div>
		</div>
		<div class="description">
			<h1 id="pname"> <?php echo $nama; ?> </h1>
			<p id="prole"> <?php echo $role; ?>  </p>
			<a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
			<a href="" class="button border-blue">Resume</a>
		</div>
		<div class="information">
			<div class="data">
				<P class="field">Availability</P>
				<p id="pavailable" class="text-gray"><?php echo $availability; ?></p>
			</div>
			<div class="data">
				<p class="field">Age</p>
				<P id="page" class="text-gray"><?php echo $age; ?></P>
			</div>
			<div class="data">
				<p class="field">Location</p>
				<p id="plocation" class="text-gray"><?php echo $location; ?></p>	
			</div>
			<div class="data">
				<p class="field">Email</p>
				<p id="pemail" class="text-gray"><?php echo $email; ?></p>
			</div>
			
		</div>
	</section>

	<!-- form -->
	<section id="input-form">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form">
				<label for="">Id User</label>
				<input id="inpiduser" type="text" name="id_user" value="<?php echo $id; ?>" placeholder="">
			</div>
			<div class="form">
				<label for="">Name</label>
				<input id="inpname" type="text" name="nama" placeholder="">
			</div>
			<div class="form">
				<label for="">Role</label>
				<input id="inprole" type="text" name="role">
			</div>
			<div class="form">
				<label for="">Availability</label>
				<input id="inpavailable" type="text" name="Availability">
			</div>
			<div class="form">
				<label for="">Age</label>
				<input id="inpage" type="number" name="age">
			</div>
			<div class="form">
				<label for="">Location</label>
				<input id="inplocation" type="text" name="location">
			</div>
			<div class="form">
				<label for="">Email</label>
				<input id="inpemail" type="text" name="email">
			</div>
			<div class="form">
				<input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>


	<script type="text/javascript">
		var formMenu = document.getElementById("input-form")
			formMenu.style.display = "none";

			function editForm(){
				if(formMenu.style.display === "none") {
					formMenu.style.display = "block";
				}else{
					formMenu.style.display = "none";	
				}
				var name = document.getElementById("pname").innerHTML;
				var role = document.getElementById("prole").innerHTML;
				var available = document.getElementById("pavailable").innerHTML;
				var age = document.getElementById("page").innerHTML;
				var location = document.getElementById("plocation").innerHTML;
				var email = document.getElementById("pemail").innerHTML;

				document.getElementById("inpname").value = name;
				document.getElementById("inprole").value = role;
				document.getElementById("inpavailable").value = available;
				document.getElementById("inpage").value = age;
				document.getElementById("inplocation").value = location;
				document.getElementById("inpemail").value = email;
			}

		function showMenu(){
			var menu = document.getElementById("menu");
			var box = document.getElementById("box-profile");
			if (menu.style.display === "block") {
				menu.style.display = "none";
				box.style.paddingTop = "0px";
			} else {
				menu.style.display = "block";
				box.style.paddingTop = "100px";
			}
		}
	</script>

</body>
</html>
