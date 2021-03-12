/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('text-editor', require('./components/TextEditor.vue').default);
Vue.component('button-read-more', require('./components/ButtonReadMore.vue').default);
Vue.component('button-create', require('./components/ButtonCreate.vue').default);
Vue.component('button-back', require('./components/ButtonBack.vue').default);
Vue.component('button-materia', require('./components/ButtonMateria.vue').default);
Vue.component('button-home', require('./components/ButtonHome.vue').default);
Vue.component('button-edit', require('./components/ButtonEdit.vue').default);
Vue.component('button-show-tema', require('./components/ButtonShowTema.vue').default);
Vue.component('text-apunte', require('./components/TextApunte.vue').default);
Vue.component('button-materia-index', require('./components/ButtonMateriaIndex.vue').default);
Vue.component('link-route', require('./components/LinkRoute.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});