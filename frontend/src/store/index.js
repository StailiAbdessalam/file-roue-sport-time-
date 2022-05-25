import { createStore } from "vuex";
import axios from "axios";
export default createStore({
  state: {
    suspend: "",
    User: {},
    Stade: {},
  },
  getters: {
    User: (state) => state.User,
    getStade: (state) => state.Stade,
  },
  mutations: {
    SetUser: (state, User) => {
      state.User = User;
    },
    setLocal(state, Stade){
      state.Stade = Stade;
    }
  },
  actions: {
    getOrganisateur({ commit }) {
      axios
        .post("http://localhost/FILEROUGE/Organisateur/getOne", {
          id: localStorage.getItem("id"),
        })
        .then((res) => {
          // console.log(res);
          commit("SetUser", res.data);
        });
    },
  },
});
