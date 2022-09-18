<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="event-data";

    $conn = mysqli_connect($server , $username , $password , $db);

    if($conn === false){
        die("Could not connect to the database.".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "$name";
    echo "$email";

    $query = "INSERT INTO event-data (Name,Email) VALUES ('$name', '$email')";

    if(mysqli_query($conn , $query)){
    echo
    '
            <script>
                alert("We will connect with you :)");
            </script>
        ';
    }
    else{
    echo
    '
            <script>
                alert("Error in processing Data");
            </script>
        ';
    }

?>