<?php include('includes/header.php');?>

<h1 class="text-center "> Music You Might Like </h1>

<div class="gridviewContainer row">

<?php 

    $albumQuery = mysqli_query($con, "SELECT * from albums ORDER BY RAND() LIMIT 10");

    while($row= mysqli_fetch_array($albumQuery)){
        echo "<a href='album.php?id=" . $row['id'] . "'  class='album-links'>
                <div class='col-6 col-md-12'> 
                        <img src='" . $row['image'] . "'alt='img' class='album-img'>
                        <div class='album-title text-center'>". $row['title'] . "</div>
                </div>
            </a>";
    }
?>

</div>


<?php include('includes/footer.php'); ?>