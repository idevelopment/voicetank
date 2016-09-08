@extends('layouts.frontend')

@section('content')
<div class="col-md-9 col-sep-md hidden-print">
          <form class="form-horizontal" role="form" method="POST" action="">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="topic" class="col-md-2 control-label">Topic <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="topic" name="topic" class="form-control">
                        </div>
              </div>

              <div class="form-group">
                  <label for="category" class="col-md-2 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <select id="category" name="category" class="form-control">
                              <option value="" selected="">-- Please select --</option>

                                @foreach($items as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                            </select>
                        </div>
              </div>

              <div class="form-group">
                  <label for="description" class="col-md-2 control-label">Description <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <textarea id="description" name="description" rows="10" class="form-control"></textarea>
                        </div>
              </div>

              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-sm btn-success">Submit suggestion</button>
                    <button type="submit" class="btn btn-sm btn-danger">Cancel</button>

                  </div>
                </div>
          </form>
</div>
@endsection
