<?php  require_once('inc/connection.php'); ?>
<?php
	 $user_list  = '';

	  $query = "SELECT * FROM oders WHERE id ORDER BY item";
		$users = mysqli_query($connection, $query);

		if ($users) {
				while ($user = mysqli_fetch_assoc($users)) {
				$user_list .= "<tr>";
				$user_list .= "<td>{$user['id']}</td>";
				$user_list .= "<td>{$user['item']}</td>";
				$user_list .= "<td>{$user['date']}</td>";
				$user_list .= "<td>{$user['c_name']}</td>";
				$user_list .= "<td>{$user['phon_number']}</td>";
				$user_list .= "<td>{$user['address']}</td>";
				$user_list .= "<td>{$user['quantity']}</td>";
				$user_list .= "<td>{$user['t_price']}</td>";
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
	<link rel="stylesheet" href="button.css"
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
            <th>Item Numbers</th>
            <th>Item Names</th>
            <th>Order Date</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Adress</th>
            <th>Quantity</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>

				<?php echo $user_list ; ?>
    <!--    <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>T shert</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>
							<button type="button" class="btnz">Paid</button>
                <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>Frog</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>
							<button type="button" class="btnz">Paid</button>
               <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>-->
      <!--      </td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>Trowser</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>
							<button type="button" class="btnz">Paid</button>
                <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>T Shaert</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>
							<button type="button" class="btnz">Paid</button>
                <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>
            </td>
        </tr>
       <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>T Shert</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>
							<button type="button" class="btnz">Paid</button>
                <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><a href="#">000000001</a></td>
            <td>Shert</td>
            <td>2022/07/14</td>
            <td>KLCW Dias</td>
            <td>+94703253342</td>
            <td>No 59, Wellawaya,Uva Province,Sri lanka</td>
            <td>2</td>
            <td>

							<button type="button" class="btnz" >Paid</button>
                <select name="Status" id="status">
                        <option value="Mark As Shipped">Mark As Shipped</option>
                        <option value="Add Tracking">Add Tracking</option>
                        <option value="Give Feedback">Give Feedback</option>
                </select>
            </td>
        </tr>-->
    </tbody>
</table>
    </div>
    </body>
</html>
