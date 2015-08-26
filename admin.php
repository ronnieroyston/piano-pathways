<?php include 'includes/session_members.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Admin';
    include 'includes/head.php';
?>
<body style='background-image: url("../images/fabric.png");'>
    <div id="cover"></div>  
    <?php include 'includes/alert.php';?>
    <div class="container">
        <div class="row text-center">
            <h2><?php echo $message; ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                    /*** connect to database ***/
                    /*** mysql hostname ***/
                    $mysql_hostname = '127.8.99.130';
                            
                    /*** mysql username ***/
                    $mysql_username = 'adminRqmldJy';
                            
                    /*** mysql password ***/
                    $mysql_password = 'gQDlAVx3a66L';
                            
                    /*** database name ***/
                    $mysql_dbname = 'thepianopathway';
                             
                    try {
                        $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                        $sql = 'SELECT * FROM phpro_users';
                         $q = $conn->query($sql);
                         $q->setFetchMode(PDO::FETCH_ASSOC);                        
                    } catch (PDOException $pe) {
                        die("Could not connect to the database $dbname :" . $pe->getMessage());
                    }                                
                ?>
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                    </tr>
                <?php foreach( $results as $row ){
                    echo "<tr><td>";
                    echo $row['phpro_firstname'];
                    echo "</td><td>";
                    echo $row['phpro_lastname'];
                    echo "</td><td>";
                    echo $row['phpro_email'];
                    echo "</td><td>";
                    echo $row['phpro_telephone'];
                    echo "</td><td>";
                    echo "<a class='black textshadow' href='#'>detail</a>";
                    echo "</td>";
                    echo "</tr>";
                    }
                ?>
                </table>
            </div>
        </div>            
    </div>
</body>
</html>