
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
        <div class="row">
            <div class="col-6">
                <h1>Manage Books</h1>
            </div>      
        </div>       
        <table class="table">
            <thead>
                <td>ID</td>
                <td style="width: 50px;">Book Photo</td>
                <td>Book Name</td>
                <td>Chức năng</td>
            </thead>
            {{-- create --}}
            <form action='{{ route('book.create') }}' method="GET">
                <button type="submit" class="btn btn-success" style="margin-left: 80%">Thêm Book Mới</button>
            </form>  
            @foreach ($databook as $item)
            <tr>
                
                <td>{{ $item->idBook }}</td>
                <td><img src="{{url('images/books')}}/{{$item->image}}" class="img-fluid" alt="..."></td>
                <td>{{ $item->nameBook }}</td>
                <td>                   
                    {{-- update --}}
                    
                    <form action='{{route('book.edit',$item->idBook)}}' method="GET">
                        <button type="submit" class="btn btn-danger">Update </button>
                    </form>   

                    {{-- delete --}}
                    <form action="{{route('book.destroy',$item->idBook)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>       
                </td>
            </tr>
            @endforeach           
        </table>    
    </div>
</body>
</html>
