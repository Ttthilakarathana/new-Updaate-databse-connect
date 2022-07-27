
<?php  require_once('inc/connection.php'); ?>

  <?php
    if (isset($_POST['submit'])) {
      $ItemName = mysqli_real_escape_string($connection, $_POST['ItemName']);
      $Description = mysqli_real_escape_string($connection, $_POST['Description']);
      $ItemQunatity = mysqli_real_escape_string($connection, $_POST['ItemQunatity']);
      $ItemPrice = mysqli_real_escape_string($connection, $_POST['ItemPrice']);

  $query = "INSERT INTO items ( ";
  $query .= "item_name, description	, quantity, item_price";
  $query .= ") VALUES (";
  $query .= "'{$ItemName}', '{$Description}', '{$ItemQunatity}','{$ItemPrice}'";
  $query .= ")";

  $result = mysqli_query($connection, $query);

    if ($result) {
      // query successful... redirecting to users page
      header('Location: Remove.php? user_added=true');
    } else {
      $errors[] = 'Failed to add the new record.';
    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styleit.css">
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



    <div class="main_content">
        <div class="header">Add Item</div>
        <div class="info">





        <form action="additem.php" method="post" class="userform">

            <div class="form first">

                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Item Name</label>
                            <input type="text" name="ItemName"  placeholder="" required >
                        </div>


                        <div class="input-field">
                            <label>Item Number</label>
                            <input type="text" name="ItemNumber" placeholder="" required>
                        </div>



                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="Description"  placeholder="" required>
                        </div>
                    </div>
                </div>




                        <div class="input-field">
                            <label>Item Qunatity</label><br>
                            <input type="number" name="ItemQunatity"  placeholder="Item Qunatity" required>
                        </div>

                <div class="input-field">
                            <label>Item Price</label><br>
                            <input type="text"  name="ItemPrice"   placeholder="Price" required>
                        </div>


<div class="imguploader">
  <input type="file" multiple onchange="preview()" name="photo">
  <img id="frame" src="" width="100px" height="100px"/>
</div>

            </div>
            <div class="btn123">
          <!--  <input type="submit" placeholder="Save" class="button" value="ADD" name="submit"> -->
              <button style="background-color: blue; color: #ffffff;border : none; border-radius: 7px;color: #333; padding: 15px 32px " type="submit" name="submit" value="ADD"  >ADD</button>
            </div>
        </form>



	  </div>
            <div>
            </div>

        <script>function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}</script>

        </body>
</html>
<? php mysqli_close($connection); >
