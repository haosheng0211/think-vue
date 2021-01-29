import { createApp } from "vue";
import app from "./app";
import { router } from "./router";
import store from "./store";

createApp(app)
  .use(store)
  .use(router)
  .mount("#app");
