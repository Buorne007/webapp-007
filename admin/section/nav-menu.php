<html>
    <body>
        <div id="nav-menu" class="nav-menu header-menu sidebar-menu">
            <nav>
                <ul>
                    <li> <a href="?page=Home" class="<?php if ($page == 'home'){echo'active';}?>"><i class="fas fa-home fa-fw icone"></i>Home</a> </li>
                    <li> <a href="?page=single-ss" class="<?php if ($page == 'single-ss'){echo'active';}?>"><i class="fas fa-cog fa-fw icone"></i>Start & Stop</a> </li>
                    <li> <a href="?page=Schedule" class="<?php if ($page == 'Schedule'){echo'active';}?>"><i class="fas fa-calendar-alt fa-fw icone"></i>Schedule</a> </li>
                    <li> <a href="?page=Status"  class="<?php if ($page == 'Status'){echo'active';}?>"><i class="fas fa-lightbulb fa-fw icone"></i>Status</a> </li>
                </ul>
            </nav>
        </div>
    </body>
</html>