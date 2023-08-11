<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table ='position_in_match';
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */

        protected $fillable = [
            'LineupID',
            'MatchID',
            'PlayerID',
            'PositionInMatch'
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [];
}
