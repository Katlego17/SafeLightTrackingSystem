<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MineGroupName extends Model
{
    use HasFactory;

    protected $table = 'mine_group_names';
    protected $primaryKey = 'id';

    protected $fillable = ['MineGroupName'];

    /**
     * Get all of the minenames for the MineGroupName//here i am giving minegroupnames TABLE many
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function minenames()
    {
        return $this->hasMany(MineName::class);//, 'foreign_key', 'local_key'
    }
}
