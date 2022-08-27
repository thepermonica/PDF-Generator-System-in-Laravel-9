<!-- Modal -->
<div class="modal fade" id="newContactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <form action="{{route('admin.information.store')}}" class="form-control" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-12 mt-3">
                                <label for="first_name">First Name:</label>
                                <input class="form-control" type="text" name="first_name" id="first_name"
                                       value="{{old('first_name')}}">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="last_name">Last Name:</label>
                                <input class="form-control" type="text" name="last_name" id="last_name"
                                       value="{{old('last_name')}}">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="tel">Phone Number:</label>
                                <input class="form-control" type="tel" name="tel" id="tel" value="{{old('tel')}}">
                            </div>
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn btn-success btn-sm">Save Contact</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
