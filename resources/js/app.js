import './bootstrap';

//다 추가
import {createApp} from 'vue';

import app from './components/app.vue';

createApp(app).mount('#app')

export function create_app(selector, options){
    new Vue({
        el: selector,
        render(h){
        return h( App, {props: options});
        }
    })
};
