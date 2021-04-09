<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produit';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'produit_id';

    /**
     * Get the produits for the blog categorie.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'categorie_id');
    }

    /**
     * Get the produits for the blog marque.
     */
    public function marque()
    {
        return $this->belongsTo(Marque::class, 'marque_id', 'marque_id');
    }

    /**
     * Get the produits for the blog taille_vetement.
     */
    public function tailleVetement()
    {
        return $this->belongsTo(TailleVetement::class, 'taille_vetement_id', 'taille_vetement_id');
    }
}
