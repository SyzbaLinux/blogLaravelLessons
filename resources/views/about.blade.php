<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body{
            background-color: rgb(3, 53, 3);
            padding: 10px;
        }

        .blog-section{
            color: white;
            text-align: center;
        }

        .blog-section h2{
            font-size: 55px;
        }

        .blog-tabs{
            display: flex;
            justify-content: space-between;
            width: 30%;
            margin-left: 35%;
            border: 1px solid white;
            padding: 15px;
            border-radius: 25px;
        }

        .blog-tab{
            padding: 8px;
            width: 28%;
        }

        .blog-tab.active{
            background-color: yellow;
            color: black;
            border-radius:12px ;
        }

        .blogs{
            display: flex;
            justify-content: space-between;
            margin-top: 35px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .blog img{
            border-radius: 20px;
            scale: 0.95;
            transition: 0.2s ease-in-out;
        }

        .blog img:hover{
            scale: 1;
        }

        .blog h3{
            text-align: left;
        }

        .blog h3:hover{
            border-bottom: 3px solid white;
        }

        .blog-meta{
            display: flex;
            justify-content: space-between;
            padding:10px;
            border-top: 2px solid grey;
        }
    </style>
</head>
<body>
<div class="blog-section">
    <h2>About Page</h2>


</div>
</body>
</html>
