<?php

namespace App\Filament\Resources\ManagementResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ManagementResource;

class EditManagement extends EditRecord
{
    protected static string $resource = ManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Override function
    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        $oldPath = $record->picture;
       
        $record->update($data);

        if (!empty($data['picture']) && $oldPath != $record->picture ) {
            if ($oldPath) {
                Storage::disk('public')->delete($oldPath);
            }
        }

        return $record;
    }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {

    //     $oldPath = $data['picture'];
    //     if ($oldPath) {
    //         Storage::disk('public')->delete($oldPath);
    //     }

    //     return $data;
    // }
}