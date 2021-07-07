<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <style>
        #content {
            margin: 20px auto;
            border: 1px solid #cbcbcb;
            overflow: auto;
            padding: 20px;
        }

        form {
            margin: 20px auto;
        }

        form div {
            margin-top: 5px;
        }

        #img_div {
            padding: 5px;
            border: 1px solid #cbcbcb;
            float: left
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }

        #img_div img {
            float: left;
            margin: 5px;
            width: 400px;
            height: auto;
        }
    </style>
</head>

<body>
    <div id="content">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <input type="file" name="image">
            <button type="submit" name="upload">POST</button>
            <?php require_once "sau_upload.php" ?>
        </form>
    </div>
</body>

</html>