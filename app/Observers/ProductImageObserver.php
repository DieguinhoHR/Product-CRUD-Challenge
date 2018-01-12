<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ProductImageObserver
{
    public function creating(Product $product)
    {
        if (is_a($product->image, UploadedFile::class) and $product->image->isValid()) {
            $this->upload($product);
        }
    }

    public function updating(Product $product)
    {
        if (is_a($product->image, UploadedFile::class) and $product->image->isValid()) {
            $previous_image = $product->getOriginal('image');
            $this->upload($product);

            Storage::delete($previous_image);
        }
    }

    public function deleting(Product $product)
    {
        Storage::delete($product->image);
    }

    protected function upload(Product $product)
    {
        $allowed_extensions = [
            'png',
            'png',
            'gif'
        ];

        $extension = $product->image->extension();

        if (!in_array($extension, $allowed_extensions)) {
            throw new Exception('Extension nnt allowed');
        }

        $name = bin2hex(openssl_random_pseudo_bytes(8));
        $name = $name . '.' . $extension;
        $name = 'uploads/products/' . $name;

        $product->image->storeAs('', $name);
        $product->image = $name;
    }
}