<?php
// app/Filament/Resources/ArticleResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Articles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $context, $state, callable $set) =>
                                $context === 'create' ? $set('slug', Str::slug($state)) : null
                            ),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Article::class, 'slug', ignoreRecord: true),

                        Forms\Components\Select::make('category')
                            ->options([
                                'Laravel' => 'Laravel',
                                'PHP' => 'PHP',
                                'JavaScript' => 'JavaScript',
                                'React' => 'React',
                                'Vue' => 'Vue',
                                'Database' => 'Database',
                                'UI/UX' => 'UI/UX',
                                'Teknologi' => 'Teknologi',
                                'Tutorial' => 'Tutorial',
                                'Tips' => 'Tips',
                            ])
                            ->required()
                            ->searchable(),

                        Forms\Components\Textarea::make('excerpt')
                            ->required()
                            ->maxLength(500)
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('articles')
                            ->nullable(),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->nullable(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                Tables\Columns\BadgeColumn::make('category')
                    ->colors([
                        'primary' => 'Laravel',
                        'success' => 'PHP',
                        'warning' => 'JavaScript',
                        'danger' => 'React',
                        'info' => 'Vue',
                        'secondary' => fn ($state): bool => in_array($state, ['Database', 'UI/UX', 'Teknologi', 'Tutorial', 'Tips']),
                    ]),

                Tables\Columns\TextColumn::make('excerpt')
                    ->limit(60)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 60) {
                            return null;
                        }
                        return $state;
                    }),

                Tables\Columns\IconColumn::make('published_at')
                    ->label('Published')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->getStateUsing(fn ($record) => $record->published_at !== null),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publish Date')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Laravel' => 'Laravel',
                        'PHP' => 'PHP',
                        'JavaScript' => 'JavaScript',
                        'React' => 'React',
                        'Vue' => 'Vue',
                        'Database' => 'Database',
                        'UI/UX' => 'UI/UX',
                        'Teknologi' => 'Teknologi',
                        'Tutorial' => 'Tutorial',
                        'Tips' => 'Tips',
                    ]),

                Tables\Filters\Filter::make('published')
                    ->query(fn ($query) => $query->whereNotNull('published_at')),

                Tables\Filters\Filter::make('draft')
                    ->query(fn ($query) => $query->whereNull('published_at')),
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
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'view' => Pages\ViewArticle::route('/{record}'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
