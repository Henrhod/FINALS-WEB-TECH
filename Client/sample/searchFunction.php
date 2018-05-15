

<html>
	<body>
		<form method="post" action="index.php">
            <input type="text" class="text/input" placeholder="Search" name="searchValue"> 
            <button type="submit" name="search">Test</button>        
            
		</form>
        
        <?php
              if(isset($_POST['search'])) {
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'database';
                $conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
                if(isset($_POST['searchValue'])) {
                  $searchValue = $_POST['searchValue'];
                    $sql = "SELECT * FROM packages WHERE Description LIKE '%$searchValue%';";
                    $result = mysqli_query($conn,$sql);
                    $numRow = mysqli_num_rows($result);
                    if($numRow != 0) {
                        while ($assoc = mysqli_fetch_assoc($result)) {
                        $data[] = $assoc;

                        }

                        for($x = 0 ; $x < $numRow; $x++) {
                            echo $data[$x]['packImage'];
                            echo "<br />Package name: ".$data[$x]['name'];
                            echo "<br />Package includes: ".$data[$x]['Description'];
                            echo "<br />Package price: ".$data[$x]['price'];
                            if ($data[$x]['status'] == "available"){
                                echo "<br />Package is available";
                            } else {
                                echo "<br />Package is not available";
                            }
                            echo "<br /><br />";
                        }
                    } else {
                        echo "There is no result.";
                    }
                      
                } 
              }
            ?>
	</body>
</html>