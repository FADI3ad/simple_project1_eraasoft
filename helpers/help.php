<?php

//$session = $_SESSION['errors']
function getMsg(&$session , $field)
{

    if (isset($session) && isset($session[$field])) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show w-100 py-1 mt-1" 
            role="alert" 
            style="font-size: 12px;">
            '.$session[$field].'
        </div>';
        unset($session[$field]);
    }




    return null;
}
