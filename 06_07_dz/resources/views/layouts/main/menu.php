<div class="container">
    <div class="nav-menu">
        <nav class="mainmenu mobile-menu">
            <ul id="elContainer">
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>">Home</a></li>
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=about">About us</a></li>
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=schedule">Schedule</a></li>
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=gallery">Gallery</a></li>
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=blog">Blog</a>
                    <ul class="dropdown">
                        <li><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=about">About Us</a></li>
                        <li><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=blog_single">Blog Details</a></li>
                    </ul>
                </li>
                <li class="item"><a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=contact">Contacts</a></li>
            </ul>
        </nav>
    </div>
</div>
<div id="mobile-menu-wrap"></div>
<script>
    // Get the container element
    let elContainer = document.getElementById("elContainer");

    // Get all buttons with class="btn" inside the container
    let elements = elContainer.getElementsByClassName("item");

    // Loop through the buttons and add the active class to the current/clicked button
    for (let i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", function() {
            let current = document.getElementsByClassName("active");

            // If there's no active class
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }

            // Add the active class to the current/clicked button
            this.className += " active";
        });
    }
</script>
<?php
