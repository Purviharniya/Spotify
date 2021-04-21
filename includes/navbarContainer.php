<div class="collapse navbar-collapse shadow col-md-2 col-12 navigation-container sidebarnavbar" id="sidebarnavbar">

    <!-- <script>
            $(window).ready(function(){
                if($(window).width()>=768){
                    $(document).ready(function(){
                        $(".sidebarnavbar").addClass("show");
                    })
                }
            })

        </script> -->

    <script>
    $(document).ready(function() {
        showNav();

        $(window).resize(showNav);
    });

    function showNav() {

        if ($(window).width() >= 768) {
            $(document).ready(function() {
                $(".sidebarnavbar").addClass("show");
                $(".sidebarnavbar").removeClass("sidebar-zz");
            });

        }

        if ($(window).width() < 768) {
            $(document).ready(function() {
                $(".sidebarnavbar").removeClass("show");
                $(".sidebarnavbar").addClass("sidebar-zz");
            });

            $(".navbar-toggler").click(() => {
                if ($(".sidebarnavbar").hasClass("sidebarnavbar")) {
                    $(".mainview-container").toggleClass("d-none");
                }
            });
        }


    }

    <?php
    include_once("config.php");
    ?>
    </script>
    <div class="sidebar nav min-vh-100">
        <ul class="navbar-nav s-nav w-100 pt-5 px-2">
            <li class="nav-item">
                <span role="link" tabindex="0" onclick="openPage('landing.php')" class="nav-link side-logo py-3">
                    <img src="assets/images/icons/logo.png">
                </span>
            </li>

            <div class="group1">
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('search.php')" class="nav-link"> Search
                        <img src="assets/images/icons/search.png" alt="search" class="ic-search">
                    </span>
                </li>
            </div>
            <div class="group1">
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('browse.php')" class="nav-link"> Browse </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('artists.php')" class="nav-link"> Artists </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('albums.php')" class="nav-link"> Albums </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('genres.php')" class="nav-link"> Genres </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('yourmusic.php')" class="nav-link"> Your Music
                    </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('likedsongs.php')" class="nav-link"> Liked Songs
                    </span>
                </li>
                <?php 
                    $user = $_SESSION['userLoggedIn'];
                    $query= mysqli_query($con,"SELECT * from premiumusers where email ='$user'");
                    $row=mysqli_fetch_array($query);
                    if($row>0){
                        ?>

                <li class='nav-item'>
                    <span role='link' tabindex='0' onclick="openPage('premiumalbums.php')" class="nav-link"> Premium
                        Albums
                    </span>
                </li>

                <?php
                }
                ?>

                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('feedback.php')" class="nav-link"> Feedback </span>
                </li>
                <li class="nav-item">
                    <span role="link" tabindex="0" onclick="openPage('user.php')" class="nav-link"> Account </span>
                </li>


                <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Pages you viewed: <?php echo $_SESSION['ca']; ?> </a>
                </li> -->
            </div>
        </ul>
    </div>
</div>