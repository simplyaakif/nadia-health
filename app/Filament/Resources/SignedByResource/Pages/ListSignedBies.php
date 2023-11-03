<?php

    namespace App\Filament\Resources\SignedByResource\Pages;

    use App\Filament\Resources\SignedByResource;
    use Filament\Actions\CreateAction;
    use Filament\Resources\Pages\ListRecords;

    class ListSignedBies extends ListRecords {

        protected static string $resource = SignedByResource::class;

        protected function getActions(): array
        {
            return [
                CreateAction::make(),
            ];
        }
    }
