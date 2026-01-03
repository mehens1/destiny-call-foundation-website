<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationGroup = 'Blog Management';
    protected static ?string $navigationLabel = 'Blog Posts';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->required(),

            Forms\Components\Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->required(),

            Forms\Components\FileUpload::make('featured_image_upload')
                ->label('Featured Image')
                ->image()
                ->acceptedFileTypes(['image/*'])
                ->imageEditor()
                ->multiple(false)
                ->visibility('public')
                ->imagePreviewHeight('250')
                ->required()
                ->dehydrated(false)
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => $file->getClientOriginalName()
                )
                ->afterStateUpdated(function ($state, callable $set) {
                    try {
                        if (!$state) return;

                        $uploadedFile = $state instanceof TemporaryUploadedFile
                            ? $state
                            : (is_array($state) ? $state[0] : $state);

                        $absolutePath = $uploadedFile->getRealPath();

                        if (!file_exists($absolutePath)) {
                            logger()->error("Temp file missing: {$absolutePath}");
                            return;
                        }

                        $cloudinaryUrl = \App\Services\CloudinaryService::upload(
                            $absolutePath,
                            'blog_images/featured_images'
                        );

                        $set('featured_image', $cloudinaryUrl);
                    } catch (\Throwable $e) {
                        logger()->error('Cloudinary upload error: ' . $e->getMessage());
                    }
                }),

            Forms\Components\Hidden::make('featured_image')
                ->dehydrated(true)
                ->required(),

            Forms\Components\Section::make('Content')
                ->schema([
                    Forms\Components\RichEditor::make('content')
                        ->label('Blog Content')
                        ->required()
                        ->fileAttachmentsDisk('cloudinary')
                        ->fileAttachmentsDirectory('blogs/attachments')
                        ->fileAttachmentsVisibility('public')
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Publication Settings')
                ->schema([
                    Forms\Components\Select::make('status')
                        ->label('Status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                            'archived' => 'Archived',
                        ])
                        ->default('published')
                        ->required(),
                ]),

            Forms\Components\Section::make('SEO')
                ->schema([
                    Forms\Components\TextInput::make('meta_title')->label('Meta Title'),
                    Forms\Components\Textarea::make('meta_description')->label('Meta Description'),
                ]),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\ImageColumn::make('featured_image_url')->label('Featured Image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
