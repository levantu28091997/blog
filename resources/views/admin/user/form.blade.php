<?php
    $linkList = route($controllerName);
    echo "<h3 style='color:red;'>$linkList<h3>";
?>
<h3 style="color:red;">UserController - Form - <?php echo $id; ?></h3>
<a href="<?php echo $linkList?>">List</a>
