<?php

namespace App\Service\Layouts;

interface Menu
{
    public static function instance();
    public function compose($view);

}
