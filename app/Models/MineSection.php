<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineSection extends Model
{
    use HasFactory;

    protected $table = 'mine_sections';
    protected $primaryKey = 'id';

    protected $fillable = ['MineSectionName','mine_site_id'];

    /**
     * Get the user that owns the MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minesite()
    {
        return $this->BelongsTo(MineSite::class);
    }

    /**
     * Get all of the comments f MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minelevels()
    {
        return $this->hasMany(MineLevel::class);
    }
}
