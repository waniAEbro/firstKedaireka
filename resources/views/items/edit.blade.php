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
                Create Item
            </h1>
        </section>
        <section>
            <form action="/item/{{$item->id}}" method="post">
                @csrf
                @method("put")
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{$item->name}}" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" value="{{$item->quantity}}" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" value="{{$item->price}}" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="item_type" class="form-label">Jenis Item</label>
                    <select name="item_type" id="item_type" class="form-select" required>
                        @foreach($item_types as $item_type)
                            @if($item->itemType->id == $item_type->id)
                                <option selected value="{{$item_type->id}}">{{$item_type->id . " - " . $item_type->name}}</option>
                            @else
                                <option value="{{$item_type->id}}">{{$item_type->id . " - " . $item_type->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Edit Item</button>
            </form>
        </section>
    </div>
</body>
</html>