/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

// window.Vue = require('vue');

import hljs from 'highlight.js';
import hljsJavascript from 'highlight.js/lib/languages/javascript';
import hljsPHP from 'highlight.js/lib/languages/php';
import hljsCSS from 'highlight.js/lib/languages/css';
import hljsSCSS from 'highlight.js/lib/languages/scss';
import 'highlight.js/styles/dracula.css';


hljs.registerLanguage('javascript', hljsJavascript);
hljs.registerLanguage('php', hljsPHP);
hljs.registerLanguage('css', hljsCSS);
hljs.registerLanguage('scss', hljsSCSS);

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre').forEach((block) => {
        hljs.highlightBlock(block);
    });
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

// var simplemde = new SimpleMDE({ element: document.getElementById("body") });
// let editorEl = document.querySelector( '#editor' );
// if (editorEl) {
//     ClassicEditor
//
//         .create( editorEl , {
//             autoParagraph: false,
//         })
//         .then( editor => {
//             console.log(Array.from( editor.ui.componentFactory.names() ));
//             editor.model.document.on( 'change:data', () => {
//                 let body = document.querySelector('#body');
//                 body.value = editor.getData();
//             } );
//         } )
//         .catch( error => {
//
//         } );
// }

flatpickr(".date-picker", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:s",
});
