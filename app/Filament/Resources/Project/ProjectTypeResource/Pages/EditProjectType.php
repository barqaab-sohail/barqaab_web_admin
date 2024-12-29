<?php

namespace App\Filament\Resources\Project\ProjectTypeResource\Pages;

use App\Filament\Resources\Project\ProjectTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectType extends EditRecord
{
    protected static string $resource = ProjectTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
