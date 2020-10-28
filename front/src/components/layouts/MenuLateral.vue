<template>
  <div
    class="container-nav col-md-2 p-0 bg-dark text-white"
    :class="{ active: activatedNav }"
  >
    <div class="d-md-none mt-2">
      <b-button
        class="position-absolute"
        style="right: 10px"
        variant="dark"
        @click="emitToggleNav"
      >
        <b-icon icon="arrow-left"></b-icon>
      </b-button>
    </div>

    <!-- Logomarca -->
    <div class="container-logo">
      <img src="../../assets/logo.png" alt="Logomarca da Accordous" />
    </div>

    <!-- Navegação -->
    <nav class="">
      <ul class="list-unstyled text-left">
        <router-link
          v-for="(menu, id) in menus"
          :key="id"
          :to="{ name: menu.name }"
          active-class="active"
          exact
        >
          <li @click="emitToggleNav">{{ menu.label }}</li>
        </router-link>
      </ul>
    </nav>
  </div>
</template>

<script>
import { customRoutes } from "./../../router/routes";

export default {
  name: "menu-lateral",
  props: {
    activatedNav: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    emitToggleNav: function () {
      this.$emit("toggleNav");
    },
  },
  computed: {
    menus() {
      let routes = [];

      customRoutes.forEach((route) => {
        if (route.children) {
          let children = route.children.filter((child) => child.inNav === true);
          routes = [...children, ...routes];
        }

        if (route.inNav) {
          routes.push(route);
        }
      });

      return routes;
    },
  },
};
</script>


<style scoped>
.container-nav {
  height: 100vh;

  position: absolute;
  z-index: 3;

  display: none;
}

.container-nav.active {
  display: block;
}

.container-logo {
  padding: 0px 20px;
  height: 150px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.container-logo img {
  width: 100%;
}

a {
  color: white;
  text-decoration: none;
}

a li {
  padding: 0px 10px 0px 10px;
  line-height: 50px;
  font-weight: bold;
}

a:hover li,
a.active li {
  background: white;
  color: var(--danger);
  border-left: 5px solid var(--danger);
}

@media screen and (min-width: 768px) {
  .container-nav {
    position: relative;
    display: block;
  }
}
</style>