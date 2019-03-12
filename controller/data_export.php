<html>
<body>
<table border="1px">
	<tr>
		<th>Student_id</th>
		<th>Student_Name</th>
		<th>Pass</th>
	</tr>
	<?php
    include "user.php";
    
    $host = "localhost";
    $db_name = "quizapp";
    $user = "root";
    $pass = "";
    $conn = new PDO("mysql:host=" . $host . ";dbname=" .
                $db_name, $user, $pass);

    $user = (new User($conn))->getAllUsers();
    for ($i = 0; $i < count($user); $i++) {
        echo "
        <tr>
            <td>".$user[$i]['student_id']."</td>
            <td>".$user[$i]['student_name']."</td>
            <td>".$user[$i]['pass']."</td>
        </tr>
        ";
    }
	?>
</table>
</body>
</html>