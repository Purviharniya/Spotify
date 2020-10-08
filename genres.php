<?php 
include("includes/included_files.php"); 
?>

<h1 class="text-center heading"> CHOOSE GENRES </h1>

<div class="gridviewContainer p-5 text-center">

<?php 

    $genreQuery = mysqli_query($con, "SELECT * from genres");

    while($row= mysqli_fetch_array($genreQuery)){
        echo "<span role='link' tabindex='0' onclick='openPage(\"genre.php?id=" . $row['id'] . "\")' class='album-links'>
                <div class='grid-view-item'>    
                        <img src='" . $row['image'] . "'alt='img' class='album-img'>
                        <div class='album-title grid-view-info text-center'>". ucfirst($row['name']) . "</div>
                </div>
            </span>";
    }
?>

</div>