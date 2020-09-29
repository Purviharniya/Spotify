<div class="collapse navbar-collapse shadow col-md-2 col-12 navigation-container sidebarnavbar"  id="sidebarnavbar">
                
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

$(document).ready(function(){
    showNav();

    $(window).resize(showNav);
});

function showNav(){
    
    if($(window).width()>=768){
        $(document).ready(function(){
            $(".sidebarnavbar").addClass("show");
            $(".sidebarnavbar").removeClass("sidebar-zz");
        });
        
    }

    if($(window).width()<768){
        $(document).ready(function(){
            $(".sidebarnavbar").removeClass("show");
            $(".sidebarnavbar").addClass("sidebar-zz");
        });     

        $(".navbar-toggler").click(()=>{
        if($(".sidebarnavbar").hasClass("sidebarnavbar")){
        $(".mainview-container").toggleClass("d-none");
        }   
    });
    }

    
}


</script>
                <div class="sidebar nav min-vh-100">
                    <ul class="navbar-nav s-nav w-100 pt-5 px-2">
                        <li class="nav-item">
                            <a class="nav-link side-logo" href="landing.php"> <img src="assets/images/icons/logo.png"> </a>
                        </li>

                        <div class="group1">
                            <li class="nav-item">
                                <a class="nav-link" href="search.php"> Search 
                                    <img src="assets/images/icons/search.png" alt="search" class="ic-search">
                                </a>
                            </li>
                        </div>
                        <div class="group1">
                            <li class="nav-item">
                                <a class="nav-link" href="browse.php"> Browse </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="yourmusic.php"> Your Music </a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="feedbackform.php"> Enter Feedback </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="user.php"> Purvi H </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages you viewed: <?php echo $_SESSION['ca']; ?> </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>