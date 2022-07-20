<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineCabinet extends Model
{
    use HasFactory;

    protected $table = 'mine_cabinets';
    protected $primaryKey = 'id';

    protected $fillable = ['MineCabinetName','mine_level_id'];

    /**
     * Get the user that owns the MineName
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minelevel()
    {
        return $this->BelongsTo(MineLevel::class);
    }
}
