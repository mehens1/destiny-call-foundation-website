<?php

namespace App\Services;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CloudinaryService
{
    private static string $baseFolder = 'dcf/website';

    private static function buildFolder(?string $folder): string
    {
        return $folder
            ? self::$baseFolder . '/' . trim($folder, '/')
            : self::$baseFolder;
    }

    public static function upload(UploadedFile|string $file, ?string $folder = null): string
    {

        try {
            if (is_string($file)) {
                if (preg_match('/https?:\/\/.+$/', $file, $matches)) {
                    return $matches[0]; // return the URL part
                }

                if (Str::startsWith($file, ['http://', 'https://'])) {
                    return $file;
                }

                $path = $file;
            } else {
                // UploadedFile instance
                $path = $file->getRealPath();
            }

            $options = [
                'folder' => self::buildFolder($folder)
            ];

            if (!$path || !file_exists($path)) {
                throw new \Exception("Invalid file path: {$path}");
            }

            $result = Cloudinary::upload($path, $options);

            $publicId = $result->getPublicId();
            $ext      = $result->getExtension();

            return $publicId . '.' . $ext;
        } catch (\Exception $e) {
            logger()->error('Cloudinary upload failed: ' . $e->getMessage());
            throw $e;
        }
    }

    public static function delete(string $publicId): bool
    {
        try {
            Cloudinary::destroy($publicId);
            return true;
        } catch (\Exception $e) {
            logger()->error('Cloudinary delete failed: ' . $e->getMessage());
            return false;
        }
    }

    public static function extractPublicId(string $url): ?string
    {
        $pattern = '/\/v\d+\/(.*?)\.[a-zA-Z]+$/';
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1] ?? null;
        }
        return null;
    }
}
