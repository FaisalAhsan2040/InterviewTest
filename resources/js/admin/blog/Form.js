import AppForm from '../app-components/Form/AppForm';

Vue.component('blog-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                blog_name:  '' ,
                blog_category:  '' ,
                status:  '' ,
                
            }
        }
    }

});