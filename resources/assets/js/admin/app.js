/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

require('../axios');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * Imports
 */

/**
 * Components
 */
import AddDepartment from './components/AddDepartment.vue';
import AddCourse from './components/AddCourse.vue';
import AddStudents from './components/AddStudent.vue';
import AddFaculty from './components/AddFaculty.vue';


const addDepartment = new Vue({
    el: '#addDepartment',
    render: h => h(AddDepartment),
});
const addCourse = new Vue({
    el: '#addCourses',
    render: h => h(AddCourse),
});
const addStudents = new Vue({
    el: '#addStudents',
    render: h => h(AddStudents),
});
const addFaculty = new Vue({
    el: '#addFaculties',
    render: h => h(AddFaculty),
});
