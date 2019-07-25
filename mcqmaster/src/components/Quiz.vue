<template>
  <div class="quiz">
    <div class="main-title">
      <div class="container">
        <h2>Quiz</h2>
      </div>
    </div>
    <div class="countdown">
      <div class="container">
        <vac :end-time="new Date().getTime() + 600000">
          <span
            slot="process"
            slot-scope="{ timeObj }">{{ `Time remaining: ${timeObj.m}min:${timeObj.s}sec` }}</span>
          <span slot="finish">Times Up!</span>
        </vac>
      </div>
    </div>
    <div class="quiz-form">
      <p>The questions is fuck and your answer is?</p>
      <label for="jack">
        <input type="checkbox" id="answer" value="Huh" v-model="checkedNames">
        A. Huh
      </label>
      <label for="john">
        <input type="checkbox" id="answer2" value="What" v-model="checkedNames">
        B. What
      </label>
      <label for="mike">
        <input type="checkbox" id="answer3" value="Okay" v-model="checkedNames">
        C. Okay
      </label>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Quiz',
  props: {

  },

  methods : {
    checkedNames() {

    }
  }
}
</script>

<style scoped>
label {
  display: block;
}
.quiz-form {
  padding: 18px 0px;
  margin: 40px;
  font-size: 22px;
  font-weight: normal;
}
.main-title {
    padding: 40px 0;
    background: #0ac775;
    margin-top: 60px;
}
.main-title h2 {
  color: #ffffff;
  font-family: Open Sans, sans-serif;
  font-size: 40px;
  font-weight: normal;
  margin-left: 20px;
}
.countdown {
  background: #0c887c;
  color: #fff;
  font-weight: bold;
  box-shadow: 11px 9px 20px 0px #0c887c94;
  padding: 7px;
  border-radius: 4px;
  float: right;
}

</style>
