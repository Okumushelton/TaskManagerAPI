import AllTask from './components/AllTask.vue';
import CreateTask from './components/CreateTask.vue';
import EditTask from './components/EditTask.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: AllTask
    },
    {
        name: 'create',
        path: '/create',
        component: CreateTask
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditTask
    }
];