require('./bootstrap');
import Vue from 'vue';
import axios from 'axios';
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
            description: ''
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