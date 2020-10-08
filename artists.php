<?php 
include("includes/included_files.php"); 
?>

<h1 class="text-center heading"> CHOOSE ARTISTS </h1>

<div class="gridviewContainer p-5 text-center">

<?php 

    $artistQuery = mysqli_query($con, "SELECT * from artists");

    while($row= mysqli_fetch_array($artistQuery)){
        echo "<span role='link' tabindex='0' onclick='openPage(\"artist.php?id=" . $row['id'] . "\")' class='album-links'>
                <div class='grid-view-item'>    
                        <img src='" . $row['artist_image'] . "'alt='img' class='album-img'>
                        <div class='album-title grid-view-info text-center'>". $row['name'] . "</div>
                </div>
            </span>";
    }
?>

</div>