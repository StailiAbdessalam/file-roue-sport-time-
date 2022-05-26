import { createStore } from "vuex";
import axios from "axios";
export default createStore({
  state: {
    suspend: "",
    User: {},
    Stade: {},
    Clients: {},
  },
  getters: {
    User: (state) => state.User,
    Clients: (state) => state.Clients,
    getStade: (state) => state.Stade,
  },
  mutations: {
    SetUser: (state, User) => {
      state.User = User;
    },
    SetClient: (state, Clients) => {
    
      state.Clients = Clients;
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
         
          commit("SetUser", res.data);
        });
    },
     getUser({ commit }) {
      axios
        .post("http://localhost/FILEROUGE/Clients/getOne", {
          id: localStorage.getItem("id"),
        })
        .then((res) => {
          commit("SetClient", res.data[0]);
        });
    },
  },
});
