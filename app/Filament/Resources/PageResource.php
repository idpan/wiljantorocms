<?php

namespace App\Filament\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\HasManyRepeater;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
{
    
    $page = Page::find(request()->route('record'));
    $formFields = [
        HasManyRepeater::make('sections')
    ->relationship('sections')
    ->schema([
        
        TextInput::make('name')->disabled(),
        TextInput::make('header'),
        Textarea::make('content')->label('Content')
        ->extraAttributes([
            'class' => 'text-blue font-medium',
           ])
    ])
    ->itemLabel(fn ($state) => ($state['name'] ?? 'Unnamed') . ' - section')
    ->disableItemDeletion()
    ->disableItemCreation()
    ->columnSpanFull()
    ->extraAttributes([
        'class' => 'text-blue font-medium',
       ])
       
    
];

    

    return $form->schema($formFields);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('title')->limit(50),
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
        
    }
    public static function canCreate(): bool
{
    return false;
}

public static function canDeleteAny(): bool
{
    return false;
}

public static function canDelete(Model $record): bool
{
    return false;
}
    
}
