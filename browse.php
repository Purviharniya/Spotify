<?php 
include("includes/included_files.php"); 
?>

<h1 class="text-center heading"> POPULAR ALBUMS </h1>

<div class="gridviewContainer p-5 text-center">

<?php 

    $albumQuery = mysqli_query($con, "SELECT * from albums ORDER BY RAND() LIMIT 10");

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

<h1 class="text-center heading"> POPULAR ARTISTS </h1>

<div class="gridviewContainer p-5 text-center">

<?php 

$artistQuery = mysqli_query($con, "SELECT * from artists ORDER BY RAND() LIMIT 10");

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

<h1 class="text-center heading"> POPULAR GENRES </h1>

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