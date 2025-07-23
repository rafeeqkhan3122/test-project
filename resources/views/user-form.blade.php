 <div>
    <h1>user login form</h1> 
</div>
<span>{{session('message')}}</span>
<form action="adduser" method="POST">
    @csrf
    <div style="color: red">
        <input type="text" placeholder="enter name" name='name' value="{{old('name')}}">
        @error('name')
         {{$message}} 
        @enderror
    </div>
    <div style="color: red">
        <input type="text" placeholder="enter email" name='email' value="{{old('email')}}">
        @error('email')
         {{$message}} 
        @enderror
    </div>
    <div style="color: red">
        <input type="text" placeholder="enter city" name='city' value="{{old('city')}}">
        @error('city')
         {{$message}} 
        @enderror
    </div>
    <div class="success">
        <button >add new user</button>
    </div>
    
</form>

{{-- <h1>add new user</h1>
<form action=" newuser" method="POST">
    @csrf
    <h3>Skills</h3>
    <input type="checkbox" value="php" name="skill[]" id="php">
    <label for="php">Php</label>
    <input type="checkbox" value="java" name="skill[]" id="java">
    <label for="java">Java</label>
    <input type="checkbox" value="node" name="skill[]" id="node">
    <label for="node">Node</label>
    <h3>Gender</h3>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>
    <h3>City</h3>
    <select name="city" id="">
        <option value="peshawar">Peshawar</option>
        <option value="hangu">Hangu</option>
        <option value="islamabad">Islamabad</option>
    </select>
    <h3>Age</h3>
    <input type="range" name="age" min="20" max="60">
    <div>
        <button> Add new User</button>
    </div>

</form> --}}