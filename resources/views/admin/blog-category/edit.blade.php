@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.blog-category.actions.edit', ['name' => $blogCategory->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <blog-category-form
                :action="'{{ $blogCategory->resource_url }}'"
                :data="{{ $blogCategory->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.blog-category.actions.edit', ['name' => $blogCategory->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.blog-category.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </blog-category-form>

        </div>
    
</div>

@endsection