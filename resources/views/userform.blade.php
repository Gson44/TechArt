<html>
    <head>
        <title>3d model form</title>
    </head>
    <body>
        <form action="upload" method="POST", enctype="multipart/form-data">
            <label for="name">Name</label><br>
            <input type="text" name="name" id=""><br>
            <input type="file" name="image" id="user_img">
            <br>
            @csrf
            <button>Upload Image</button>
        </form>
        
    </body>
</html>