<template>
  <div v-if="page.props.flash.success" class="success">
    {{ page.props.flash.success }}
  </div>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/hello">Hello Page</Link>
  <slot>Default</slot>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>