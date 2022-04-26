<?php

namespace App;

use App\Services\HashUuid;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use HashUuid;
    protected $guarded = ['id'];
}
