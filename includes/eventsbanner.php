<? php
/*** connect to database ***/;
/*** mysql hostname ***/;
$mysql_hostname = "127.8.99.130";
                                    
/*** mysql username ***/;
$mysql_username = "adminRqmldJy";
                                    
/*** mysql password ***/
$mysql_password = 'gQDlAVx3a66L';
                                    
/*** database name ***/
$mysql_dbname = 'thepianopathway';
    
try {
  $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
  $sql = 'SELECT * FROM events WHERE event_time >= CURDATE() ORDER BY event_time LIMIT 3';
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);                        
} catch (PDOException $pe) {
  die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$result = $this->db->query($sql);
$result->rowCount()

<!-- Indicators -->
echo '<div class="row">';
  echo '<div class='col-sm-8'>';

    while ($r = $q->fetch()):
    echo htmlspecialchars($r['event_title']) . " ";
    echo htmlspecialchars($r['event_time']) . "<br>";
    endwhile;

  echo '</div>';
echo '</div>';


?>