<template>
  <div id="app">
    <Home />
    <Quiz />
  </div>
</template>

<script>
import Home from './components/Home.vue'
import Quiz from './components/Quiz.vue'


export default {
  name: 'app',
  components: {
    Home,
    Quiz
  }
}
</script>

<style>
#app {
  font-family: Open Sans, sans-serif;
}
</style>
