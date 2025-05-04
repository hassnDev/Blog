 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<!-- <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"> -->
<link href="css/bootstrap.min.css"     rel="stylesheet">

<nav  class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container-fluid">
   <a class="navbar-brand" href="#">BLOG</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="#">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">ABOUT</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Dropdown
         </a>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">Action</a></li>
           <li><a class="dropdown-item" href="#">Another action</a></li>
           <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item" href="#">Something else here</a></li>
         </ul>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" aria-disabled="true">Disabled</a>
       </li>
     </ul>
     <form class="d-flex" role="search">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form>
   </div>
 </div>
</nav>

<div class="text-center">

<button  type="button" class="btn btn-success">Create</button>
</div>

<table class="table">
 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">NAME</th>
     <th scope="col">Last</th>
     <th scope="col">DATING</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <th scope="row">1</th>
     <td>Mark</td>
     <td>Otto</td>
     <td>@mdo</td>
   </tr>
   <tr>
     <th scope="row">2</th>
     <td>Jacob</td>
     <td>Thornton</td>
     <td>@fat</td>
   </tr>
   <tr>
     <th scope="row">3</th>
     <td colspan="2">Larry the Bird</td>
     <td>@twitter</td>
   </tr>
 </tbody>
</table>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src=" 'js/bootstrap.min.js"></script>

 </body>
 </html><?php /**PATH C:\Users\LCT\Desktop\project\resources\views/welcome.blade.php ENDPATH**/ ?>