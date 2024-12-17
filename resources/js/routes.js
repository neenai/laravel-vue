const Welcome = () => import('./components/Welcome.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const CategoryList = () => import('./components/category/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const CategoryCreate = () => import('./components/category/Add.vue' /* webpackChunkName: "resource/js/components/category/add" */)
const CategoryEdit = () => import('./components/category/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)
const TodoList = () => import('./components/todo/List.vue' /* webpackChunkName: "resource/js/components/todo/list" */)
const TodoDetails = () => import('./components/todo/Details.vue' /* webpackChunkName: "resource/js/components/todo/details" */)
const ChirpList = () => import('./components/chirp/Feed.vue' /* webpackChunkName: "resource/js/components/chirp/list" */)
// const ChirpDetails = () => import('./components/chirp/Details.vue' /* webpackChunkName: "resource/js/components/chirp/details" */)
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    },
    {
        name: 'categoryList',
        path: '/category',
        component: CategoryList
    },
    {
        name: 'categoryEdit',
        path: '/category/:id/edit',
        component: CategoryEdit
    },
    {
        name: 'categoryAdd',
        path: '/category/add',
        component: CategoryCreate
    },
    {
        name: 'todoList',
        path: '/todo',
        component: TodoList, // Component for listing todos
    },
    {
        name: 'todoDetails',
        path: '/todo/:id',
        component: TodoDetails, // Component for viewing a single todo
        props: true, // Pass route params as props
    },
    {
        name: 'chirpList',
        path: '/chirp',
        component: ChirpList, // Component for listing todos
    },
    // {
    //     name: 'chirpDetails',
    //     path: '/chirp/:id',
    //     component: ChirpDetails, // Component for viewing a single todo
    //     props: true, // Pass route params as props
    // }
]
