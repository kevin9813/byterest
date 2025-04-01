<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;


class ImageHelper
{

    protected $manager;

    public function __construct()
    {
        // Inicializar el gestor de imágenes con el driver GD
        $this->manager = new ImageManager(new Driver());
    }

    public function resizeAndSaveImage($file, string $path, ?int $width = null,  $filename = null, ?int $height = null, int $quality = 80)
    {
        // Leer la imagen
        $image = $this->manager->read($file);

        // Si se define ancho o alto, redimensionar proporcionalmente
        if ($width || $height) {
            $image->scale(width: $width, height: $height);
        }

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true, true);
        }
        // Generar un nombre único
        if (!$filename) {
            $filename = uniqid(); // Si no se proporciona un nombre, se genera uno aleatorio
        }

        $filename = $filename.'.'.$file->getClientOriginalExtension();
        $fullPath = public_path($path . '/' . $filename);

        // Guardar la imagen con la calidad especificada
        $image->toJpeg($quality)->save($fullPath);

        return $filename;
    }
}
