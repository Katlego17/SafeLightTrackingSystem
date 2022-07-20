<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineName extends Model
{
    use HasFactory;

    protected $table = 'mine_names';
    protected $primaryKey = 'id';

    protected $fillable = ['MineName','mine_group_name_id'];

    /**
     * Get the user that owns the MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minegroupname()
    {
        return $this->BelongsTo(MineGroupName::class);
    }

    /**
     * Get all of the comments f MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minesites()
    {
        return $this->hasMany(MineSite::class);
    }
}
