<?php
    require('config/Db_connect.php');
    $nameErr=$publisherErr=$priceErr=$success='';
    $bookname=filter_input(INPUT_POST,'bookname',FILTER_SANITIZE_SPECIAL_CHARS);
    $bookprice=filter_input(INPUT_POST,'bookprice',FILTER_SANITIZE_SPECIAL_CHARS);
    $publisher=filter_input(INPUT_POST,'publisher',FILTER_SANITIZE_SPECIAL_CHARS);

// validate inputfields
    if(isset($_POST['add'])){
        if(empty($bookname)){
            $nameErr='Plese filll in book name';
        }
        else{

        }
        if(empty($bookprice)){
            $priceErr='Plese filll in book price';
        }
        else{

        }
        if(empty($publisher)){
            $publisherErr='Plese filll in publisher';
        }
        else{

        }
        // insert into DAtabase
        if(!empty($bookname && $publisher && $bookprice)){
              $sql= "INSERT INTO books(BookName,Publisher,Price) VALUES('$bookname', '$publisher','$bookprice')";
              $query=mysqli_query($conn,$sql);
              if($query){
                 $success= 'Record successfully inserted';

              }
              else{
                  echo 'error '.mysqli_error($conn);
              }
        }

       

      
        

         
    }
    
     // extract record from database
        $sql="SELECT * FROM books";
        $query=mysqli_query($conn,$sql);
        $results=mysqli_fetch_all($query,MYSQLI_ASSOC);
    
    function getDAta(){

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
    <title>Book Store</title>
</head>
<body>
    <h5 class="w-100 bg-success py-4 text-white"><?php echo $success; ?></h5>
    <div class="container">
            <div class="jumbotron bg-dark text-white  text-center"><i class="fa fa-book fa-2x"></i><h3 >Book store</h3></div>

            
            <div class="d-flex justify-content-center mb-3">

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" entype="multipart/form-data" class="w-50"  >
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-warning"><i class="fa fa-id-badge "></i></span>
                                <input placeholder="ID" name="id" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" reqiured>
                                
                            
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="input-group mb-2">
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                                <input placeholder="Bookname" name="bookname" type="text" class="form-control <?php echo $nameErr? 'is-invalid' :null; ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="invalid-feedback">
                                    <?php echo $nameErr; ?>
                                 </div>
                            
                            </div>
                        </div> 
                        <div class="pt-2">
                            <div class="input-group mb-2">
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input placeholder="Publisher" name="publisher" type="text" class="form-control w-50 <?php echo $priceErr? 'is-invalid':null; ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="invalid-feedback">
                                    <?php echo $priceErr?>
                                </div>
                            
                            </div>
                        </div> 
                        <div class="pt-2">
                            <div class="input-group mb-2">
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                <input placeholder="Book Price"  name="bookprice"type="text" class="form-control <?php echo $publisherErr? 'is-invalid':null; ?>" aria-label="Amount (to the nearest dollar)" >
                                <div class="invalid-feedback">
                                    <?php echo $publisherErr?>
                                </div>
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
            <table class="table table-striped table-dark mt-5">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Bookname</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Price</th>
                    <th scope="col bg-warning"> Edit</th>
                    </tr>
                </thead>
                <?php foreach($results as $result): ?>
                <tbody id="tbody">
                    
                    <tr>
                        <td data-id="<?php echo $result['id']?>"><?php echo $result['id']; ?></td>
                        <td data-id="<?php echo $result['id']?>"><?php echo $result['BookName']; ?></td>
                        <td data-id="<?php echo $result['id']?>"><?php echo $result['Publisher']; ?></td>
                        <td data-id="<?php echo $result['id']?>"><?php echo $result['Price']; ?></td>
                        <td><i data-id="<?php echo $result['id']?>" id='edit' class="fa fa-pencil-square-o text-warning"></i></td>
                    </tr>
                </tbody> 
               <?php endforeach; ?>
              
                </table> 
              
        </div>
</body>
<!-- javascript -->
<script src="../javascript/jquery.js"></script>
<script>
    $('#edit').click(e=>{
      displayData(e);
      console.log ('win');
      let textvalue=displayData(e);
      console.log(textvalue);
      let id=$("Input[name*='bookname']");
      let bookname=$("input[name*='bookname']");
      let publisher=$("input []")
    });
    function displayData(e){
        let id=0;
        const td=$("#tbody tr td");
        let textvalue=[];
        for(const value of td){
            if (value.dataset.id==e.target.dataset.id){
                textvalue[id++]=value.textContent;
             }
         }
         return textvalue;
    }
    

</script>
</html>