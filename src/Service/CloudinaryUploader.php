<?php

namespace App\Service;

use Cloudinary\Cloudinary;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CloudinaryUploader
{
    private Cloudinary $cloudinary;

    public function __construct(string $cloudinaryUrl)
    {
        $this->cloudinary = new Cloudinary($cloudinaryUrl);
    }

    /**
     * Upload a file to Cloudinary
     *
     * @param UploadedFile $file The file to upload
     * @param array $options Additional Cloudinary upload options
     * @return array The upload result (contains public_id, secure_url, etc.)
     */
    public function upload(UploadedFile $file, array $options = []): array
    {
        // Simple extension check only
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $extension = strtolower($file->getClientOriginalExtension());
        
        if (!in_array($extension, $allowedExtensions)) {
            throw new \Exception('Invalid file type. Please upload: ' . implode(', ', $allowedExtensions));
        }

        // Basic size check (5MB max)
        if ($file->getSize() > 5 * 1024 * 1024) {
            throw new \Exception('File too large. Maximum size is 5MB.');
        }

        $uploadOptions = array_merge([
            'folder' => 'phantomforce/profiles',
            'transformation' => [
                'width' => 300,
                'height' => 300,
                'crop' => 'fill',
                'gravity' => 'face'
            ]
        ], $options);

        // Upload to Cloudinary - this returns an ApiResponse object
        $response = $this->cloudinary->uploadApi()->upload(
            $file->getPathname(),
            $uploadOptions
        );
        
        // Convert the response to an array
        // ApiResponse implements ArrayAccess, so we can treat it like an array
        // But to be safe, we'll convert it to a real array
        $result = [];
        foreach ($response as $key => $value) {
            $result[$key] = $value;
        }
        
        return $result;
    }

    public function delete(string $publicId): void
    {
        $this->cloudinary->uploadApi()->destroy($publicId);
    }

    /**
     * Get optimized image URL
     */
    public function getOptimizedImageUrl(string $publicId, array $options = []): string
    {
        return $this->cloudinary->image($publicId)
            ->secure()
            ->format('auto')
            ->quality('auto')
            ->toUrl();
    }
}