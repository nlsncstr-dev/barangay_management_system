<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Register Details')->schema([
                TextInput::make('first_name')
                ->label('First Name')
                ->columnSpan(1)
                ->required(),

                TextInput::make('middle_name')
                ->label('Middle Name')
                ->columnSpan(1)
                ->required(),

                TextInput::make('last_name')
                ->label('Last Name')
                ->columnSpan(1)
                ->required(),

                TextInput::make('email')
                ->label('Email')
                ->columnSpan(1)
                ->unique(ignoreRecord: true)
                ->required(),

                Select::make('role')
                ->label('Role')
                ->options([
                    'barangay_admin' => 'Barangay Admin',
                    'clinic_admin' => 'Clinic Admin',
                ])
                ->columnSpan(1)
                ->required(),

                TextInput::make('contact_number')
                ->label('Contact Number')
                ->columnSpan(1)
                ->required(),

                TextInput::make('password')
                ->password()
                ->columnSpan(1)
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->revealable()
                ->rules([
                    Password::min(8)
                        ->letters()
                        ->numbers(),
                ])
                ->confirmed()
                ->required(fn (string $context): bool => $context === 'create'),

                TextInput::make('password_confirmation')
                ->label('Confirm Password')
                ->password()
                ->columnSpan(1)
                ->revealable()
                ->required(fn (string $context): bool => $context === 'create'),

            ])->columns(3),
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
            ->searchable()
            ->label('First Name'),

            TextColumn::make('last_name')
            ->searchable()
            ->label('Middle Name'),

            TextColumn::make('last_name')
            ->searchable()
            ->label('Last Name'),

            TextColumn::make('email')
            ->searchable()
            ->label('Email'),

            TextColumn::make('contact_number')
            ->searchable()
            ->label('Contact Number'),

            TextColumn::make('role')
            ->label('Role')
            ->formatStateUsing(fn($state) => Str::of($state)->replace('_', ' ')->title()),
        ])
           
            ->actions([

                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])->where('id', '!=', auth()->id());
    }
    public static function canViewAny(): bool
    {
    return auth()->user()->role === 'super_admin'; 
    }
}
