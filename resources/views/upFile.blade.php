<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit">
    @csrf
</form>