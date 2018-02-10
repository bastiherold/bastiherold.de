<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function readNow()
    {
        if ( ! $this->isRead) {
            $this->isRead = true;
            $this->readTimestamp = now();
            $this->save();
        }

        return $this;
    }
}
