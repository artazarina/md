
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import Vue from 'vue';
 import ExampleComponent from './components/ExampleComponent.vue';

 require('./bootstrap');

 window.Vue = Vue;

 Vue.component('example-component', ExampleComponent);

 const app = new Vue({
     el: '#app'
 });
