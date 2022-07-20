<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineSection extends Model
{
    use HasFactory;

    protected $table = 'mine_sites';
    protected $primaryKey = 'id';

    protected $fillable = ['MineSiteName','mine_name_id'];

    /**
     * Get the user that owns the MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minename()
    {
        return $this->BelongsTo(MineName::class);
    }
}
