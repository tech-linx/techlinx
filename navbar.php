<nav class="navbar navbar-expand-lg fixed-top bg-white p-0 navbar-dark ">
    <div class="container">
        <a class="navbar-brand text-dark fs-3" href="index.php">
            <img src="src/images/logo1nobg.png" class="img-fluid w-50" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa text-primary fa-bars" aria-hidden="true"></i>


        </button>
        <div class="collapse navbar-collapse d-flex justify-content-around  " id="navbarSupportedContent">
            <ul class="navbar-nav p-3  d-flex align-items-center ms-auto     mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link text-dark px-4  fw-bold active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-dark px-4  fw-bold" href="index.php#about">About</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link text-dark px-4  fw-bold" href="solutions.php">Services</a>
                </li>
                <!--<li class="nav-item ">-->
                <!--<a class="nav-link text-dark px-3  fw-bold" href="techlinx-Overview.php">Our Services</a>-->
                <!--</li>-->
        
               
                <li class="nav-item   " >
                    <a href="contact.php" class="   btn btn-primary  rounded-pill border-0 fw-bold">Contact Us</a>
                </li>
                <!-- https://societyofmidwives.mojo.page/society-of-midwives -->
                <!-- <li class="nav-item mt-2  mx-2">
                    <a href="https://societyofmidwives.mojo.page/society-of-midwives" class=" text-dark  fw-bold">Contact Us</a>
                </li> -->
            </ul>
            <!--<div class="d-flex">-->
            <!--    <div>-->
            <!--        <a target="_blank" href="https://www.facebook.com/profile.php?id=61561137262959"><i-->
            <!--                class="fa  px-3 fs-5 fa-facebook text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <a target="_blank" href="https://www.instagram.com/techlinx.ai/"><i-->
            <!--                class="fa  px-3 fs-5 fa-instagram text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <a target="_blank" href="https://www.linkedin.com/company/techlinx-it-services/mycompany/"><i-->
            <!--                class="fa  px-3 fs-5 fa-linkedin text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <a target="_blank" href="https://x.com/Techlinx_ain" class="px-3 fs-5">-->
            <!--            <img src="src/images/xIcons.png" class="img-fluid" style="width: 14PX;">-->
            <!--        </a>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <a target="_blank" href="https://www.youtube.com/@Techlinx-ai"><i-->
            <!--                class="fa  px-3 fs-5 fa-youtube text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>-->
            <!--    </div>-->
                <!--<div>-->
                <!--    <a target="_blank" href="login.php"><i-->
                <!--        class="fa  px-3 fs-5 fa-user text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>-->
                   

                <!--</div>-->
            </div>
        </div>
</nav>
// <script>
//     var timeout; // Variable to hold timeout reference
//     var activeContainerId; // Variable to store the ID of the active links container

//     function showLinks(category) {
//         var linksContainer;
//         var links;
//         var linkTexts;

//         switch (category) {
//             case 'roles':
//                 linksContainer = document.getElementById("linksContainerRoles");
//                 links = ["recruiters.php", "talent.php"];
//                 linkTexts = ["talentEXP One-pager", "Our Phenom Practice One-pager"];
//                 break;
           

//             // Add cases for Technology and Resource if needed
//         }
 
//         // Hide the previously active container if exists
//         if (activeContainerId && activeContainerId !== linksContainer.id) {
//             var activeContainer = document.getElementById(activeContainerId);
//             activeContainer.style.display = "none";
//         }

//         var linksHTML = ""; // Initialize links HTML string
//         for (var i = 0; i < links.length; i++) {
//             linksHTML += "<a  href='" + links[i] +   + linkTexts[i] + "</a>";
//         }
//         linksContainer.innerHTML = linksHTML; // Set new links content
//         linksContainer.style.display = "block"; // Show the links container

//         // Set the active container ID
//         activeContainerId = linksContainer.id;
//     }

//     function hideLinks(containerId) {
//         timeout = setTimeout(function () {
//             var container = document.getElementById(containerId);
//             if (!container.matches(':hover')) { // Check if the mouse is not hovering over the container
//                 container.style.display = "none";
//             }
//         }, 200); // Adjust delay as needed (200 milliseconds in this example)
//     }

//     function cancelHide() {
//         clearTimeout(timeout);
//     }

//     // Hide the links container when mouse leaves both the dropdown area and the links container itself
//     document.querySelectorAll('.shadow-sm').forEach(function (item) {
//         item.addEventListener('mouseleave', function () {
//             var linksContainer = this.nextElementSibling;
//             hideLinks(linksContainer.id);
//         });

//         item.nextElementSibling.addEventListener('mouseleave', function () {
//             hideLinks(this.id);
//         });
//     });

// </script>
// <script>
//     window.addEventListener('scroll', function () {
//         var navbar = document.querySelector('.navbar');
//         if (window.scrollY > 50) { // Change 50 to your desired scroll position
//             navbar.classList.add('bg-light');
//         } else {
//             navbar.classList.remove('bg-light');
//         }
//     });
// </script>