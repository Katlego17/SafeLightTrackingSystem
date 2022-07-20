<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineLevel extends Model
{
    use HasFactory;

    protected $table = 'mine_levels';
    protected $primaryKey = 'id';

    protected $fillable = ['MineLevelName','mine_section_id'];

    /**
     * Get the user that owns the MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minesection()
    {
        return $this->BelongsTo(MineGroupName::class);
    }

    /**
     * Get all of the comments f MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minecabinets()
    {
        return $this->hasMany(MineCabinet::class);
    }
}
