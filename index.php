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
    <?php
      include('./connect.php')
    ?>
  </head>
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
    <article>
      <div class="content">
        <div id="wrapper">
          <div class="headline">
              <h3>Best selling products</h3>
          </div>
          <ul class="products" id="products">
            <li>
              <div class="rounded-4 product-item">
                  <div class="product-top">
                      <a href="" class="product-thumb">
                          <img class="rounded" src="./images/product.jpg" alt=""></a>
                          <a href="" class="buy-now">Buy</a>
                      <!--Buy Now-->
                  </div>
                  <div class="product-information">
                      <a href="" class="product-name">ShiNgu</a>
                      <hr width="50%" size="2" noshade>
                      <div class="product-price-sold">
                        <p class="product-price">Price: 100.00<p/>
                        <p class="product-sold">Sold: 200<p/>
                      </div>
                      <div class="edit">
                      <a href="./update.php">
                        <div class="btn btn-warning w-100 update">Update</div>
                      </a>
                      <div class="delete">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Notification</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" style="width: 25px; background-color: Red"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>
                  </div>
              </div>
          </li>
          </ul>
      </div>
      </div>
    </article>
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
      #wrapper{
          max-width: 1170px;
          margin: 0 auto;
      }
      .headline{
          text-align: center;
          margin: 40px 0px;
      }
      h3{
          font-size: 18px;
          color: #555;
          padding: 10px 20px;
          text-transform: uppercase;
          border: 1px solid #bebebe;
          display: inline-block;
          font-weight: 600;
      }
      ul#products{
          list-style: none;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
      }
      ul#products li{
          box-sizing: border-box;
          padding-left: 10px;
          padding-right: 15px;
          border-radius: 10px;
          border-color: pink;
          border-style: solid;
          padding-bottom: 5px;
          margin-bottom: 20px;
      }
      ul#products li img{
          max-width: 100%;
          height: auto;
          margin-left: 5px;
      }
      ul#products li .product-top{
          position: relative;
          overflow: hidden;
      }
      ul#products li:hover .product-top .product-thumb img{
          filter: opacity(80%);
      }
      ul#products li .product-top .product-thumb img{
          display: block;
          width: 100%;
      }
      ul#products li .product-top a.buy-now{
          text-transform: uppercase;
          text-decoration: none;
          text-align: center;
          display: block;
          background-color: #446084;
          padding: 0;
          margin-left: 5px;
          color: #fff;
          position: absolute;
          width: 225px;
          bottom: -100px;
          transition: 0.25s ease-in-out;
          opacity: 8.05;
      }
      ul#products li:hover a.buy-now{
          bottom: 0px;
      }
      ul#products li .product-information a{
          display: block;
          text-decoration: none;
      }
      ul#products li .product-information a.product-name{
          color: #334862;
          text-align: center;
          font-size: 20px;
          font-weight: 600;
          padding-top: 5px;
      }
      hr{
        margin: auto;
      }
      ul#products li .product-information .product-price-sold{
        padding-bottom: 10px;
        padding-top: 5px;
      }
      ul#products li .product-information .product-price-sold p{
          color: #111;
          font-size: 15px;
          font-weight: 600;
          display: inline;
      }
      ul#products li .product-information .product-price-sold p.product-price{
        margin-left: 5px;
        margin-right: 30px;
      }
      ul#products li .product-information .edit{
        color: black;
        font-weight: 200;
        font-size: 15px;
        padding: 0;
        margin: 0;
        text-align: center;
      }
      ul#products li .product-information .edit .update{
          border-radius: 10px;
          border-color: aqua;
          border-style: solid;
          width: 225px;
          margin-bottom:5px ;
      }
      ul#products li .product-information .edit .update:hover{
        color: aqua;
        background-color: #111;
      }
      ul#products li .product-information .edit .delete button{
        border-radius: 10px;
        border-color: aqua;
        border-style: solid;
        width: 225px;
    }
    ul#products li .product-information .edit .delete:hover button{
      color: aqua;
      background-color: #111;
    }
    @media screen and (min-width: 992px) {
    #products {
    width: 100%;
      }
    }
    @media screen and (min-width: 768px) and (max-width: 991px) {
    #products {
    width: 75%;
      }
    }
    @media screen and (max-width: 767px) {
    #products {
    width: 25%;
      }
    }
    </style>
  </body>
</html>