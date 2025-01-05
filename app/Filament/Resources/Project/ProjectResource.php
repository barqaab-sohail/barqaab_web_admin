<?php

namespace App\Filament\Resources\Project;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Project\Project;
use Filament\Resources\Resource;
use App\Models\Project\ProjectClient;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Project\ProjectResource\Pages;
use App\Filament\Resources\Project\ProjectResource\RelationManagers;
use App\Models\Project\ProjectCategory;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Project";

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->rules(['required', 'min:5']),
                TextInput::make('project_cost')->required()->rules(['required']),
                TextInput::make('consultancy_cost')->required()->rules(['required']),
                TextInput::make('share')->required()->rules(['required']),
                DatePicker::make('commencement_date')->required()->rules(['required']),
                DatePicker::make('completion_date')->required()->rules(['required']),
                Select::make('project_client_id')->label('Client')->options(ProjectClient::pluck('name', 'id')),
                Select::make('project_category_id')->label('Project Type')->options(ProjectCategory::pluck('name', 'id')),
                TextInput::make('placement')->integer()->unique(ignoreRecord: true),
                Toggle::make('status'),
                RichEditor::make('description')->columnSpan(2)


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('projectClient.short_name')->label('Client'),
                TextColumn::make('projectCategory.name')->label('Project Category'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}