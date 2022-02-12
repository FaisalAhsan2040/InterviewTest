<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Department_name'), 'has-success': fields.Department_name && fields.Department_name.valid }">
    <label for="Department_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.department.columns.Department_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Department_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Department_name'), 'form-control-success': fields.Department_name && fields.Department_name.valid}" id="Department_name" name="Department_name" placeholder="{{ trans('admin.department.columns.Department_name') }}">
        <div v-if="errors.has('Department_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('D_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('block_number'), 'has-success': fields.block_number && fields.block_number.valid }">
    <label for="block_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.department.columns.block_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.block_number" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('block_number'), 'form-control-success': fields.block_number && fields.block_number.valid}" id="block_number" name="block_number" placeholder="{{ trans('admin.department.columns.block_number') }}">
        <div v-if="errors.has('block_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('block_number') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Status'), 'has-success': fields.Status && fields.Status.valid }">
    <label for="Status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.subject.columns.Status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Status'), 'form-control-success': fields.Status && fields.Status.valid}" id="Status" name="Status" placeholder="{{ trans('admin.subject.columns.Status') }}">
        <div v-if="errors.has('Status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Status') }}</div>
    </div>
</div>