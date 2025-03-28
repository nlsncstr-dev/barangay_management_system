<?php

namespace App\Filament\Resources\CertificateRequestResource\Pages;

use App\Filament\Resources\CertificateRequestResource;
use Filament\Actions;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Illuminate\Support\Facades\Storage;

class ViewCertificateRequest extends ViewRecord
{
    protected static string $resource = CertificateRequestResource::class;
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
        ->schema([
            ImageEntry::make('supporting_documents')
            ->getStateUsing(fn ($record) => Storage::url($record->supporting_documents)) // this is for the thumbnail <img>
            ->url(fn ($record) => Storage::url($record->supporting_documents))            // this is for the clickable link
            ->height(100)
            ->square()
        
        ]);
    }
}
