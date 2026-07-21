<?php

namespace App\Enums;

enum ServiceItemType: string
{
    case BENEFIT = 'benefit';

    case DELIVERABLE = 'deliverable';

    case AUDIT_COVER = 'audit_cover';

    case PROBLEM = 'problem';

    case RELATED_SERVICE = 'related_service';
}
