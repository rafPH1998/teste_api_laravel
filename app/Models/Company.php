<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name', 'document'];

    /**
     * clients.
     */
    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'card', 'company_id', 'client_id')->withPivot('id');
    }
}
