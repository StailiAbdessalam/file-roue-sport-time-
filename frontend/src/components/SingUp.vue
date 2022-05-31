<template>
  <div class="flex justify-center items-center w-full">
    <what v-if="load" />
    <div class="flex justify-center items-center w-full">
      <div class="flex justify-center items-center gap-20 w-full form_singup">
        <div
          class="sigup"
          data-aos="fade-right"
          data-aos-anchor="#example-anchor"
          data-aos-delay="500"
          data-aos-offset="500"
        >
          <img src="../assets/img/SignUp.gif" alt="" />
        </div>
        <div
          data-aos="flip-left"
          data-aos-anchor="#example-anchor"
          data-aos-duration="1500"
          data-aos-delay="1000"
          data-aos-offset="500"
          class="relative flex flex-col gap-3"
        >
          <div class="flex flex-col justify-center items-center">
            <h1 class="form_singup_title">Sig Up in a new account</h1>
          </div>
          <label for="role">Role</label>
          <select v-model="role" name="" id="">
            <option disabled selected>choisi votre role</option>
            <option value="Organisateur">organisateur</option>
            <option value="Client">CLient</option>
          </select>
          <form
            v-if="role == 'Client'"
            class="form_singup_formData"
            @submit.prevent="ADDClient"
          >
            <label for="FirstName">First Name</label>
            <input
              type="text"
              v-model="dataClient.FirstName"
              placeholder="ABDESSALAM"
              required
              name="FirstName"
            />
            <label for="lastName">last Name</label>
            <input
              type="text"
              v-model="dataClient.LastName"
              required
              placeholder="STAILI"
              name="lastName"
            />
            <label for="UserName">User Name</label>
            <input
              type="text"
              v-model="dataClient.UserName"
              required
              placeholder="BENJY33X"
              name="UserName"
            />
            <label for="Phone">Phone</label>
            <input
              type="tel"
              v-model="dataClient.Phone"
              required
              placeholder="+212 6________"
              name="Phone"
            />
            <label for="email">your email</label>
            <input
              type="email"
              v-model="dataClient.Email"
              required
              placeholder="A.STAILI@gmail.com"
              name="email"
            />
            <input id="submit" type="submit" name="valid" value="Sing Up" />
          </form>
          <form
            v-if="role == 'Organisateur'"
            class="form_singup_formData"
            @submit.prevent="FaitDemmande"
          >
            <label for="fullName">full Name </label>
            <input
              type="text"
              v-model="dataOrganisateur.FirstName"
              placeholder="sport "
              required
              name="fullName"
            />
            <label for="lastName">last Name</label>
            <input
              type="text"
              v-model="dataOrganisateur.LastName"
              required
              placeholder="Time"
              name="lastName"
            />
            <label for="business_name">Business name </label>
            <input
              type="text"
              v-model="dataOrganisateur.business_name"
              required
              placeholder="Sport Time"
              name="business_name"
            />
            <label for="Phone">Phone</label>
            <input
              type="tel"
              v-model="dataOrganisateur.Phone"
              required
              placeholder="+212 6________"
              name="Phone"
            />
            <label for="email">your email</label>
            <input
              type="email"
              v-model="dataOrganisateur.Email"
              required
              placeholder="A.STAILI@gmail.com"
              name="email"
            />
            <input
              id="submit"
              type="submit"
              name="valid"
              value="send Demmande"
            />
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import swal from "sweetalert";
import what from "./chose/whit.vue";

export default {
  name: "sin-gup",
  data() {
    return {
      load: false,
      role: false,
      Valide: false,
      dataClient: {
        FirstName: "",
        LastName: "",
        UserName: "",
        Email: "",
        Phone: "",
      },
      dataOrganisateur: {
        FirstName: "",
        LastName: "",
        business_name: "",
        Email: "",
        Phone: "",
        suspended: 0,
      },
    };
  },
  components: {
    what,
  },
  methods: {
    ADDClient() {
      this.load = true;
      axios
        .post(`${this.$apiUrl}/Clients/register`, this.dataClient)
        .then((res) => {
          this.Valide = true;
          setTimeout(() => {
            console.log(res.data);
            this.$router.push("Login");
            swal(
              res.data.IdUnique,
              "Ceci est votre mot de passe pour vous connecter a votre compte  bienvenue a sport time",
              "success"
            );
          }, 1500);
        });
    },
    FaitDemmande() {
      console.log(this.dataOrganisateur);
      this.load = true;
      axios
        .post(`${this.$apiUrl}/Organisateur/register`, this.dataOrganisateur)
        .then((res) => {
          this.Valide = true;
          setTimeout(() => {
            this.$router.push("Login");
            swal(
              res.data.IdUnique,
              "Ceci est votre mot de passe pour vous connecter a votre compte  bienvenue a sport time",
              "success"
            );
          }, 1500);
        });
    },
  },
};
</script>

<style>
.form_singup {
  margin: 100px;

  border-radius: 16px;
}

.form_singup_title {
  font-size: 1.5rem;
  font-weight: bold;
  color: rgba(255, 159, 28, 1);
}

.form_singup_formData {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: flex-start;
  background-color: rgb(255, 255, 255);
}

.form_singup_formData label {
  text-align: start;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 24px;
}

Select,
.form_singup_formData input {
  border: 1px solid #d5dae1;
  box-sizing: border-box;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
  border-radius: 8px;
  width: 500px;
  height: 2.5rem;
  outline: none;
  padding-left: 10px;
  margin-bottom: 1rem;
}

@media (max-width: 768px) {
  Select,
  .form_singup_formData input {
    width: 396px;
  }
}
@media (max-width: 417px) {
  Select,
  .form_singup_formData input {
    width: 326px;
  }
}

#submit {
  height: 3rem;
  margin-top: 10px;
  background-color: rgba(34, 197, 94, 1);
  color: #fff;
}
@media (max-width: 916px) {
  .sigup {
    display: none;
  }
}
</style>
