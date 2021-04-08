
<!DOCTYPE html>
<html style="text-align: center;">
<h2>Register</h2>
    <form method="POST" action="create" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach</ul>
        </div>
        @endif


        <div class="form-group">
            <!-- <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"> -->
            {{ Form::label('name','Name:')}}
            {{ Form::text('name', Input::old('name'),array('class' => 'form-control'))}}
        </div>
    <br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <br>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" class="form-control" id="mobile" name="mobile">
        </div>
        <br>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">  
        </div>
        <br>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" class="form-control" id="male" name="gender" value="male">Male 
            <input type="radio" class="form-control" id="female" name="gender" value="female">Female
        </div>
        <br>
        <div class="form-group">
            <label for="hobbies">Hobbies:</label>
            <input type="checkbox" class="form-control" id="hobbies" value="1" name="hobbies[]">photography
            <input type="checkbox" class="form-control" id="hobbies" value="2" name="hobbies[]">gardening<br>
            <input type="checkbox" class="form-control" id="hobbies" value="3" name="hobbies[]">hiking
            <input type="checkbox" class="form-control" id="hobbies" value="4" name="hobbies[]">calligraphy<br>
            <input type="checkbox" class="form-control" id="hobbies" value="5" name="hobbies[]">painting
            <input type="checkbox" class="form-control" id="hobbies" value="6" name="hobbies[]">camping
            <!-- <input type="checkbox" class="form-control" id="cooking" name="cooking">cooking -->
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <br>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <br>
        <div class="form-group">
            <label for="state">State:</label>
            <select id="state" name="state">
                   <option value="Andhra Pradesh">Andhra Pradesh</option>
                   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                   <option value="Assam">Assam</option>
                   <option value="Bihar">Bihar</option>
                   <option value="Bihar">Bihar</option>
                   <option value="Chhatisgarh">Chhatisgarh</option>
                   <option value="Goa">Goa</option>
                   <option value="Gujarat">Gujarat</option>
                   <option value="Haryana">Haryana</option>
                   <option value="Himachal Pradesh">Himachal Pradesh</option>
                   <option value="Jharkhand">Jharkhand</option>
                   <option value="Karnataka">Karnataka</option>
                   <option value="Kerala">Kerala</option>
                   <option value="Madhya Pradesh">Madhya Pradesh</option>
                   <option value="Maharashtra">Maharashtra</option>
                   <option value="Manipur">Manipur</option>
                   <option value="Meghalaya">Meghalaya</option>
                   <option value="Mizpram">Mizpram</option>
                   <option value="Nagaland">Nagaland</option>
                   <option value="Odisha">Odisha</option>
                   <option value="Punjab">Punjab</option>
                   <option value="Rajasthan">Rajasthan</option>
                   <option value="Sikkim">Sikkim</option>
                   <option value="Tamil Nadu">Tamil Nadu</option>
                   <option value="Telangana">Telangana</option>
                   <option value="Tripura">Tripura</option>
                   <option value="Uttarakhand">Uttarakhand</option>
                   <option value="Uttar Pradesh">Uttar Pradesh</option>
                   <option value="West Bengal">West Bengal</option>

            </select>
        </div>
        <br>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
       
    </form>
</html>
