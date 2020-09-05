<html>
    <head>
        <title>Drawing form</title>
    </head>
    <body>
        <form action="drawingupload" method="POST", enctype="multipart/form-data">
            <label for="name">Name</label><br>
            <input type="text" name="drawingname" id=""><br>
            <input type="file" name="drawingimage" id="user_img">
            <br>
            @csrf
            <button>Upload Image</button>
        </form>
        
    </body>
</html>