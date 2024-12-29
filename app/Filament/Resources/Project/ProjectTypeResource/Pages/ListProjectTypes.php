<?php

namespace App\Filament\Resources\Project\ProjectTypeResource\Pages;

use App\Filament\Resources\Project\ProjectTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectTypes extends ListRecords
{
    protected static string $resource = ProjectTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
