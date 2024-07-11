<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AlexisKitchen.css">

    <!-- CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- POPPER REFERENCE-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    

    <!-- JAVASCRIPT REFERENCE-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  


    <title>Alexis' Kitchen | Newsletter</title>
    <link rel="icon" type="image/x-icon" href="WebsitePhotos/AlexisKitchenLogo.png">
</head>
<body>


    <div class="line-above-menu"></div>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #EDAEC0;"> 
            <div class="container-fluid">

              <a class="navbar-brand" href="index.html">
                <img src="WebsitePhotos/AlexisKitchenLogo.png" alt="Logo" width="30px" height="24px" class="d-inline-block align-text-top">
                Alexis' Kitchen
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="AboutPage.html">About</a>
                  </li>

                  <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Recipes
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="RecipesPage.html">Featured Recipes</a></li>
                      <li><a class="dropdown-item" href="EntreesPage.html">Entrées</a></li>
                      <li><a class="dropdown-item" href="AppetizersPage.html">Appetizers</a></li>
                      <li><a class="dropdown-item" href="DessertsPage.html">Desserts</a></li>
                    </ul>
                  </div>

                <li class="nav-item">
                    <a class="nav-link active" href="Newsletter.php">Newsletter</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>


        <!-- Page Banner -->
        <section class="top-container">
            <header class="showcaseloop">
            <h1 class="bannerfont" style="color: black;" >Stay in the loop.
            </h1>
            </header>
        </section>

        <div class="container mt-5">
            <h2>Join our newsletter for new recipes and updates!</h2>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email here!" name="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" id="comment" placeholder="Type any feedback you have here!" name="comment" rows="4"></textarea>
                </div>
                <br>
                <button type="submit" class="ViewRecipeButton">Submit</button>
            </form>
        </div>

    <!-- Footer Section -->

      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary" style="font-family: Mukta-Light, Helvetica; font-size: 20px; font-weight: 100; color: black;">&copy; Alexis' Kitchen, Inc</p>
    
        <a href="index.html" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="WebsitePhotos/AlexisKitchenLogo.png" style="width: 20%;">
        </a>
    
        <ul class="nav col-md-4 justify-content-end" style="font-family: Mukta-Light, Helvetica; font-size: 15px; font-weight: 100; color: black;">
          <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="AboutPage.html" class="nav-link px-2 text-body-secondary">About</a></li>
          <li class="nav-item"><a href="RecipesPage.html" class="nav-link px-2 text-body-secondary">Recipes</a></li>
          <li class="nav-item"><a href="Newsletter.php" class="nav-link px-2 text-body-secondary">Newsletter</a></li>
        </ul>
      </footer>
      
</body>



</html>
