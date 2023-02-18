import { createRouter, createWebHistory } from 'vue-router'
/*import HomeView from '../views/HomeView.vue'*/

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
   /* {
      path: '/',
      name: 'home',
      component: HomeView
    },*/
    {
      path: '/',
      name: 'main',
      component: () => import('../views/main/index.vue')
    },
    {
    path: '/products',
    name: 'products.index',
    component: () => import('../views/product/index.vue')
},
    {
      path: '/products/:id',
      name: 'products.show',
      component: () => import('../views/product/show.vue')
    },
  ]
})

export default router
