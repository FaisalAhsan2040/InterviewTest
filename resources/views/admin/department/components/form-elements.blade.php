<div class="form-group row align-items-center" :class="{'has-danger': errors.has('D_name'), 'has-success': fields.D_name && fields.D_name.valid }">
    <label for="D_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.department.columns.D_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.D_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('D_name'), 'form-control-success': fields.D_name && fields.D_name.valid}" id="D_name" name="D_name" placeholder="{{ trans('admin.department.columns.D_name') }}">
        <div v-if="errors.has('D_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('D_name') }}</div>
    </div>
</div>


