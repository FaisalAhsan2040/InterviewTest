@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.role.actions.index'))

@section('body')

   <div class="container">

    <center><h2><b>Manage Roles Permissions</h2></b></center>
    <br><br>

  <form method="post" action="{{ url('admin/roles') }}">  
    @csrf
    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" class="col-md-4">Add New Role</label>
        <div class=" col-md-9 col-xl-8">
        <input type="text"  class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="Add">
     </div><span>  <center><input type="submit" class="btn btn-primary btn-xs pull-right" value="Add Role"></center>
   </span>
      

  </div>
</form>
<br>

    <div class="row col-md-12 col-md-offset-2 custyle mt-5">

    <table class="table table-striped custab">
    <thead>
    <!-- <a href="{{url('admin/roles/create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new role</a> -->
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>Guard</th>
           <th class="text-center">Manage Permissions</th>  
        </tr>
    </thead>

          @foreach($data as $row) 
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->guard_name}}</td>
              <td class="text-center"><a class='btn btn-danger btn-xs' href="{{url('admin/roles/'.$row->id.'/edit')}}">Manage<span class="glyphicon glyphicon-edit"></span> 

                <!--Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td> -->
            </tr>
            @endforeach
           
    </table>
    </div>
</div>
@endsection