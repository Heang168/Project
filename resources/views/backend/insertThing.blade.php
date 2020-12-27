<!DOCTYPE html>
<html>
    <head>
        <title>Insert Information | Thing To Do</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .x1{
                margin-right: 30%;
                margin-left: 30%;
            }

            .btnSubmit
            {
                border:none;
                border-radius:1.5rem;
                padding: 1%;
                width: 20%;
                cursor: pointer;
                background: #0062cc;
                color: #fff;
            }
        </style>
    </head>
    <body>
    <h1 align="center">Insert Location Information</h1>
    <form action="{{ route('insertThing')}}" method="POST" class="x1" id="nameform">
        @csrf

        <div class="form-group">
            <label for="name">Place Name:</label>
            <input type="text" class="form-control" name="name"required>
        </div>

        <div class="form-group">
            <label for="price">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>          

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="URL of image" required>
        </div> 
       
        <br>

        <button type="submit" class="btnSubmit" form="nameform">Submit</button>
    </form>
   
    </body>
</html>