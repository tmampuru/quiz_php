<template>
  <div class="hello">
    <p>Worl Please</p>
    <!-- for each response of the current question -->
    <li >
      <label>
        <!-- The radio button has three new directives -->
        <!-- v-bind:value sets "value" to "true" if the response is correct -->
        <!-- v-bind:name sets "name" to question index to group answers by question -->
        <!-- v-model creates binding with userResponses -->
        <input type="radio" />
      </label>
    </li>
  </div>
</template>

<script>
export default {
  name: 'Home',

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
