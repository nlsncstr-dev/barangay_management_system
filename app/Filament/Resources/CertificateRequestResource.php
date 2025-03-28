<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateRequestResource\Pages;
use App\Filament\Resources\CertificateRequestResource\RelationManagers;
use App\Models\CertificateRequest;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class CertificateRequestResource extends Resource
{
    protected static ?string $model = CertificateRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('middle_name')
                    ->maxLength(255),
                TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('age')
                    ->required()
                    ->numeric(),
                TextInput::make('contact_number')
                    ->required()
                    ->maxLength(255),
                TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Select::make('gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ])
                    ->required(),
                Select::make('citizenship')
                    ->options([
                        'filipino' => 'Filipino',
                        'others' => 'Others',
                    ])
                    ->required(),

                Select::make('civil_status')
                    ->options([
                        'single' => 'Single',
                        'married' => 'Married',
                        'widowed' => 'Widowed',
                        'separated' => 'Separated',
                    ])
                    ->required(),
                
                Textarea::make('purpose')
                    ->columnSpanFull(),
                Select::make('certificate_type')
                    ->options([
                        'barangay_clearance' => 'Barangay Clearance',
                        'barangay_certificate' => 'Barangay Certificate',
                        'business_clearance' => 'Business Clearance',
                        'residency_certificate' => 'Residency Certificate',
                        'indigency_certificate' => 'Indigency Certificate',
                    ])
                    ->required(),
                FileUpload::make('supporting_documents')
                    ->label('Valid ID Picture or Proof of Residency (If Any)')
                    ->disk('public')
                    ->directory('supporting_documents')
                    ->acceptedFileTypes([
                        'application/pdf', 
                        'image/png', 
                        'image/jpeg', 
                        'image/jpg'
                    ])
                    ->maxSize(30000)
                    ->visibility('public')
                    ->preserveFilenames()
                    ->downloadable()
                    ->previewable(true)
                    ->required()
                    ->default(function ($record) {
                        if ($record && $record->supporting_documents) {
                            return str_replace(Storage::disk('public')->url(''), '', $record->pr_attachment()->link);
                        }
                        return null;
                    })
                

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                ->label('No.')
                ->rowIndex(),
                TextColumn::make('first_name')
                    ->searchable(),
                TextColumn::make('middle_name')
                    ->searchable(),
                TextColumn::make('last_name')
                    ->searchable(),
                TextColumn::make('age'),
                TextColumn::make('contact_number')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('citizenship'),
                TextColumn::make('civil_status'),
                TextColumn::make('status')->label('Status')
                ->badge()
                ->color(fn ($state) => $state === 'approved' ? 'success' : 'warning'),
                TextColumn::make('purpose'),
                TextColumn::make('certificate_type')
                ->formatStateUsing(fn ($state) => ucwords(str_replace('_', ' ', $state))),
        

         
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('supporting_documents')
                ->label('View Document')
                ->icon('heroicon-o-link')
                ->color('primary')
                ->url(fn ($record) => Storage::url($record->supporting_documents))
                ->openUrlInNewTab(),
                
                Action::make('approve')
                    ->label('Approve')
                    ->color('success')
                    ->icon('heroicon-o-check')
                    ->requiresConfirmation()
                    ->action(fn ($record) => $record->update(['status' => 'approved']))
                    ->hidden(fn ($record) => $record->status === 'approved'),

            Tables\Actions\EditAction::make(), 
            Tables\Actions\DeleteAction::make(),



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
            'index' => Pages\ListCertificateRequests::route('/'),
            'create' => Pages\CreateCertificateRequest::route('/create'),
            'edit' => Pages\EditCertificateRequest::route('/{record}/edit'),
            'view' => Pages\ViewCertificateRequest::route('/{record}'),
        ];
    }
    public static function canViewAny(): bool
    {
    return auth()->user()->role === 'barangay_admin'; 
    }
}
