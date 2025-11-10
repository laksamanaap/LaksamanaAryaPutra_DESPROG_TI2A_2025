<?php
$targetDirectory = "uploads/"; 
$errors = array();
$successMessages = array();

$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 2 * 1024 * 1024; // 2 MB

if (isset($_FILES['files'])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        
        $file_ext_arr = explode('.', $file_name);
        @$file_ext = strtolower(end($file_ext_arr));

        $fileError = ""; 

        if (in_array($file_ext, $allowedExtensions) === false) {
            $fileError = "Ekstensi file $file_name tidak diizinkan (hanya gambar).";
        }

        if ($file_size > $maxsize) {
            $fileError = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }

        if (empty($fileError)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                $successMessages[] = "File $file_name berhasil diunggah.";
            } else {
                $errors[] = "Gagal memindahkan file $file_name.";
            }
        } else {
            $errors[] = $fileError;
        }
    }
}

if (!empty($successMessages)) {
    echo implode("<br>", $successMessages);
}
if (!empty($errors)) {
    echo "<br>" . implode("<br>", $errors);
}
?>