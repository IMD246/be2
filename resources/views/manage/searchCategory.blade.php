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

        <!-- Xuất thông báo -->
        @include('manage.headerLevel2')
        <div class="container">
            <table class="table">
                <thead>
                    <td>ID</td>
                    <td>Category Name</td>
                    {{-- create --}}
                </thead>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nameCategory}}</td>
                    <td>
                        {{-- update --}}

                        <form action='{{route('category.edit',$item->id)}}' method="GET">
                            <button type="submit" class="btn btn-info">Update </button>
                        </form>

                        {{-- delete --}}
                        <form action="{{route('category.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>