<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Avartar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- employees รับค่ามาจากมาจาก controller compact('employees') --}}
                @foreach ($employees as $item) 
                <tr>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->tel}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->avartar}}</td>
                    <td>{{$item->status}}</td>
                </tr>
        
                 @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Summary Total</th>
                    <th></th>
                 
                </tr>
            </tfoot>
        </table>
    </div>

    {{ $employees->links('pagination::bootstrap-4') }}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>