<?php include('includes/header.php');?>

<h1 class="text-center heading"> Music You Might Like </h1>

<div class="gridviewContainer p-5 text-center">

<?php 

    $albumQuery = mysqli_query($con, "SELECT * from albums ORDER BY RAND() LIMIT 15");

    while($row= mysqli_fetch_array($albumQuery)){
        echo "<a href='album.php?id=" . $row['id'] . "'  class='album-links'>
                <div class='grid-view-item'>    
                        <img src='" . $row['image'] . "'alt='img' class='album-img'>
                        <div class='album-title grid-view-info text-center'>". $row['title'] . "</div>
                </div>
            </a>";
    }
?>

</div>


<?php include('includes/footer.php'); ?>