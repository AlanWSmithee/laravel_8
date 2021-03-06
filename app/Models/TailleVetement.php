<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailleVetement extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'taille_vetement';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'taille_vetement_id';

    /**
     * Get the produits for the blog taille_vetement.
     */
    public function produits()
    {
        return $this->hasMany(Produit::class, 'produit_id', 'taille_vetement_id');
    }
}
