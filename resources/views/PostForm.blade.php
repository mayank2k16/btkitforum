@extends('layouts.app')
@section('content')

<form action="addpost" method="post" enctype='multipart/form-data'>
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
Body::<input type="text" name="content"><br><br>
    
<input type="file" name="image">
    
    <input type="submit" value="add">

</form>


@endsection