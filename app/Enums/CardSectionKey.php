<?php

namespace App\Enums;

enum CardSectionKey:string
{
    case Audit_Cover = 'audit_covers';
    case Why_Me = 'why_me';
    case Audit_Process = 'audit_process';
    case Audit_Deliverables = 'audit_deliverables';
    case Expert_Approach ='expert_approach';
    case Regular_Approach ='regular_approach';
}
