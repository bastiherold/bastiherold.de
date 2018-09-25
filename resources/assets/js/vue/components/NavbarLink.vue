<template>
  <li :title="this.title">
    <a :href="this.href">
      <i :class="this.classes" aria-hidden="true"></i> {{ title }}
    </a>
  </li>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    },
    href: {
      type: String,
      required: true
    },
    classes: String
  }
}
</script>

<style lang="scss" scoped>

</style>
