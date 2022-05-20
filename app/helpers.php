<?php
// app/helpers.php
function images($path = '')
{
    return asset("/images/$path");
}

function setActive($route="home")
{
    return request()->routeIs($route) ? 'active' : '';
}
