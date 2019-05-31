<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class RegisJobService extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regis_job_service';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'service_id';

    
}
