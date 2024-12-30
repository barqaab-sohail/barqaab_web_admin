<?php

namespace App\Filament\Resources\Project\ProjectImageResource\Pages;

use App\Filament\Resources\Project\ProjectImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectImages extends ListRecords
{
    protected static string $resource = ProjectImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
