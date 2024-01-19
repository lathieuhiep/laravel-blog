<?php
if (!function_exists('isActiveMenu')) {
    function isActiveMenu($path): string
    {
        return request()->is($path) ||request()->is($path . '/*') ? 'active' : '';
    }
}
