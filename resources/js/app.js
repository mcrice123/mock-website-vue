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

/* Shared State 101 */
let store = {
    user: {
        name: 'Jane Doe'
    }
};

new Vue({
    el: '#one',
    data: {
        foo: 'bar',
        shared: store
    }
});

new Vue({
    el: '#two',
    data: {
        foo: 'other bar',
        shared: store
    }
});

/* Custom Input (Coupon Code) */ 

Vue.component('coupon', {
    props: ['code'],
    template: `
        <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
    `,
    data() {
        return {
            invalids: ['ALLFREE', 'SOMETHINGELSE'],
        };
    },
    methods: {
        updateCode(code) {
            // Validation, etc 
            if (this.invalids.includes(code)) {
                alert('This coupon is no longer valid. Sorry!');
                this.$refs.input.value = '';
                code = '';
            }
            this.$emit('input', code);
        }
    }
});

new Vue({
    el: "#coupon-input",
    data: {
        coupon: 'FREEBIE'
    }
});