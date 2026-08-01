<?php

namespace App\Enums;

enum PageListEnum:string
{
    case HOME = 'home';
    case ABOUT  = 'about';
    case BLOGS = 'blogs';
    public function label(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT => 'About',
            self::BLOGS => 'Blogs',
        };
    }
}
