<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $table  = 'tournaments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'TournamentID	',
        'Logo',
        'TournamentName	',
        'Description',
        'MatchCount',
        'YearHeld',
        'OrganizingCountry',
        'created_at',
        'updated_at',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *p
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
