<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "project21");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM profiles";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $name = $_REQUEST['name'];
        $About= $_REQUEST['About'];
        $email = $_REQUEST['email'];
        $Location= $_REQUEST['Location'];
        $Skills= $_REQUEST['Skills'];
        $Social= $_REQUEST['Social'];


        $sql = "INSERT INTO profiles(name, email , About , Skills , Location , Social) VALUES('$name', '$email','$Location','$About' , '$Skills' , '$Social')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM profiles WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM profiles WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $name = $_REQUEST['name'];
        $About= $_REQUEST['About'];
        $email = $_REQUEST['email'];
        $Location= $_REQUEST['Location'];
        $Skills= $_REQUEST['Skills'];
        $Social= $_REQUEST['Social'];

        $sql = "UPDATE profiles SET name = '$name', About = '$About' , Location = '$Location' , Social = '$Social' , Skills = '$Skills' , email = '$email' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

?>
