@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Roles'))

@section('body')

<div class="row">

        @foreach($permissions as $permission)
                <div class="col-4">
                    <div >
                        <input  type="checkbox" {{ in_array($permission->id, $assignPermission) ? 'checked="checked"' : '' }} id="permission_id_{{ $permission->id }}"  name="permissions[]" value="{{ $permission->id }}">
                        <label for="{{ $permission->id }}">{{ ucwords(str_replace('-',' ',str_replace('.',' ',$permission->name))) }}</label>
                    </div>
                </div>
        @endforeach

        </div>
@endsection