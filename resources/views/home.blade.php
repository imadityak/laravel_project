@includeIf('common.header')
<h1>Home Page</h1>
{{-- Question -> Can this file work if we remove blade and the ans is yes. --}}

<a href="/">Welcome</a> 
<a href="/about/anil">About Us</a>
<h1>Admin Login</h1>

<h1>{{rand()}}</h1>
@includeIf('common.inner',['page'=>"This is the home page"])
{{-- <h1>{{$array[2]}}</h1> --}}

{{-- conditional statement --}}
{{-- @if ($n =='Aditya')
<h1>This is Aditya</h1>
@elseif ($n == 'Kapil')
<h1>This is Kapil</h1>
@else
<h1>Other user</h1>
@endif --}}

{{-- for loops  --}}
{{-- <div>
    @for ($i=0;$i<3;$i++)
        <h3>{{$i}}</h3>
    @endfor
</div> --}}

{{-- for-each loop using with arrays --}}
{{-- <div>
    @foreach ($array as $user)
        <h3>{{$user}}</h3>
    @endforeach
</div> --}}