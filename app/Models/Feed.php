<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'international_feed_number',
        'energy_equation_class',
        'forage_description',
        'tdn',
        'de',
        'dry_matter',
        'ndf',
        'adf',
        'lignin',
        'cp',
        'ndfip',
        'adfip',
        'protein_a',
        'protein_b',
        'protein_c',
        'protein_digestion_rate',
        'rup_digest',
        'fat',
        'ash',
        'cp_digestibility',
        'ndf_digestibility',
        'calcium',
        'phosphorus',
        'magnesium',
        'chlorine',
        'potassium',
        'sodium',
        'sulfur',
        'cobalt',
        'copper',
        'iodine',
        'iron',
        'manganese',
        'selenium',
        'zinc',
        'vit_a',
        'vit_d',
        'vit_e',
        'arginine',
        'histidinehistidine',
        'isoleucine',
        'leucine',
        'lysine',
        'methionine',
        'pyhenylalanine',
        'threonine',
        'tryptophan',
        'valine',
        'ca_bioavailability',
        'p_bioavailability',
        'mg_bioavailability',
        'cl_bioavailability',
        'k_bioavailability',
        'na_bioavailability',
        's_bioavailability',
        'co_bioavailability',
        'cu_bioavailability',
        'i_bioavailability',
        'fe_bioavailability',
        'mn_bioavailability',
        'se_bioavailability',
        'zn_bioavailability',
        'is_coarse_fodder',
    ];

}
