<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegendsResource\Pages;
use App\Models\Legends;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class LegendsResource extends Resource
{
    protected static ?string $model = Legends::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->translateLabel()
                    ->maxLength(255)
                    ->required(),

                Forms\Components\Select::make('series_id')
                    ->relationship('series', 'title')
                    ->preload()
                    ->searchable()
                    ->required(),

                Forms\Components\Toggle::make('active')
                    ->translateLabel()
                    ->inline(false)
                    ->onColor('success')
                    ->offColor('danger')
                    ->required(),

                Forms\Components\MarkdownEditor::make('content')
                    ->translateLabel()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                // Tables\Columns\TextColumn::make('series.title')
                //     ->label(__('Series name'))
                //     ->sortable(),

                Tables\Columns\IconColumn::make('active')
                    ->translateLabel()
                    ->sortable()
                    ->boolean(),
            ])
            ->filters([
                // Tables\Filters\SelectFilter::make('post_id')
                //     ->label(__('Posts'))
                //     ->relationship('post', 'title')
                //     ->preload()
                //     ->searchable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegends::route('/'),
            'create' => Pages\CreateLegends::route('/create'),
            'view' => Pages\ViewLegends::route('/{record}'),
            'edit' => Pages\EditLegends::route('/{record}/edit'),
        ];
    }
}
