<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public static function unreadCount()
    {
        return self::where('isRead', false)->count();
    }

    public function readNow()
    {
        if ( ! $this->isRead) {
            $this->isRead = true;
            $this->readTimestamp = now();
            $this->save();
        }

        return $this;
    }

    public function getCreatedAtDiffAttribute() {
        return $this->created_at->diffForHumans();
    }
}
