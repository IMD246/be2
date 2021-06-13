
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
                <h1>Result of Search Author</h1>
            </div>      
        </div>       
        <table class="table">
            <thead>
                <td>ID</td>
                <td style="width: 50px;">Author Photo</td>
                <td>Author Name</td>
                {{-- create --}}               
            </thead>                            
            @foreach ($data as $item)
            <tr>               
                <td>{{$item->id }}</td>
                <td><img src="{{url('images/author')}}/{{$item->image}}" class="img-fluid" alt="..."></td>
                <td>{{ $item->nameAuthor}}</td>
                <td>                   
                    {{-- update --}}
                    
                    <form action='{{route('author.edit',$item->id)}}' method="GET">
                        <button type="submit" class="btn btn-info">Update </button>
                    </form>   

                    {{-- delete --}}
                    <form action="{{route('author.destroy',$item->id)}}" method="POST">
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
