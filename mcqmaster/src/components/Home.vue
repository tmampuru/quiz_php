<template>
  <v-toolbar app dark color="#0c887c">
     <v-toolbar-title class="white--text ml-5">My Quiz</v-toolbar-title>
     <v-spacer></v-spacer>
     <v-toolbar-items class="hidden-sm-and-down">
       <v-btn flat to="/summary" exact>Summary</v-btn>
       <v-btn flat to="/home" exact>Quit</v-btn>
       <v-btn flat to="/Login" exact>Logout</v-btn>
     </v-toolbar-items>
  </v-toolbar>
</template>

<script>
export default {
  name: 'Home',
  props: {

  }
}
</script>

<style scoped>

</style>
