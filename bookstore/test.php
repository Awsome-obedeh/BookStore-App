<?php
    if(isset($_POST['add'])){
        echo $_POST['bookName'];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/bac611bc00.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">BookStore</div>
        <div class="py-2 d-flex justify-content-center">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" entype="multipart/form-data">
                <input type="text" class="form-data p-3 m-2" placeholder="ID">
                <input type="text" class="form-data p-3 m-2" placeholder="bookname" name="bookName">
                <input type="text" class="form-data p-3 m-2" placeholder="BookPrice" name="price">
                <input type="text" class="form-data p-3 m-2" placeholder="publisher" name="publisher">
                <div class="row">
                    <div class="col-3">
                        <button class="form-control btn  btn-success text-white"name="add" type="submit" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-3">
                        <button class="form-control btn  btn-primary text-white" name="refresh" type="submit"><i class="fas fa-refresh" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-3">
                        <button class="form-control btn  btn-secondary text-white" name="edit" type="submit"><i class="fas fa-pen-alt"></i></button>
                    </div>
                    <div class="col-3">
                        <button class="form-control btn  btn-danger text-white" name="delete" type="submit" type="button"><i class="fa fa-trash"></i></button>
                    </div>
                </div>   
           
            </form>
        </div>
    </div>

</body>
</html>