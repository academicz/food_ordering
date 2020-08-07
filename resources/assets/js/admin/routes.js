import Home from './components/Home.vue';
import User from './components/User.vue';
import Link from './components/Link.vue';

export const routes = [
    {path: '', component: Home},
    {path: '/user/:id', component: User},
    {path: '/link', component: Link},
];