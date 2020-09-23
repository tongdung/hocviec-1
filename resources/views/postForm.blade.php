<form action= "{{route('postForm')}}" method= "post" >

    <input type= "text" name = "Hoten" >
    <input type= "submit" >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>