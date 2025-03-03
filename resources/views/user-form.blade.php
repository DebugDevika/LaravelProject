<div>
    <h2> Add New User</h2><br>
    <!-- @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif -->
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" class="text-field {{ $errors->first('name') ? 'input-error' : '' }}" placeholder="Enter full name" name="name" id="name" value="{{ old('name') }}" >
            @error('name')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <input type="email" class="text-field {{ $errors->first('email') ? 'input-error' : '' }}" placeholder="Enter email" name="email" id="email" value="{{ old('email') }}" >
            @error('email')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <input type="password" class="text-field {{ $errors->first('password') ? 'input-error' : '' }}" placeholder="Enter password" name="password" id="password" value="{{ old('password') }}" >
            @error('password')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <h5>Skills:</h5>
            <input type="checkbox" name="skill[]" id="php" value="PHP" {{ in_array('PHP', old('skill', [])) ? 'checked' : '' }}>
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="js" value="JS" {{ in_array('JS', old('skill', [])) ? 'checked' : '' }}>
            <label for="js">JS</label>
            <input type="checkbox" name="skill[]" id="python" value="Python" {{ in_array('Python', old('skill', [])) ? 'checked' : '' }}>
            <label for="python">Python</label>
            @error('skill')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <h5>Gender:</h5>
            <input type="radio" name="gender" id="male" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="Other" {{ old('gender') == 'Other' ? 'checked' : '' }}>
            <label for="other">Other</label>
            @error('gender')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <h5>City:</h5>
            <select name="city" id="city">
                <option value="">Select City</option>
                <option value="Delhi" {{ old('city') == 'Delhi' ? 'selected' : '' }} >Delhi</option>
                <option value="Mumbai" {{ old('city') == 'Mumbai' ? 'selected' : '' }} >Mumbai</option>
                <option value="Bangalore" {{ old('city') == 'Bangalore' ? 'selected' : '' }} >Bangalore</option>
                <option value="Chennai" {{ old('city') == 'Chennai' ? 'selected' : '' }} >Chennai</option>
                <option value="Bhopal" {{ old('city') == 'Bhopal' ? 'selected' : '' }} >Bhopal</option>
                <option value="Ahmedabad" {{ old('city') == 'Ahmedabad' ? 'selected' : '' }} >Ahmedabad</option>
            </select>
            @error('city')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <!-- <div class="input-wrapper">
            <h5>Languages:</h5>
            <select name="languages[]"  id="languages"  multiple>
                <option value="">Select Languages</option>
                <option value="english" {{ in_array('english', old('languages', [])) ? 'selected' : '' }}>English</option>
                <option value="hindi" {{ in_array('hindi', old('languages', [])) ? 'selected' : '' }}>Hindi</option>
                <option value="malayalam" {{ in_array('malayalam', old('languages', [])) ? 'selected' : '' }}>Malayalam</option>
                <option value="gujarati" {{ in_array('gujarati', old('languages', [])) ? 'selected' : '' }}>Gujarati</option>
                <option value="french" {{ in_array('french', old('languages', [])) ? 'selected' : '' }}>French</option>
            </select>
            @error('languages')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> -->
        <div class="input-wrapper">
            <h5>Age:</h5>
            <input type="range" name="age" min="18" max="62">
            @error('age')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-wrapper">
            <button type="submit">Add New User</button>
        </div>
    </form>
</div>
<style>
    .text-field {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper {
        margin: 10px;
    }
    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: white;
        cursor: pointer;
    }
    .input-error {
        border: 1px solid red;
        color: red;
    }
</style>
