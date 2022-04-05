require('./bootstrap')

// Import vue.js in our app.js file
import {createApp} from 'vue'



// Import main layout file called layout.vue
import Home from "./components/Home.vue"
// In you main.js

// Importing toast notifications...
import Toaster from "@meforma/vue-toaster"

// Importing routes file
import Routes from "./routes";

// Create an app instance
const app=createApp({})
app.component('home',Home)

// Using toaster notifications
app.use(Toaster)

// Using routes notifications
app.use(Routes)

app.mount('#app')


