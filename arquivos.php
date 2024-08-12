<ul>
    <?php
    $files = scandir('uploads');
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && strtolower(pathinfo($file, PATHINFO_EXTENSION)) == 'xml') {
            echo "<li><a href='download.php?file=$file'>$file</a></li>";
        }
    }
    ?>
</ul>
