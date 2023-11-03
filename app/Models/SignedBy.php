<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class SignedBy extends Model {

        protected $casts
            = [
                'meta' => 'array',
            ];

        protected $fillable = [
            'name','email','meta'
        ];
    }
