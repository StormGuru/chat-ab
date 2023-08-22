import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler";
import Chat from './Components/Chat.vue';
const app = createApp({
    components: {
        Chat
    }
});

app.mount('#app');
