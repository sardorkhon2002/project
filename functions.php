<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php

require_once("db.php");

function is_user_logged_in(){
	$logged = false;
	if(isset($_SESSION['logged_in'])){
		$logged = true;
	}
	return $logged;
}

function is_admin($uid){
	global $mysqli;
	$admin_role = '2';
	$is_admin = false;
	$query = $mysqli->query("SELECT role FROM users WHERE id = '".$uid."'");
	if($query->num_rows > 0){
		$result = $query->fetch_assoc();
		if($result['role'] == $admin_role){
			$is_admin = true;
		}
	}
	return $is_admin;
}

function get_login($uid){
	global $mysqli;
	$query = $mysqli->query("SELECT login FROM users WHERE id = '".$uid."'");
	if($query->num_rows > 0){
		$result = $query->fetch_assoc();
		return $result['login'];
	}
}

function validate($data){
	global $mysqli;
	$data = stripslashes($data);
	$data = strip_tags($data);
	$data = $mysqli->real_escape_string($data);
	return $data;
}

function set_message($message, $type = "success"){
	$_SESSION['message_type'] = $type;
	$_SESSION['message'] = $message;
}

function display_message(){
	$type = "success";
	if(isset($_SESSION['message_type']) && !empty($_SESSION['message_type'])){
		$type = $_SESSION['message_type'];
	}
	if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
		$message = '<div class="alert alert-'.$type.'" role="alert">'.$_SESSION['message'].'</div>';
		unset($_SESSION['message_type']);
		unset($_SESSION['message']);
		return $message;
	}
}

function getCats(){
	global $mysqli;
	$output = "<option value='_none' selected> - Tanlash - </option>";
	$query = $mysqli->query("SELECT * FROM categories");
	if($query->num_rows > 0){
		while($result = $query->fetch_assoc()){
			$output .= '<option value="'.$result['id'].'">'.$result['name'].'</otion>';
		}
	}
	return $output;
}

function getCategoryByName($cat_id){
	global $mysqli;
	$query = $mysqli->query("SELECT name FROM categories WHERE id = '".$cat_id."'");
	$result = $query->fetch_assoc();
	return $result['name'];
}

/* function getBiletById($cat_id){
	global $mysqli;
	$query = $mysqli->query("SELECT name FROM categories WHERE id = '".$cat_id."'");
	$result = $query->fetch_assoc();
	return $result['name'];
} */

function get_available_tickets($cat_id = false){
	global $mysqli;
	$cat_query = '';
	if($cat_id){$cat_query = "AND cat_id = '".$cat_id."'";}
	$query = $mysqli->query("SELECT * FROM Bilet WHERE soni > 0 ".$cat_query." ORDER BY id DESC limit 0,3");
	$output =
		"<div class='well reset'>
			<table class='table table-hovered table-striped table-bordered' >";
	$output .=
		"<tr>
			<th>№</th>
			<th>Kategoriyasi</th>
			<th>Nomi</th>
			<th>Manzili</th>
			<th>Sana</th>
			<th>Narxi</th>
			<th>Biletlar soni</th>
			<th>Qator</th>
			<th>Qolgan joylar soni</th>
			<td></td>
		</tr>";
	while($result = $query->fetch_assoc()){
		$output .=
			"<tr>
				<td>".$result['id']."</td>
				<td>".getCategoryByName($result['cat_id'])."</td>
				<td>".$result['nomi']."</td>
				<td>".$result['manzili']."</td>
				<td>".$result['sana']."</td>
				<td>".$result['narxi']."</td>
				<td>".$result['soni']."</td>
				<td>".$result['qator']."</td>
				<td>".$result['joy']."</td>
				<td><a class='btn btn-success' href='/create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a></td>
			</tr>";
	};
	$output .="</table></div>";
	return $output;
}

function one(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =2  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;

	print one();
}
function two(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =2  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;
}

function three(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =3  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;
}

function four(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =4  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;
}

function five(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =5  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;
}

function six(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM Bilet WHERE  cat_id =6  AND soni > 0 ORDER BY id DESC limit 0,3");
	$output = '';
	while($result = $query->fetch_assoc()){
		$output .=
		"<div class='col-md-4 bilets' style='background-image: url(files/".$result['uri'].")' >
			<div class='cover2'>
				<h3 style='color:#fff;'>".$result['nomi']."
				</h3><a class='btn btn-primary' style='border-radius:0; border:2px solid #fff;' href='create_order.php?ticket_id=".$result['id']."'>Buyurtma berish</a>
			</div>
		</div>";
	};
	$output .="<a class='btn btn-success' style='margin:15px;' href='index.php?available'>Barcha biletlarni ko'rish</a>";
	return $output;
}



function getTicketId($get){
	if(isset($_GET['ticket_id'])){
		return $_GET['ticket_id'];
	}
}

function getTicketData($param, $bilet_id){
	global $mysqli;
	$query = $mysqli->query("SELECT ".$param." FROM Bilet WHERE id='".$bilet_id."'")->fetch_assoc();
	return $query[$param];
}

function getUsernameById($uid){
	global $mysqli;
	$userfullname = "";
	$query = $mysqli->query("SELECT * FROM users WHERE id = '".$uid."'");
	if($query->num_rows > 0){
		$result = $query->fetch_assoc();
		$userfullname = $result['login'];
	}
	return $userfullname;
}

function get_available_orders(){
	global $mysqli;
	$query = $mysqli->query("SELECT * FROM zakaz");
	$output =
		"<table class='table table-bordered table-striped'>";
	$output .=
		'<tr>
			<th>Categoriyasi</th>
			<th>Foydalanuchi</th>
			<th>Nomi</th>
			<th>Buyurtmachi F.I.O.</th>
			<th>Buyurtmachi Pasport Seriyasi</th>
			<th>Buyurtmachi telefon raqami</th>
			<th>Buyurtmachi manzili</th>
			<th>Biletlar soni</th>
			<th>Buyurtma qilingan qator</th>
			<th>Buyurtma qilingan joylar</th>
		</tr>';
	while($result = $query->fetch_assoc()){
		$output .=
			"<tr>
				<td>".getCategoryByName(getTicketData('cat_id',$result['bilet_id']))."</td>
				<td>".get_login($result['uid'])."</td><td>".getTicketData('nomi',$result['bilet_id'])."</td>
				<td>".$result['user_fname'].$result['user_lname']."</td><td>".$result['pass_seriya']."</td>
				<td>".$result['phone']."</td>
				<td>".$result['manzil']."</td>
				<td>".$result['soni']."</td>
				<td>".$result['qator']."</td>
				<td>".$result['joy']."</td>
			</tr>";
	}
	$output .= "</table>";
	return $output;
}

?>