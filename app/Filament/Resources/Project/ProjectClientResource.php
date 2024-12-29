<?php

namespace App\Filament\Resources\Project;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Project\ProjectClient;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Project\ProjectClientResource\Pages;
use App\Filament\Resources\Project\ProjectClientResource\RelationManagers;

class ProjectClientResource extends Resource
{
    protected static ?string $model = ProjectClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationGroup = "Project";

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->rules(['required', 'min:5']),
                TextInput::make('short_name')->required(),
                FileUpload::make('mono')->required()->disk('public')->directory('clients')->required()->rules(['required']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('short_name')->label('Short Name'),
                ImageColumn::make('mono'),
            ])
            ->filters([
                //  
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProjectClients::route('/'),
            'create' => Pages\CreateProjectClient::route('/create'),
            'edit' => Pages\EditProjectClient::route('/{record}/edit'),
        ];
    }
}