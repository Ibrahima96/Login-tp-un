<?php 
session_start();
$errer= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email =$_POST['email'];
  $password =$_POST['password'];
  $userEmail='Bicom Lab';
  $userPassword='BicomLab@123';
  if($userEmail == $email && $userPassword == $password){
    $_SESSION['login']= $email;
    header('Location: conn.php');
  }else{
    $errer= '<div role="alert" class="alert alert-error">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Error! email ou mote passe incorecte.</span>
</div>';
  }
} 

if(isset($_SESSION['login'])){
    setcookie("login", $_SESSION['login'], time() + (86400 * 30), "/");
}

;?>
<!doctype html>
<html data-theme="cupcake">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form action="" method="POST">
    <div class="text-center ">
      <h1 class="text-3xl font-bold my-5">Login</h1>
    </div>
    <div class="container mx-auto my-20 space-y-4 w-90 ">
      <div>
        <label class="floating-label">
          <input type="text" placeholder="nom d'utilisateur" class="input input-sm" name="email" />
          <span>login</span>
        </label>
      </div>
      <div>
        <label class="floating-label">
          <input type="password" placeholder="Votre mots de passe" class="input input-sm" name="password" />
          <span>Password</span>
        </label>
      </div>
      <div>
        <button class="btn btn-primary px-[29px]" type="submit">Login</button>
      </div>
  </form> 
  <?= $errer?>


</body>

</html