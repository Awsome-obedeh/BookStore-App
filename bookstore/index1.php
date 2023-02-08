<?php
    require('config/Db_connect.php');

    
    // $book_nameErr=$book_priceErr=$publisherErr="";
    

    // if(isset($_POST['submit'])){
    // // validate the bookname field
    // echo 'we nedd  more books';
    //     if(empty($_POST['book_name'])){
    //         $book_nameErr="BookName is required";
    //     }
    //     else{
    //         $book_name=filter_input(INPUT_POST,'book_name',FILTER_SANITIZE_SPECIAL_CHARS);
    //         echo $$bookname;
    //     }

    // // validate the publisher field
    // if(empty($_POST['publisher'])){
    //     $publisherErr="publisher is required";
    // }
    // else{
    //     $publisher=filter_input(INPUT_POST,'publisher',FILTER_SANITIZE_SPECIAL_CHARS);
    // } 
    
    // // validate the bookprice field
    //     if(empty($_POST['book_price'])){
    //         $book_priceErr="BookPrice is required";
    //     }
    //     else{
    //         $book_name=filter_input(INPUT_POST,'book_price',FILTER_SANITIZE_SPECIAL_CHARS);
    //     }
    

        
    // }

    if(isset($_POST['add'])){
        echo 'create button added'; 
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
   
    
    <title>Book store</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron bg-dark text-white  text-center"><i class="fa fa-book fa-2x"></i><h3 >Book store</h3></div>

        <div class="d-flex justify-content-center">

            <form  method="POST" action= "<?php echo $_SERVER['SELF']; ?>" entype="multipart/form-data" class="w-50">
                <div class="py-2">
                    <div class="input-group mb-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-warning"><i class="fa fa-id-badge "></i></span>
                            <input placeholder="ID" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" reqiured>
                            
                        
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-book"></i></span>
                            <input placeholder="Bookname" name="book_name" type="text" class="form-control" aria-label="Amount (to the nearest dollar)"required>
                            
                        
                        </div>
                    </div> 
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input placeholder="Publisher" name="publisher" type="text" class="form-control w-50" aria-label="Amount (to the nearest dollar)" required>
                            
                        
                        </div>
                    </div> 
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-usd" aria-hidden="true"></i></span>
                            <input placeholder="Book Price"  name="book_price"type="text" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                            
                        </div>
                    </div>                  
                </div>           
                <div class="row">
                    <div class="col-3">
                        <button class="form-control btn  btn-success text-white"name="add" type="submit" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-3">
                        <button class="form-control btn  btn-primary text-white" name="refresh" type="button"><i class="fas fa-refresh" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-3">
                        <button class="form-control btn  btn-secondary text-white" name="edit" type="button"><i class="fas fa-pen-alt"></i></button>
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