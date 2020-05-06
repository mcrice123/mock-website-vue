require('./bootstrap');
import 'axios';
import Vue from 'vue/dist/vue.min.js';

// Custom JS
import Form from './form';
import Example from './components/Example';
import Notification from './components/Notification.vue';

Vue.config.devtools = true;

// Add Axios and Form globally
window.axios = axios;
window.Form = Form;

new Vue({
    el: '#app',

    components: {
        Example,
        Notification
    },

    data: {
        skills: [],
        projects: [],
       // name: '',
      //  description: '',
      //  errors: new Errors(),
        form: new Form({
            name: '',
            description: '',
        })
    },

    methods: {
        onSubmit() {
            /* axios.post('projects', {
                name: this.name,
                description: this.description,
            });*/ 
        //    axios.post('/projects/store', this.$data)
        //         .then(this.onSuccess)
        //         .catch(error => this.form.errors.record(error.response.data.errors));
            this.form.post('/projects/store')
                .then(response => this.projects = response.projects)
                .catch(() => {});
        },
    /*    onSuccess(response) {
            alert(response.data.message);
            //   this.name = '';
            //   this.description = ''; /// WORKS

            // Alternatively... FORM OBJECT RESET
            form.reset();
        } */                                // Moved to Form class 
    },

    mounted() {
        // Make an ajax request to our server - /skills

        // fetch()
        // Option 1: JQuery : $.getJson() 
        // Option 2: axios

        axios.get('/skills').then(response => this.skills = response.data);
        axios.get('/projects/list').then(response => this.projects = response.data.projects);
    }
});