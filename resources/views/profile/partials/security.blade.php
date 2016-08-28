<form action="" method="POST">
    {{-- CSRF token --}}
    {{ csrf_field() }}

    {{-- Password form-group --}}
    <div class="form-group">
        <label for="password">Password: <span class="text-danger">*</span></label>
        <input type="password" class="form-control" placeholder="New password" name="password">
    </div>

    {{-- Password confirmation form-group --}}
    <div class="form-group">
        <label for="password_confirmation">Password confirmation: <span class="text-danger">*</span></label>
        <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation">
    </div>

    {{-- Form submit & reset button --}}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>