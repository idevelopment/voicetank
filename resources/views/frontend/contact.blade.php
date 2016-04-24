@extends('layouts.onecol')

@section('content')
    <div class="row">
     <div class="well well-sm">
      <form action="{{url('contact')}}" method="post" class="form-horizontal">
      <div class="form-group">
       <label for="first_name" class="col-md-3 control-label">First name <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="first_name" name="first_name" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="last_name" class="col-md-3 control-label">Last name <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="last_name" name="last_name" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="company" class="col-md-3 control-label">Company</label>
                  <div class="col-md-6">
                   <input type="text" id="company" name="company" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="email" class="col-md-3 control-label">Email <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="email" id="email" name="email" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="phone" class="col-md-3 control-label">Phone <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="phone" name="phone" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="postcode" class="col-md-3 control-label">Postcode <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="postcode" name="postcode" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="address" class="col-md-3 control-label">Address <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="address" name="address" class="form-control">
                 </div>
                </div>                

                 <div class="form-group">
                  <label for="city" class="col-md-3 control-label">City <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="city" name="city" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="state" class="col-md-3 control-label">State / Province <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <input type="text" id="state" name="state" class="form-control">
                 </div>
                </div>

                 <div class="form-group">
                  <label for="country" class="col-md-3 control-label">Country <strong class="text-danger">*</strong></label>
                  <div class="col-md-6">
                   <select name="country" id="country" class="form-control">
                       @foreach($countries as $data)
                           <option value="{!! $data->country !!}"> {!! $data->country !!} </option>
                       @endforeach
                   </select>
                 </div>
                </div>   
        
        <div class="form-group">
         <label class="col-md-3 control-label">Message</label>
          <div class="col-md-6">
           <textarea id="message" name="message" class="form-control" rows="7">
           </textarea>
          </div>
          </div>

         <div class="form-group">
           <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
           </div>
         </div>
                </form>
            </div>
    </div>

       
@endsection
