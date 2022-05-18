import { createApp } from "vue";

import App from "@/App.vue";
import router from "./router/index";
import "./index.css";
import AOS from "aos";
import "aos/dist/aos.css";
import store from './store';

// import  firebase from 'firebase/app';
import 'firebase/firestore';
import "firebase/storage";
import "firebase/auth";
// import { getFirestore } from "firebase/firestore";
import { initializeApp } from "@firebase/app";

AOS.init();
document.addEventListener("aos:in", ({ detail }) => {
  console.dir(detail);
});

const firebaseConfig = {
  apiKey: "AIzaSyA14VnKzfYDb1gZprr0ZTtquKgx2JX1H5Q",
  authDomain: "sport-time-763e8.firebaseapp.com",
  projectId: "sport-time-763e8",
  storageBucket: "sport-time-763e8.appspot.com",
  messagingSenderId: "481792371308",
  appId: "1:481792371308:web:991e823f1c75cb33d44649",
  measurementId: "G-CPPWK5QRBL",
};
export default initializeApp(firebaseConfig);

// export default getFirestore();
createApp(App).use(store).use(router).mount("#app");
