<?php

namespace App\Services;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;

class CloudinaryService
{
    private static string $baseFolder = 'bincike_international/website';

    private static function buildFolder(?string $folder): string
    {
        return $folder
            ? self::$baseFolder . '/' . trim($folder, '/')
            : self::$baseFolder;
    }

    // public static function upload(UploadedFile|string $file, ?string $folder = null): string
    // {
    //     try {
    //         $options = [
    //             'folder' => self::buildFolder($folder)
    //         ];

    //         $path = is_string($file)
    //             ? $file
    //             : $file->getRealPath();

    //         if (!$path || !file_exists($path)) {
    //             throw new \Exception("Invalid file path: {$path}");
    //         }

    //         $result = Cloudinary::upload($path, $options);

    //         return $result->getSecurePath();
    //     } catch (\Exception $e) {
    //         logger()->error('Cloudinary upload failed: ' . $e->getMessage());
    //         throw $e;
    //     }
    // }
    public static function upload(UploadedFile|string $file, ?string $folder = null): string
    {
        try {
            // If it's already a URL, just return it (no need to re-upload)
            if (is_string($file)) {
                // Clean weird cases like "storage/.../https://..."
                if (preg_match('/https?:\/\/.+$/', $file, $matches)) {
                    return $matches[0]; // return the URL part
                }

                // If it's a plain URL
                if (Str::startsWith($file, ['http://', 'https://'])) {
                    return $file;
                }

                // Otherwise it's a local path string: leave it for file_exists check below
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

            return $result->getSecurePath();
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
