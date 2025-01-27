<div>
    <h2>Add new User</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
        <input type="text" placeholder="Enter your username" name="Username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your city" name="city">
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: white;
        cursor: pointer;
    }
</style>