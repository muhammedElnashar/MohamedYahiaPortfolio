<?php

namespace App\Enums;

enum ServiceSectionType: string
{
    case Card = 'card';
    case Stat = 'stat';
    case Process = 'process';
    case Content = 'content';
}
