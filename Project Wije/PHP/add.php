<?php session_start(); ?>
<?php 
    //Cheking user is loggen in correctly
    if (!isset($_SESSION['fname'])){
        header('Location: Login.html');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Add_products</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:wght@100;200;300;400;500&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,100;1,300;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="back.css" />
    <link rel="stylesheet" type="text/css" href="add.css" />
</head>

<body>
    <?php 
        error_reporting(0);

        $select_val = $_POST['table_select'];

        if ($select_val == 'item'){
            $_SESSION['table'] = $_POST['table_select'];
            //data for item table
            $data_col1 =    '<table>
                                <tr>
                                    <td><label>Part Number:-</label></td>
                                    <td><input type="text" name="part_no" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Description:-</label></td>
                                    <td><input type="text" name="description" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>PR Code:-</label></td>
                                    <td><label class="radio"><input type="radio" name="pr_code" value="2W" required checked />2W</label>
                                    <label class="radio"><input type="radio" name="pr_code" value="3W" required  />3W</label></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Date</label></td>
                                    <td><input type="text" name="date" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Part Type:-</label></td>
                                    <td><label class="radio"><input type="radio" name="part_type" value="genuine" required checked />Genuine</label>
                                    <label class="radio"><input type="radio" name="part_type" value="local" required />Local<label></td>
                                </tr>
                            </table>';
        } 

        if ($select_val == 'seller'){
            $_SESSION['table'] = $_POST['table_select'];
            //data for seller table
            $data_col1 =    '<table>
                                <tr>
                                    <td><label>Seller ID:-</label></td>
                                    <td><input type="text" name="seller_id" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Seller Name:-</label></td>
                                    <td><input type="text" name="seller_name" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Contact Number:-</label></td>
                                    <td><input type="text" name="contact_no" class="text_input" required /></td>
                                </tr>
                            </table>';  
        }

        if ($select_val == 'inventory'){
            $_SESSION['table'] = $_POST['table_select'];
            //data for inventory table
            $data_col1 =    '<table>
                                <tr>
                                    <td><label>Part Number:-</label></td>
                                    <td><input type="text" name="part_no" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Seller ID:-</label></td>
                                    <td><input type="text" name="seller_id" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Rate:-</label></td>
                                    <td><input type="text" name="rate" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Retail Normal:-</label></td>
                                    <td><input type="text" name="retail_nor" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Retail Dis:-</label></td>
                                    <td><input type="text" name="retail_dis" class="text_input" required /></td>
                                </tr>
                            </table>';
            
            $data_col2 = '<table>
                                <tr>
                                    <td><label>Profit:-</label></td>
                                    <td><input type="text" name="profit" class="text_input" required /></td>
                                </tr>
                                    <br>
                                <tr>
                                    <td><label>Sold:-</label></td>
                                    <td><input type="text" name="sold" class="text_input" required /></td>
                                </tr>
                            </table>';
        }
    
    ?>
    <nav>
        <ul>
            <li><a href="main.php">Search</a></li>
            <li><a href="update.php">Update</a></li>
            <li>
                <a href="add.php"><span>Add</span></a>
            </li>
            <li><a href="calculate.php">Calculate</a></li>
        </ul>
        <p class="nav"><?php echo $_SESSION['fname'];?> <?php echo $_SESSION['lname'];?></p>
        <button onclick="window.location.href='logout.php'" class="log-out">
            <ion-icon name="log-out-outline"></ion-icon>
        </button>
    </nav>
    <section>
        <div class="wrapper">
            <!--Selection form-->
            <form action="add.php" method="POST" class="select">
                <div class="inputbox1">
                    <label for="table" class="table">Select Table:-</label>
                    <select name="table_select" id="table_select" calss="db">
                        <option value="item" <?php if ($_POST["table_select"] == 'item') echo 'selected' ?>>ITEMS</option>
                        <option value="seller" <?php if ($_POST["table_select"] == 'seller') echo 'selected' ?>>SELLER</option>
                        <option value="inventory" <?php if ($_POST["table_select"] == 'inventory') echo 'selected' ?>>INVENTORY</option>
                    </select>
                    <button class="table_select" id="table_select" type="submit" value="Select">Select</button>
                </div>
            </form>
            <hr>
            <div class="inputbox2">
                <form action="insert.php" method="POST">
                    <div class="container">
                        <div class="sec1">
                            <?php echo $data_col1; $data_col1 = ''; ?>
                        </div>
                        <div class="sec2">
                            <?php
                                if(isset($data_col2)){
                                    echo $data_col2;
                                    $data_col2 = '';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="reset" class="insert_reset" id="insert" value="reset">clear all</button>
                        <button type="submit" class="insert_submit" id="insert" value="submit">submit</button>
                    </div>
                </form>
                
            </div> 
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>