import { createApp } from 'vue';
import App from './App.vue';
import router from "./router.js";

const app = createApp(App);
app.mount('#app');  // Monte Vue sur un élément avec l'ID "app"
app.use(router);
