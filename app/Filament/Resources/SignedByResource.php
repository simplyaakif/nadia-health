<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\SignedByResource\Pages;
    use App\Models\SignedBy;
    use Filament\Forms\Components\Placeholder;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Table;

    class SignedByResource extends Resource {

        protected static ?string $model = SignedBy::class;

        protected static ?string $slug = 'signed-bies';

        protected static ?string $recordTitleAttribute = 'name';

        public static function form(Form $form): Form
        {
            return $form->schema([
                                     TextInput::make('name')->required(),

                                     TextInput::make('email'),

                                     Placeholder::make('created_at')->label('Created Date')->content(fn(?SignedBy $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                                     Placeholder::make('updated_at')->label('Last Modified Date')->content(fn(?SignedBy $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
                                 ]);
        }

        public static function table(Table $table): Table
        {
            return $table->columns([
                                       TextColumn::make('name')->searchable()->sortable(),

                                       TextColumn::make('email')->searchable()->sortable(),

                                       TextColumn::make('meta'),
                                   ]);
        }

        public static function getPages(): array
        {
            return [
                'index' => Pages\ListSignedBies::route('/'),
                'create' => Pages\CreateSignedBy::route('/create'),
                'edit' => Pages\EditSignedBy::route('/{record}/edit'),
            ];
        }

        public static function getGloballySearchableAttributes(): array
        {
            return [
                'name',
                'email'
            ];
        }
    }
