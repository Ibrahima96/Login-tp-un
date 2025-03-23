<?php 
// verifition si l'email ou le mots de passe n'est pas entrer ou valider
session_start();
if (!isset($_SESSION['login'])){
header('location:deconexion.php ');
}else{
    $message ='<div role="alert" class="alert alert-success">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Connexion réeussie au panel des admins </span>
</div>';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container mx-auto py-3 ">
    <?php echo $message;?>
    </div>
   <div class="card w-100 bg-base-100 card-md shadow-sm container mx-auto p-5">
    <div class="mt-[50px]">
    <h1 class="text-3xl">Welcome Admin! <?=  $_SESSION['login'];?></h1>
    <p class="text-center text-green-600"> Bienvenu a la page d'administration du site</p>
   <div>
     <a href="deconexion.php" class="btn ghost btn-block my-5">Deconection</a>
   </div>
    </div>
   </div>
</body>
</html>