require('./bootstrap');
import Vue from 'vue';
import axios from 'axios';
import ElementUI from "element-ui";
// import "element-ui/lib/theme-default/index.css";
import locale from "element-ui/lib/locale/lang/en";
import Form from './core/Form';
import TextField from './components/form/TextField.vue';

window.axios = axios;
window.Form = Form;

new Vue({
    el: '#app',

    components: {
        TextField
    },

    data: {
        form: new Form({
            name: '',
        }),
    },

    methods: {
        onSubmit() {
            this.form.post('/clients')
                .then(response => alert('Wahoo!'))
                .catch(error => console.log(error));
        }
    }
});