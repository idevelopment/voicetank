<!-- Modal -->
<div id="newLabel" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create new label</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('labels.store') }}" class="form-horizontal">
                    {{-- CSRF token --}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="name" placeholder="Label name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="color" placeholder="Hex value for the color" class="form-control" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">Create</button>
                <button class="btn btn-danger" type="reset">Reset</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>