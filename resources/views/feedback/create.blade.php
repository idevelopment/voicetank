@extends('layouts.frontend')

@section('content')
<div class="col-md-9 col-sep-md hidden-print">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('feedback.store') }}">
              {{ csrf_field() }}
              <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }} }}">
                  <label for="topic" class="col-md-2 control-label">Topic <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="topic" name="title" class="form-control">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
              </div>

              <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                  <label for="category" class="col-md-2 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <select id="category" name="category_id" class="form-control">
                              <option value="" selected="">-- Please select --</option>

                                @foreach($items as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                            </select>

                            @if ($errors->has('category_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                            @endif
                        </div>
              </div>

              <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label for="description" class="col-md-2 control-label">Description <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <textarea id="description" name="description" rows="10" class="form-control"></textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
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
