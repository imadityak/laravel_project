@includeIf('common.header')
{{-- you can only write this double brackets inside a blade.php file  --}}
<h1>{{$name}}</h1>

{{-- It will check whether this view is available or not --}}
@includeIf('common.inner',['page'=>"This is  about page"])

<x-message-banner msg="User Login Successful" class="success"/>
<x-message-banner msg="User SignUp Successful"  class="success"/>
<br>
<br>
<br>
<br>
<x-message-banner msg="Incorrect Password" class="failed"/>
<br>
<br>
<br>
<x-message-banner msg="Try Again" class="warning"/>

<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        display: inline-block;
        margin: 10px;
    }
    .failed{
        background: rgb(255, 184, 184);
        color: red;
        padding: 3px 10px;
        display: inline-block;
        margin: 10px;
    }
    .warning{
        background: rgb(255, 255, 56);
        color: rgb(143, 143, 0);
        padding: 3px 10px;
        display: inline-block;
        margin: 10px;
    }
</style>
