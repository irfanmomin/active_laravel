<?php

namespace Irfan\ActiveLaravelTest;

use Illuminate\Database\Eloquent\Model;

class StubModel extends Model
{
    // Declaration.
    protected $fillable = ['id', 'uid'];
    protected $primaryKey = 'uid';
}
