import AppForm from '../app-components/Form/AppForm';

Vue.component('blog-category-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                blog_category_name:  '' ,
                status:  '' ,
                
            }
        }
    }

});