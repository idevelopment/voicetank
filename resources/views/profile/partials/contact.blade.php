<form action="" method="POST">
    {{-- CSRF token --}}
    {{ csrf_field() }}

    {{-- Home phone form-group --}}
    <div class="form-group">
        <label for="home">Home phone: <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="" name="" placeholder="Home phone number">
    </div>


    {{-- Office phone form-group --}}
    <div class="form-group">
        <label for="office">Office phone: <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="" name="" placeholder="Office phone number">
    </div>

    {{-- Mobile phone: form-group --}}
    <div class="form-group">
        <label for="Mobile">Mobile phone: <span class="text-danger">*</span></label>
        <input type="text" class="form-control" value="" name="" placeholder="Mobile phone number">
    </div>


    {{-- Submit & Reset form-group --}}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="Reset" class="btn btn-danger">Reset</button>
    </div>
</form>