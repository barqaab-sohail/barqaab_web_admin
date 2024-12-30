<?php

namespace App\Filament\Resources\Project;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Project\Project;
use Filament\Resources\Resource;
use App\Models\Project\ProjectImage;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Project\ProjectImageResource\Pages;
use App\Filament\Resources\Project\ProjectImageResource\RelationManagers;

class ProjectImageResource extends Resource
{
    protected static ?string $model = ProjectImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Project";

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                FileUpload::make('image')->required()->disk('public')->directory('projectImages')->required()->rules(['required']),
                TextInput::make('placement')->integer(),
                Select::make('project_id')->label('Project')->options(Project::pluck('name', 'id')),
                Toggle::make('status'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('project.name')->label('Project Name'),
                ImageColumn::make('image'),
                TextColumn::make('placement'),
                ToggleColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListProjectImages::route('/'),
            'create' => Pages\CreateProjectImage::route('/create'),
            'edit' => Pages\EditProjectImage::route('/{record}/edit'),
        ];
    }
}
