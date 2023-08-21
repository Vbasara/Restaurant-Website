<?php
include_once ('Eden_menu.php');
?>

<div class="container">
<?php
		if(isset($_POST["submit"])){
			$search = mysqli_real_escape_string($link, $_POST['searchField']);
			$sql = "SELECT * FROM eden_menu WHERE item_name LIKE '%$search%' ";
			
			$result = mysqli_query($link, $sql);
			$queryResult = mysqli_num_rows($result);
			
			if($queryResult > 0) {
				while ($row = mysqli_fetch_assoc($result)){
		
				print $row->item_name; 
				print $row->price;
		
				}
			}else{
				print "Sorry, We do not have that on the menu";
		}
	}
?>
</div>
