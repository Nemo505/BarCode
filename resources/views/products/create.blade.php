<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="w-4/5 m-auto">
    
<div class="w-full py-8">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route("products.store") }}" method="post">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Product Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="name" type="text" placeholder="Product Name">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Price
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="price" name="price" type="text" placeholder="Price">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Description
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="desc" name="desc" type="text" placeholder=""  cols="30" rows="5"></textarea></textarea>
        </div>
      
        <div class="flex items-center justify-between"> 
            <a class="inline-block align-baseline font-bold text-sm text-yellow-500 hover:text-yellow-800" href="#">
                Cancel
            </a>
            <a href="">
                <button
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Save
                </button>
            </a>
        </div>
    </form>
    
</div>

    

</body>

<footer>
    <p class="text-center text-gray-500 text-xs">
        &copy;2023 SCN. All rights reserved.
    </p>
</footer>

</html>
