import Vue from 'vue'
import App from './App.vue'
import vueAwesomeCountdown from 'vue-awesome-countdown'
import Vuetify from 'vuetify'
import('vuetify/dist/vuetify.min.css');
import router from './router'


Vue.use(Vuetify)
Vue.use(vueAwesomeCountdown, 'vac') // Component name, `countdown` and `vac` by default
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
