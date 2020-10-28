import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import { customRoutes } from "./routes";

Vue.use(VueRouter)

const routes: Array<RouteConfig> = customRoutes;

const router = new VueRouter({
  routes
})

export default router
