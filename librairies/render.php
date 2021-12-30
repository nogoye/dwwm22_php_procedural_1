<?php 

function render(string $path, array $params = [])
{
    extract($params);

    ob_start();

    require("templates/" . $path . ".html.php");

    $pageContent = ob_get_clean();

    require("templates/layout.html.php");
}

?>