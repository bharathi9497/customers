
<!DOCTYPE html>
<html style="text-align: center;">
<h2>Edit Customer Details</h2>
    <form method="POST" action="/create/{{$customer->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach</ul>
        </div>
        @endif

<!-- {{ Form::model($customer, array('route' => array('create.update', $customer->id), 'method' => 'PUT'))}} -->
        <div class="form-group">
            {{ Form::label('name','Name')}}
            {{ Form::text('name', null, array('class' => 'form-control'))}}
        </div>
    <br>
        <div class="form-group">
            <!-- <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"> -->
            {{ Form::label('email','Email')}}
            {{ Form::text('email',null,array('class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-group">
            <!-- <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password"> -->
            {{ Form::label('password','Password')}}
            {{ Form::text('password',null,array('class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-group">
            <!-- <label for="mobile">Mobile:</label>
            <input type="text" class="form-control" id="mobile" name="mobile"> -->
            {{ Form::label('mobile','Mobile')}}
            {{ Form::text('mobile',null,array('class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="img" name="image" accept="image/*">  
            <!-- {{ Form::label('image','Image')}}
            {{ Form::file('image', Input::old('image'),array('class' => 'form-control'))}} -->
            {{$customer->image}}
        </div>
        <br>
        <div class="form-group">
            <!-- <label for="gender">Gender:</label> -->
            <!-- <input type="radio" class="form-control" id="male" name="gender" value="male">Male 
            <input type="radio" class="form-control" id="female" name="gender" value="female">Female -->
            {{ Form::label('gender','Gender')}}
            {{ Form::radio('gender', 'male',array('class' => 'form-control'))}}Male
            {{ Form::radio('gender', 'female',array('class' => 'form-control'))}}Female

        </div>
        <br>
        <div class="form-group">
            <label for="hobbies">Hobbies:</label>
            <input type="checkbox" class="form-control" id="hobbies" value="1" name="hobbies[]"
            <?php
            if(in_array("1",$hobby))
            {
                echo "checked";
            }
            ?>
            >photography
            <input type="checkbox" class="form-control" id="hobbies" value="2" name="hobbies[]"
            <?php
            if(in_array("2",$hobby))
            {
                echo "checked";
            }
            ?>>gardening<br>
            <input type="checkbox" class="form-control" id="hobbies" value="3" name="hobbies[]"
            <?php
            if(in_array("3",$hobby))
            {
                echo "checked";
            }
            ?>>hiking
            <input type="checkbox" class="form-control" id="hobbies" value="4" name="hobbies[]"
            <?php
            if(in_array("4",$hobby))
            {
                echo "checked";
            }
            ?>>calligraphy<br>
            <input type="checkbox" class="form-control" id="hobbies" value="5" name="hobbies[]"
            <?php
            if(in_array("5",$hobby))
            {
                echo "checked";
            }
            ?>>painting
            <input type="checkbox" class="form-control" id="hobbies" value="6" name="hobbies[]s"
            <?php
            if(in_array("6",$hobby))
            {
                echo "checked";
            }
            ?>>camping 
            <!-- <input type="checkbox" class="form-control" id="cooking" name="cooking">cooking -->
            <!-- {{ Form::label('hobbies','Hobbies')}}
            {{ Form::checkbox('hobbies', '1',Input::old('hobbies'),array('class' => 'form-control'))}}photography
            {{ Form::checkbox('hobbies', '2',Input::old('hobbies'),array('class' => 'form-control'))}}gardening
            {{ Form::checkbox('hobbies', '3',Input::old('hobbies'),array('class' => 'form-control'))}}hiking
            {{ Form::checkbox('hobbies', '4',Input::old('hobbies'),array('class' => 'form-control'))}}calligraphy
            {{ Form::checkbox('hobbies', '5',Input::old('hobbies'),array('class' => 'form-control'))}}painting
            {{ Form::checkbox('hobbies', '6',Input::old('hobbies'),array('class' => 'form-control'))}}camping -->
</div>
        <br>
        <div class="form-group">
            <!-- <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address"> -->
            {{ Form::label('address','Address')}}
            {{ Form::text('address', Input::old('address'),array('class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-group">
            <!-- <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city"> -->
            {{ Form::label('city','City')}}
            {{ Form::text('city', Input::old('city'),array('class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-group">
            <label for="state">State:</label>
            <select id="state" name="state">
                   <option value="Andhra Pradesh"
                   <?php
                 if($customer->state == 'Andhra Pradesh')
                {
                echo "selected";
                }
            ?>>Andhra Pradesh</option>
                   <option value="Arunachal Pradesh"
                   <?php
                 if($customer->state == 'Arunachal Pradesh')
                {
                echo "selected";
                }
            ?>>Arunachal Pradesh</option>
                   <option value="Assam"
                   <?php
                 if($customer->state == 'Assam')
                {
                echo "selected";
                }
            ?>>Assam</option>
                
                   <option value="Bihar"
                   <?php
                 if($customer->state == 'Bihar')
                {
                echo "selected";
                }
            ?>>Bihar</option>
                   <option value="Chhatisgarh"
                   <?php
                 if($customer->state == 'Chhatisgarh')
                {
                echo "selected";
                }
            ?>>Chhatisgarh</option>
                   <option value="Goa"
                   <?php
                 if($customer->state == 'Goa')
                {
                echo "selected";
                }
            ?>>Goa</option>
                   <option value="Gujarat"
                   <?php
                 if($customer->state == 'Gujarat')
                {
                echo "selected";
                }
            ?>>Gujarat</option>
                   <option value="Haryana"
                   <?php
                 if($customer->state == 'Haryana')
                {
                echo "selected";
                }
            ?>>Haryana</option>
                   <option value="Himachal Pradesh"
                   <?php
                 if($customer->state == 'Himachal Pradesh')
                {
                echo "selected";
                }
            ?>>Himachal Pradesh</option>
                   <option value="Jharkhand"
                   <?php
                 if($customer->state == 'Jharkhand')
                {
                echo "selected";
                }
            ?>>Jharkhand</option>
                   <option value="Karnataka"
                   <?php
                 if($customer->state == 'Karnataka')
                {
                echo "selected";
                }
            ?>>Karnataka</option>
                   <option value="Kerala"
                   <?php
                 if($customer->state == 'Kerala')
                {
                echo "selected";
                }
            ?>>Kerala</option>
                   <option value="Madhya Pradesh"
                   <?php
                 if($customer->state == 'Madhya Pradesh')
                {
                echo "selected";
                }
            ?>>Madhya Pradesh</option>
                   <option value="Maharashtra"
                   <?php
                 if($customer->state == 'Maharashtra')
                {
                echo "selected";
                }
            ?>>Maharashtra</option>
                   <option value="Manipur"
                   <?php
                 if($customer->state == 'Manipur')
                {
                echo "selected";
                }
            ?>>Manipur</option>
                   <option value="Meghalaya"
                   <?php
                 if($customer->state == 'Meghalaya')
                {
                echo "selected";
                }
            ?>>Meghalaya</option>
                   <option value="Mizpram"
                   <?php
                 if($customer->state == 'Mizpram')
                {
                echo "selected";
                }
            ?>>Mizpram</option>
                   <option value="Nagaland"
                   <?php
                 if($customer->state == 'Nagaland')
                {
                echo "selected";
                }
            ?>>Nagaland</option>
                   <option value="Odisha"
                   <?php
                 if($customer->state == 'Odisha')
                {
                echo "selected";
                }
            ?>>Odisha</option>
                   <option value="Punjab"
                   <?php
                 if($customer->state == 'Punjab')
                {
                echo "selected";
                }
            ?>>Punjab</option>
                   <option value="Rajasthan"
                   <?php
                 if($customer->state == 'Rajasthan')
                {
                echo "selected";
                }
            ?>>Rajasthan</option>
                   <option value="Sikkim">
                   <?php
                 if($customer->state == 'Sikkim')
                {
                echo "selected";
                }
            ?>Sikkim</option>
                   <option value="Tamil Nadu"
                   <?php
                 if($customer->state == 'Tamil Nadu')
                {
                echo "selected";
                }
            ?>>Tamil Nadu</option>
                   <option value="Telangana"
                   <?php
                 if($customer->state == 'Telangana')
                {
                echo "selected";
                }
            ?>>Telangana</option>
                   <option value="Tripura"
                   <?php
                 if($customer->state == 'Tripura')
                {
                echo "selected";
                }
            ?>>Tripura</option>
                   <option value="Uttarakhand"
                   <?php
                 if($customer->state == 'Uttarakhand')
                {
                echo "selected";
                }
            ?>>Uttarakhand</option>
                   <option value="Uttar Pradesh"
                   <?php
                 if($customer->state == 'Uttar Pradesh')
                {
                echo "selected";
                }
            ?>>Uttar Pradesh</option>
                   <option value="West Bengal"
                   <?php
                 if($customer->state == 'West Bengal')
                {
                echo "selected";
                }
            ?>>West Bengal</option>

            </select>
        </div>
        <br>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
       
    </form>
</html>
