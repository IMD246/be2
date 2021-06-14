<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Update An user</h1>
        @include('flash-message')
        <form action="../updateuser" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$users['id']}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productPhoto">Id user</label>
                        <input type="text" disabled class="form-control" placeholder="id" aria-describedby="helpId" value="1" min="1" max="1000000" value="{{$users->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name user" aria-describedby="helpId" value="{{$users->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email user" aria-describedby="helpId" value="{{$users->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone user" aria-describedby="helpId" value="{{$users->phone}}" required>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" aria-describedby="helpId" value="{{$users->address}}" required>
                    </div>
                    <div class="form-group">
                        <label for="created_at">Created_at</label>
                        <input type="text" name="created_at" id="created_at" class="form-control" aria-describedby="helpId" value="{{$users->created_at}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Updated_at</label>
                        <input type="text" name="updated_at" id="updated_at" class="form-control" aria-describedby="helpId" value="{{$users->updated_at}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Role</label>
                        <input type="number" min="0" max="1" name="role" id="role" class="form-control" aria-describedby="helpId" value="{{$users->role}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>