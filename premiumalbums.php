<?php 
include("includes/included_files.php"); 
?>

<h1 class="text-center heading"> CHOOSE PREMIUM ALBUMS </h1>

<div class="gridviewContainer p-5 text-center">

    <?php 

    $albumQuery = mysqli_query($con, "SELECT * from premiumalbums");

    while($row= mysqli_fetch_array($albumQuery)){
        echo "<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")' class='album-links'>
                <div class='grid-view-item'>    
                        <img src='" . $row['image'] . "'alt='img' class='album-img'>
                        <div class='album-title grid-view-info text-center'>". $row['title'] . "</div>
                </div>
            </span>";
    }
?>

</div>