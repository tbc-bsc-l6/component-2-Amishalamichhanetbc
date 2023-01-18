<!DOCTYPE html>
<html>

<head>
  <title>My Website</title>
  <style>
    body {
      background-image: url('image.png');
      background-size: cover;
      color: white;
    }

    /* #products img {
      width: 10%;
    } */
    .container {
      display: flex;
      flex-direction: row;
      justify-content:space-around;
    }
    .content{
      max-width: 30px;
      max-height: 30px;
    }
    
    
    

  </style>
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LogIn </a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      
      @endif
      @endauth
    </div>
    @endif

    <h1 >Welcome to My Website</h1>

    <div id="content" class="container">
      <div class="content" >
        <img src="books.png" alt="product1" height="80px" width="80px"><br>
        <button>Books</button><br><br>
      </div>
      <div class="content" >
      <img src="game.png" alt="product2" height="80px" width="80px"><br>
      
      <button>game</button><br><br>
    </div>
      <div class="content">
      <img src="cd.png" alt="product3" height="80px" width="80px"><br>
      <button>Cd</button><br><br>
    </div>
  </div>
</body>

</html>
