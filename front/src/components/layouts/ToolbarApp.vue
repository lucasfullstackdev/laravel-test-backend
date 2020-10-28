<template>
  <b-navbar toggleable="lg" type="dark" variant="dark">
    <b-button class="mr-2 d-md-none" variant="dark" @click="emitToggleNav">
      <b-icon icon="justify"></b-icon>
    </b-button>

    <b-navbar-brand
      href="https://accordous.com.br/"
      target="_blank"
      title="Ir para Accordous"
    ></b-navbar-brand>
    <b-navbar-nav class="ml-auto">
      <b-button variant="danger">
        logout
        <b-icon icon="door-open-fill" variant="white" class="ml-3"></b-icon>
      </b-button>
    </b-navbar-nav>
  </b-navbar>
</template>

<script>
export default {
  name: "toolbar-app",
  methods: {
    emitToggleNav: function () {
      this.$emit("toggleNav");
    },
  },
};
</script>