<nav>
    <ul>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>">Home</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=about">About</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=contact">Contacts</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=AvatarController&method=form">Form</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=show">Mail Form</a>
        </li>
    </ul>
</nav>
<?php
