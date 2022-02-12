<div class="form-group row align-items-center" :class="{'has-danger': errors.has('user_id'), 'has-success': fields.user_id && fields.user_id.valid }">
    <label for="user_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blog.columns.user_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.user_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('user_id'), 'form-control-success': fields.user_id && fields.user_id.valid}" id="user_id" name="user_id" placeholder="{{ trans('admin.blog.columns.user_id') }}">
        <div v-if="errors.has('user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('user_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('blog_name'), 'has-success': fields.blog_name && fields.blog_name.valid }">
    <label for="blog_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blog.columns.blog_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.blog_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('blog_name'), 'form-control-success': fields.blog_name && fields.blog_name.valid}" id="blog_name" name="blog_name" placeholder="{{ trans('admin.blog.columns.blog_name') }}">
        <div v-if="errors.has('blog_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('blog_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('blog_category'), 'has-success': fields.blog_category && fields.blog_category.valid }">
    <label for="blog_category" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blog.columns.blog_category') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.blog_category" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('blog_category'), 'form-control-success': fields.blog_category && fields.blog_category.valid}" id="blog_category" name="blog_category" placeholder="{{ trans('admin.blog.columns.blog_category') }}">
        <div v-if="errors.has('blog_category')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('blog_category') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blog.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.blog.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


