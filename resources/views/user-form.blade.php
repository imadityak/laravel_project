{{-- User Form --}}
{{-- @if ($errors->any())
@foreach ($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
@endforeach
@endif --}}
<div>
    <h1>Add new User</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
        <input type="text" placeholder="Enter your username" name="username">
        <span style="color:red">@error('username'){{$message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email">
            <span style="color:red">@error('email'){{$message }}@enderror</span>
        </div>
        {{-- check box --}}
        <div class="input-wrapper">
            <h3>User Skills</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="PHP">
            <label for="PHP">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="Node">
            <label for="Node">Node</label>
            <input type="checkbox" name="skill[]" value="java" id="Java">
            <label for="Java">Java</label>
            <input type="checkbox" name="skill[]" value="spring" id="Spring">
            <label for="Spring">Spring</label>
            <span style="color:red">@error('skills'){{$message }}@enderror</span>
        </div>
        {{-- radio buttons dont forget to put same name --}}
        <div class="input-wrapper">
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <span style="color:red">@error('gender'){{$message }}@enderror</span>
        </div>
        {{-- drop down menu --}}
        <div class="input-wrapper">
            <h3>City</h3>
            <select name="city" id="">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurugram">Gurugram</option>
            </select>
            <span style="color:red">@error('city'){{$message }}@enderror</span>
        </div>
        <h3>Age</h3>
        <div>
            <input type="range" name="age" min="18" max="100">
            <span style="color:red">@error('age'){{$message }}@enderror</span>
        </div>
        {{-- button --}}
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    /* input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    } */
    .input-wrapper{
        margin: 10px;
    }
    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: rgb(208, 208, 208);
        cursor: pointer;
    }
</style>