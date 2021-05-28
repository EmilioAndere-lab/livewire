<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>LogIn | SoftPort</title>
</head>
<body>
    <div class="rounded-md p-4 text-white w-2/4 shadow-md my-10 mx-80 bg-blue-500">
        <div class="flex text-5xl">
            <img src="/img/logo.png" class="ml-40 w-40" alt="">
            <p class="mt-8">SoftPort</p>
        </div>
        <h1 class="font-bold text-5xl text-center">LogIn</h1>
        <form action="/login/auth" method="POST" class="p-5">
            @csrf
            <div class="pl-40 py-5">
                <label for="user" class="font-bold text-xl mr-2">Usuario: </label>
                <input type="text" name="user" id="user" placeholder="User" class="text-black shadow-md outline-none focus:ring-2 rounded-full font-semibold py-1 px-3">
            </div>
            <div class="pl-40 py-5">
                <label for="pass" class="font-bold text-xl mr-2">Password: </label>
                <input type="password" name="password" id="password" placeholder="Password" class="text-black shadow-md outline-none focus:ring-2 rounded-full font-semibold py-1 px-3">
            </div>
            <div class="mt-3 ml-2">
                <button id="login" class="focus:outline-none bg-white text-black font-black py-2 px-5 rounded-full hover:bg-blue-400">LogIn</button>
                <button class="focus:outline-none bg-white text-black font-black py-2 px-5 rounded-full hover:bg-blue-400">Register</button>
                <button class="focus:outline-none bg-black text-white font-black py-2 px-5 rounded-full hover:bg-white hover:text-black"><i class="fab fa-github"></i> LogIn With GitHub</button>
                <button class="focus:outline-none bg-white text-black font-black py-2 px-5 rounded-full hover:bg-blue-600 hover:text-white"><i class="fab fa-google"></i> LogIn With Google</button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

// $('#login').click(function(event){
//     event.preventDefault();
//     let user = $('#user').val();
//     let pass = $('#password').val();

//     $.ajax({
//         type: 'POST',
//         url: '/login/auth',
//         data: 'user='+user+'&pass='+pass,
//         success: function(response){
//             console.log(response);
//         }
//     })
// })

</script>
</html>