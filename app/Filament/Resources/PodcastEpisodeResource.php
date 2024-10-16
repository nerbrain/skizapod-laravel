<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PodcastEpisodeResource\Pages;
use App\Filament\Resources\PodcastEpisodeResource\RelationManagers;
use App\Models\PodcastEpisode;
use App\Models\PodcastEpisodes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PodcastEpisodeResource extends Resource
{
    protected static ?string $model = PodcastEpisode::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('podcast_id')
                    ->relationship(name:'podcast', titleAttribute:'name'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('description'),
                Forms\Components\TextInput::make('imageURL'),
                Forms\Components\TextInput::make('url'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListPodcastEpisodes::route('/'),
            'create' => Pages\CreatePodcastEpisode::route('/create'),
            'edit' => Pages\EditPodcastEpisode::route('/{record}/edit'),
        ];
    }
}
