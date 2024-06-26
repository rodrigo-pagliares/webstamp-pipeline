<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemGoal extends Model
{

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
