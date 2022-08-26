<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <section class="d-flex justify-content-center m-3">
            <h1>
                CRUD First
            </h1>
        </section>
        <section class="d-flex justify-content-center m-3">
            <a href="/item" class="btn me-3 btn-dark disabled">Item</a>
            <a href="/item-type" class="btn btn-outline-dark">Item Type</a>
        </section>
        <section>
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Item</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jenis Item</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->itemType->name}}</td>
                            <td class="d-flex">
                                <a href="/item/{{$item->id}}/edit" class="btn btn-warning m-1">Edit</a>
                                <form action="/item/{{$item->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-danger m-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endForeach
                    <tr>
                        <th colspan="5" class="text-center">Create Element</th>
                        <td>
                            <a href="/item/create" class="btn btn-success">Create</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$items->links()}}
            </div>
        </section>
    </div>
</body>
</html>