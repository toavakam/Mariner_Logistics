<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageBlocksRelationManager extends RelationManager
{
    protected static string $relationship = 'page_blocks';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('block_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('gallery')
                    ->relationship(name: 'gallery', titleAttribute: 'title'),
                Section::make()
                    ->schema([
                        Textarea::make('text_1')
                        ->rows(10),
                        Forms\Components\FileUpload::make('image_1'),
                        TextArea::make('text_2')
                        ->rows(10),
                        Forms\Components\FileUpload::make('image_2'),
                        Forms\Components\TextArea::make('gmap_url')
                            ->rows(5),
                        Forms\Components\Toggle::make('is_active'),
                        Forms\Components\Toggle::make('colored'),
                        Forms\Components\TextInput::make('sort'),
                    ])
                    ->columns(1),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('block_type')
            ->columns([
                Tables\Columns\TextColumn::make('block_type'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
