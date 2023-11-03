<?php

    namespace App\Filament\Resources\SignedByResource\Pages;

    use App\Filament\Resources\SignedByResource;
    use Filament\Actions\DeleteAction;
    use Filament\Resources\Pages\EditRecord;

    class EditSignedBy extends EditRecord {

        protected static string $resource = SignedByResource::class;

        protected function getActions(): array
        {
            return [
                DeleteAction::make(),
            ];
        }
    }
