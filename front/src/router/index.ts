import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/teste',
    name: 'teste',
    component: () => import('../views/Teste.vue')
  },
  { path: '', redirect: "/teste" }
];

const router = new VueRouter({
  routes
})

export default router
