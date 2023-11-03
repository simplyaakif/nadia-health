<?php

    namespace App\Filament\Resources\SignedByResource\Pages;

    use App\Filament\Resources\SignedByResource;
    use Filament\Resources\Pages\CreateRecord;

    class CreateSignedBy extends CreateRecord {

        protected static string $resource = SignedByResource::class;

        protected function getActions(): array
        {
            return [

            ];
        }
    }
