import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/views/Home.vue'; // Page d'accueil
import Login from '@/views/Login.vue'; // Page de connexion
import Dashboard from '@/views/Dashboard.vue'; // Page Dashboard après connexion

const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Login },
    { path: '/dashboard', component: Dashboard },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
