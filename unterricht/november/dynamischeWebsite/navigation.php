<nav>
    Inhaltsverzeichnis
    <ul>
        <?php
        foreach($pages as $key => $value)
            echo "<li><a href='?page=$key'>$value</a>"
        ?>


    </ul>
</nav>