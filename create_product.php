<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm bg-light" id="menu">
        <div class="container-fluid">
          <a href="./index.php" class="navbar-brand">
            <img class="rounded-cicle" style="height: 50px; width:50px; margin-right:2rem " src="./images/toylogo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon""></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="./index.php" class="nav-link active" style="margin-right:1rem">Home Page</a>

            </li>
            <li class="nav-item">
              <a href="./index.php" class="nav-link" style="margin-right:1rem">Toy</a>
            </li>
            <li class="nav-item">
              <a href="./create.php" class="nav-link">New</a>
            </li>
          </ul>
          <form action="" class="d-flex" id="xform">
            <input required type="text" placeholder="Search" class="form-control">
            <button type="submit" class="btn btn-warning pull-right cus-bts"> Search</button>
          </form>
        </div>
        </div>
      </nav>
    </header>
    <!-- create product form-->
    <?php
        include('connect_mysqli.php');
        $get_categories = "select * from category";
        $categories = mysqli_query($conn, $get_categories);

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $title = $_POST["name"];
            $price = $_POST["price"];
            $category = $_POST["category"];
            
            $thumbnail = $_FILES["thumbnail"];
            $thumbnailName = $thumbnail["name"];
            $thumbnailTmpName = $thumbnail["tmp_name"];
            $thumbnailPath = "images/" . $thumbnailName;
            move_uploaded_file($thumbnailTmpName, $thumbnailPath);
            
            // process form submission
            $sql = "insert into products (prod_name, price, category_id, thumbnail) values(?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sdis", $title, $price, $category, $thumbnailPath); // string, double, integer, string

            // execute the prepared statement

            if ($stmt->execute()) {
                //Redirect to the homa page
                header('Location: index.php');
                exit();
            }else {
                echo "Error:" .$sql ."<br>" .$conn->error;
            }

            // close the prepared satement and database connection
            $stmt->close();
        }
        $conn->close()
    ?>
    <form action="" method="POST" enctype="multipart/form-data" class="row container mx-auto py-3" id="form-create">
    <h1>Create a product</h1>
        <div class="mb-3">
            <label for="prod_name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="prod_name" placeholder="Input product name">
          </div>
        <div class="mb-3">
            <label for="prod_price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="prod_price" placeholder="Input product price">
          </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category[]" class="form-select" id="category">
              <option selected disabled value="">Choose a category</option>
              
                <?php
                    foreach ($categories as $category) { ?>
                        <option class="text-dark" value="<?php echo $category["id"] ?>"> <?php echo "#" .$category["cate_name"] ?> 
                    </option>
                <?php }
                ?>
            </select>
          </div>
        <div class="mb-3">
            <label for="prod_img" class="form-label">Product Image</label>
            <input type="file" name="thumbnail" class="form-control" id="prod_img">
          </div>
          <div class="mb-3 text-center">
            <a href="./index.php" class="btn btn-outline-secondary">Back to products</a>
            <button class="btn btn-success" name="addpro">Create</button>
          </div>
    </form>
    <footer>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&display=swap');
        *{
            padding: 0;
            margin: 0;
        }
        body{
            font-family: 'Patrick Hand', cursive;
            line-height: 1.15;
        }
      nav#menu{
        background: url(./images/menubg.jpg);
        height: 60px;
      }
      ul li a{
        font-weight: 900;
        color: #fff;
        font-family: 'Patrick Hand', cursive;
        font-size: 60px;
        text-decoration: none;

      }
      ul li a.nav-link{
        padding-left: 2rem;
        padding-right: 4rem;
      }
      #xform{
        width: 600px;
        display: flex;
        flex-direction: row;
        margin-top: 0px;
        margin-left: 400px;
      }
      #xform input{
        margin-right: 5px;
      }
    @media screen and (min-width: 992px) {
    #form-create {
    width: 100%;
      }
    }
    @media screen and (min-width: 768px) and (max-width: 991px) {
    #form-create {
    width: 75%;
      }
    }
    @media screen and (max-width: 767px) {
    #form-create {
    width: 25%;
      }
    }
    </style>
  </body>
</html>