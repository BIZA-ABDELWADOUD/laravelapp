
<!-- Grid modal -->
<div class="modal" id="modaldemo6">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">{{trans('modals/user/user.adduser')}}</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">{{trans('modals/user/user.Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">{{trans('modals/user/user.Email')}}</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">{{trans('modals/user/user.Username')}}</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile">{{trans('modals/user/user.Mobile')}}</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter email">
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{trans('modals/user/user.Role')}}</label>
                                <select class="form-control" id="" name="role" placeholder="Enter email">
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unity_id">{{trans('modals/user/user.Unity')}}</label>
                                <select class="form-control" id="unity_id" name="unity_id" placeholder="Enter email">
                                    @foreach($unities as $unity)
                                        <option value="{{$unity->id}}">{{$unity->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{trans('modals/user/user.Password')}}</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{trans('modals/user/user.confirmation')}}</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="submit">{{trans('modals/user/user.Save')}}</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">{{trans('modals/user/user.Close')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End Grid modal -->






