<?php

namespace RyanChandler\FilamentSpatieLaravelActivitylog\Contracts;

use Spatie\Activitylog\Models\Activity;

interface IsActivitySubject
{
    public function getActivitySubjectDescription(Activity $activity): string;
}
