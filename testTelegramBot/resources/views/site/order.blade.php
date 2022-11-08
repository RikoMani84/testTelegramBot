<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1 class="h1">Создание заказа</h1>
    <form action="{{route('order.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="fullname">Fullname</label>
            <input type="text" class="form-control" name="name" id="fullname" aria-describedby="emailHelp" placeholder="Rikki Monti">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rikki@monti.org">
        </div>
        <div class="form-group">
            <label >Товар</label>
            <select class="form-control" name="product">
                <option value="Knife">Knife</option>
                <option value="Ink">Ink</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Microphone">Microphone</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Order</button>
    </form>

    <div>
        <table>
            <thead>
            <tr>
                <th style="padding: 0 20px;">id</th>
                <th style="padding: 0 20px;">Name</th>
                <th style="padding: 0 20px;">Email</th>
                <th style="padding: 0 20px;">Product</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td style="padding: 0 20px;">{{$order->id}}</td>
                    <td style="padding: 0 20px;">{{$order->name}}</td>
                    <td style="padding: 0 20px;">{{$order->email}}</td>
                    <td style="padding: 0 20px;">{{$order->product}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="fullname">Post text</label>
                <input type="text" class="form-control" name="text" id="fullname" aria-describedby="emailHelp" placeholder="Test">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>

</body>
</html>
