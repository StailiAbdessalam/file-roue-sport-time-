import { createStore } from "vuex";
import axios from "axios";
export default createStore({
  state: {
    suspend: "",
    User: {},
  },
  getters: {
    User: (state) => state.User,
  },
  mutations: {
    SetUser: (state, User) => {
      state.User = User;
    },
  },
  actions: {
    getOrganisateur({ commit }) {
      axios
        .post("http://localhost/FILEROUGE/Organisateur/getOne", {
          id: localStorage.getItem("id"),
        })
        .then((res) => {
          console.log(res.data);
          commit("SetUser", res.data);
        });
    },
  },
});
