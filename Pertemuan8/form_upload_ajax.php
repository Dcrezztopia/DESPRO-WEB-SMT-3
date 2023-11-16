<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Dokumen</title>
    <link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" id="Unggah">
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <div id="status"></div>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="upload.js"></script>
    </div>
</body>
</html>