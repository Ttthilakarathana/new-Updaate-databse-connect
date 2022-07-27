<?php  require_once('inc/connection.php'); ?>
<?php
	 $user_list  = '';

	  $query = "SELECT * FROM items WHERE id ORDER BY item_name";
		$users = mysqli_query($connection, $query);

		if ($users) {
				while ($user = mysqli_fetch_assoc($users)) {
				$user_list .= "<tr>";
				$user_list .= "<td>{$user['id']}</td>";
				$user_list .= "<td>{$user['item_name']}</td>";
				$user_list .= "<td>{$user['img']}</td>";
				$user_list .= "<td>{$user['description']}</td>";
				$user_list .= "<td>{$user['quantity']}</td>";
				$user_list .= "<td>{$user['item_price']}</td>";
				$user_list .= "<td><a href=\"delete-user.php?user_id={$user['id']}\" onclick=\"return confirm('Are You sure?');\">Remove</a></td>";
				$user_list .= "</tr>";

	}
			// code...
		}else {
			echo "Database query Failed";
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="stylerem.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <div class="picad"> <img src="Admin-Profile-Vector-PNG-Pic.png" width ="100px" height="100px" align="center"></div>
        <ul>
            <li><a href="index11.html"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="indexmanger.php"><i class="fa fa-tasks" aria-hidden="true"></i> Manage Order</a></li>
            <li><a href="additem.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Item</a></li>
            <li><a href="Remove.php"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove Item</a></li>

        </ul>
        <div class="social_media">
          <div class="signb">
            <h3>Sign Out</h3>
          </div>
      </div>
    </div>

<table class="dataTable">
    <thead>
        <tr>
            <th>Item_Numbers</th>
            <th>Item_Names</th>
            <th>Images</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Item Price</th>
            <th>Buttons</th>
        </tr>
    </thead>

		<?php echo $user_list ; ?>
  <!--  <tbody>
        <tr>
            <td><a href="#">000000001</a></td>
            <td>Teashrt</td>
            <td><img src="img/tshrt.jpg" width="50px" height="80px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">000000002</a></td>
            <td>frog</td>
            <td><img src="img/EA210.jpg" width="70px" height="70px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">000000003</a></td>
            <td>T shert</td>
            <td><img src="img/R.jpg" width="70px" height="70px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">000000004</a></td>
            <td>Teashrt</td>
            <td><img src="img/tsh.jpg" width="70px" height="70px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">000000005</a></td>
            <td>T shaert</td>
            <td><img src="img/Opp.jpg" width="70px" height="70px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">000000006</a></td>
            <td>Frog</td>
            <td><img src="img/OIP.jpg" width="70px" height="70px" ></td>
            <td>03/30/1940</td>
            <td>12</td>
            <td>$78</td>
            <td>
                <button class="button_tb">Remove</button>
            </td>
        </tr>
    </tbody> -->
</table>
    </div>
    </body>
</html>
