<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "comments";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $Names = $_POST['name'];
        $Email = $_POST['email'];
        $Comment = $_POST['comments'];

        $sql = "INSERT INTO info (Name, Email, Comment)
        VALUES ('$Names', '$Email', '$Comment')";

        if ($conn->query($sql) === TRUE) {
            echo "Comment sent successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        

    header("refresh:3; url=index.html");
?>


       

