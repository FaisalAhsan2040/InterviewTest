<div class="form-group row align-items-center" :class="{'has-danger': errors.has('subject_name'), 'has-success': fields.subject_name && fields.subject_name.valid }">
    <label for="subject_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.subject.columns.subject_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.subject_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('subject_name'), 'form-control-success': fields.subject_name && fields.subject_name.valid}" id="subject_name" name="subject_name" placeholder="{{ trans('admin.subject.columns.subject_name') }}">
        <div v-if="errors.has('subject_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('subject_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('subject_type'), 'has-success': fields.subject_type && fields.subject_type.valid }">
    <label for="subject_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.subject.columns.subject_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.subject_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('subject_type'), 'form-control-success': fields.subject_type && fields.subject_type.valid}" id="subject_type" name="subject_type" placeholder="{{ trans('admin.subject.columns.subject_type') }}">
        <div v-if="errors.has('subject_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('subject_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('course_id'), 'has-success': fields.course_id && fields.course_id.valid }">
    <label for="course_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.subject.columns.course_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.course_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('course_id'), 'form-control-success': fields.course_id && fields.course_id.valid}" id="course_id" name="course_id" placeholder="{{ trans('admin.subject.columns.course_id') }}">
        <div v-if="errors.has('course_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('course_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Status'), 'has-success': fields.Status && fields.Status.valid }">
    <label for="Status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.subject.columns.Status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Status'), 'form-control-success': fields.Status && fields.Status.valid}" id="Status" name="Status" placeholder="{{ trans('admin.subject.columns.Status') }}">
        <div v-if="errors.has('Status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Status') }}</div>
    </div>
</div>


