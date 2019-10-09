					




					<?php
					define ('DB_USER','4003497_zw91539');
					define('DB_PASSWORD','REWvoJs6');
					define('DB_HOST','my06s.sqlserver.se');
					define('DB_NAME','4003497-db10');
					$NAME = $_POST["name"];
					$COMMENT =
					$_POST["comment"];


					$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
					OR die ('No DB-connection via MySQLi');

					echo "<h2>Diskussionsforum</h2>";

					
					$sql = "CREATE TABLE commentTable (name varchar(255), comment varchar(1000))";
					
					if ($db_conn->query($sql) === TRUE) {
   					 echo "New table created successfully";
					} else {
    				echo "Fel: " . $sql . "<br>" . $db_conn->error;
					}

					$db_conn->close();

					?>