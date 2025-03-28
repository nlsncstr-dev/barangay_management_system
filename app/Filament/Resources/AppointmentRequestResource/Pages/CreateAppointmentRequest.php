<?php

namespace App\Filament\Resources\AppointmentRequestResource\Pages;

use App\Filament\Resources\AppointmentRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAppointmentRequest extends CreateRecord
{
    protected static string $resource = AppointmentRequestResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
