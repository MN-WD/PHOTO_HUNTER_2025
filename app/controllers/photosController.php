<?php
namespace App\Controllers\PhotosController;

use \PDO;
use \App\Models\PhotosModel;

function showAction(PDO $connexion, int $id): void {
    include_once '../app/models/photosModels.php';
    // Toujours include_once pour une fonction, pas de risque
    $photo = PhotosModel\findOneById($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/photos/show.php';
    $content = ob_get_clean();
}