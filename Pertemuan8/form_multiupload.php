<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx, .jpg">
        <input type="submit" value="unggah">
    </form>
    <!-- <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="upload.js"></script> -->
</body>
</html>