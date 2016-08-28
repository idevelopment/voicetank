<form action="" method="POST" enctype="multipart/form-data">
    {{-- CSRF token --}}
    {{ csrf_field() }}

    {{-- Avatar form-group --}}
    <div class="form-group">
        <label for="avatar">Profile image: <span class="text-danger">*</span></label>
        <input type="file" name="" id="avatar">
    </div>

    {{-- Firstname form-group --}}
    <div class="form-group">
        <label for="firstname">Firstname: <span class="text-danger">*</span></label>
        <input type="text" name="" class="form-control" placeholder="Firstname" value="" />
    </div>

    {{-- Lastname form-group --}}
    <div class="form-group">
        <label for="lastname">Lastname: <span class="text-danger">*</span></label>
        <input type="text" name="" class="form-control" placeholder="Lastname" value="" />
    </div>

    {{-- address form-group --}}
    <div class="form-group">
        <label for="address">Address: <span class="text-danger">*</span></label>
        <input type="text" name="" class="form-control" placeholder="Address" value="" />
    </div>

    {{-- zipcode form-group --}}
    <div class="form-group">
        <label for="zipcode">Zipcode: <span class="text-danger">*</span></label>
        <input type="text" name="" class="form-control" placeholder="Zipcode" value="" />
    </div>

    {{-- city form-group --}}
    <div class="form-group">
        <label for="city">City: <span class="text-danger">*</span></label>
        <input type="text" name="" class="form-control" placeholder="City" value="" />
    </div>

    {{-- country form-group --}}
    <div class="form-group">
        <label for="country">Country: <span class="text-danger">*</span></label>
        <select name="" class="form-control" id="country">
            <option value="">-- select your country</option>

            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>


    {{-- Form submit & reset button --}}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>