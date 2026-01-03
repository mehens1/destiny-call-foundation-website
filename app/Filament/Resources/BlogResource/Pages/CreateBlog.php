<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function afterCreate(): void
    {
        // Clean Livewire temp files only after record creation
        foreach (glob(storage_path('app/livewire-tmp/*')) as $tmpFile) {
            @unlink($tmpFile);
        }
    }
}
