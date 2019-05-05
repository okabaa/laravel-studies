@if(isset($toplam))
    {{$toplam}}
@endif

<html>
<form  action="" method="post">
    {{csrf_field()}}
    <input type="text" name="birinci">
    <input type="text" name="ikinci">
    <input type="submit">
</form>
</html>