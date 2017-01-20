require('./bootstrap');
import Vue from 'vue';
import axios from 'axios';
import ElementUI from "element-ui";
// import "element-ui/lib/theme-default/index.css";
import locale from "element-ui/lib/locale/lang/en";
import Form from './core/Form';
import TextField from './components/form/TextField.vue';
import TextareaField from './components/form/TextareaField.vue';
import NumberField from './components/form/NumberField.vue';
import DateField from './components/form/DateField.vue';

// Register plugins
Vue.use(ElementUI, {locale});

window.axios = axios;
window.Form = Form;

new Vue({
    el: '#app',

    components: {
        TextField,
        TextareaField,
        NumberField,
        DateField
    },

    data: {
        form: new Form({
            name: '',
            description: '',
            hours: '',
            started_at: ''
        }),
    },

    methods: {
        onSubmit() {
            this.form.post('/projects')
                .then(response => alert('Wahoo!'))
                .catch(error => console.log(error));
        }
    }
});