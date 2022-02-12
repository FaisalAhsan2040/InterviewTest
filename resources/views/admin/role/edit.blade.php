@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Role Permissions')

@section('body')

    @php
        $newData =$role->toArray();
        $newData['permissions'] = $assignPermission;
    @endphp
    <div class="container-xl">
        <div class="card">
          

                <form class="form-horizontal form-edit" method="post"   action="{{$role->resource_url }}" >
                      @csrf  
                    <div class="card-header">
                        <i class="fa fa-pencil"></i> Role Permissions
                    </div>
                     <input type="hidden" name="roleID" value="{{$role->id}}">  
                    <div class="card-body">
                        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
                        <label for="name" class="col-form-label text-md-right" class="col-md-4">Edit Role</label>
                        <div class="col-md-9 col-xl-8'">
                        <input type="text"  class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" value="{{$role->name}}">
                        </div><span> 
                        </span>


                        </div>
                        <div class="form-group row align-items-center" >
                            <label for="guard_name" class="col-form-label text-md-right"  class="'col-md-4' : 'col-md-2'">&nbsp;</label>
                            <div class="'col-md-9 col-xl-8'">
                                <div class="row">
                                    @foreach($permissions as $permission)
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ in_array($permission->id, $assignPermission) ? 'checked="checked"' : '' }}   id="permission_id_{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}">
                                                <label class="form-check-label" for="permission_id_{{ $permission->id }}">{{ ucwords(str_replace('-',' ',str_replace('.',' ',$permission->name))) }}</label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"   >
                            <i class="fa"  class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </role-form>

        </div>

</div>

@endsection
