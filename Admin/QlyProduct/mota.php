<html>

<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <!-- Make sure the path to CKEditor is correct. -->
<script src="../ckeditor/ckeditor.js"></script>
</head>

<body>
    <form>
        <textarea name="editor1" id="editor1" rows="30" cols="80"></textarea>

        <script>
            CKEDITOR.replace('editor1');
        </script>
    </form>
</body>

</html>