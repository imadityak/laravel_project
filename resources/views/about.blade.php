@include('common.header')
{{-- you can only write this double brackets inside a blade.php file  --}}
<h1>{{$name}}</h1>  
@includeIf('common.inner',['page'=>"This is  about page"])
