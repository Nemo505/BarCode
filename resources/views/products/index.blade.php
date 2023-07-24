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
    <div class="text-right p-5">
        <button type="button" style="padding: 8px; border-radius: 30%; border-width: 2px; background-color: rgb(242, 255, 127);">New</button>
    </div>
   
    <table class="border-separate w-4/5 m-auto border border-slate-400 ...">
        <thead>
            <tr>
                <th class="border border-slate-300 ...">ID</th>
                <th class="border border-slate-300 ...">Name</th>
                <th class="border border-slate-300 ...">Price</th>
                <th class="border border-slate-300 ...">BarCode</th>
                <th class="border border-slate-300 ...">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="border border-slate-300...">{{$product->name}}</td>
                <td class="border border-slate-300...">{{$product->price}}</td>
                <td class="border border-slate-300...">
                    <img src="{{$product->barcode}}" alt="bar code">
                    
                </td>
                <td class="border border-slate-300...">{{$product->description}}</td>
            </tr>
            @endforeach
          
        </tbody>
    </table>

</body>

</html>
