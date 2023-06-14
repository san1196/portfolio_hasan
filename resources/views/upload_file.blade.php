<form method="post" action="/upload_file" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="file_upload" type="file" required placeholder="File Upload">
    <button type="submit">Upload</button>
</form>