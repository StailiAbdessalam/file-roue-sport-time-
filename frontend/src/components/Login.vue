<template>
  <div class="flex justify-center items-center w-full">
    <div class="flex justify-center items-center w-full">
      <div class="flex justify-center items-center gap-20 w-full form_Login">
        <div
          data-aos="flip-left"
          data-aos-anchor="#example-anchor"
          data-aos-duration="1500"
          data-aos-delay="1000"
          class="relative flex flex-col gap-3"
        >
          <div class="flex flex-col justify-center items-center">
            <h1 class="form_Login_title">Sig in </h1>
          </div>
          <form class="form_Login_formData" action="" @submit.prevent="login()">
            <label for="role">Role</label>
            <select v-model="personne" @change="role = true">
              <option disabled selected value="">choisi votre role</option>
              <option>Client</option>
              <option>organisateur</option>
              <option>Admin</option>
            </select>
            <label v-if="role" for="password">Your ID</label>
            <input
              v-on:keyup="invalide = false"
              v-model="ID"
              v-if="role"
              type="password"
              placeholder="**************"
              name="password"
            />
            <div
              v-if="invalide"
              data-aos="zoom-in"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
              class="flex mb-3"
            >
              <svg
                viewBox="0 0 24 24"
                class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
              >
                <path
                  fill="currentColor"
                  d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"
                ></path>
              </svg>
              <span class="text-red-800"> Your address ID is invalid. </span>

            </div>
            <input
              v-if="role"
              id="submit"
              type="submit"
              name="valid"
              value="Sing Up"
              class="cursor-pointer"
            />
          </form>
          <div @click="oublierMotPass" class="text-xs text-gray-400 -mt-4 hover:cursor-pointer">j'ai oublier mon mot de pass</div>
        </div>
        <div
          data-aos="fade-left"
          data-aos-anchor="#example-anchor"
          data-aos-delay="500"
          data-aos-offset="500"
          class="login"
        >
          <img src="../assets/img/login.gif"  alt="" />
        </div>
        <!--alert invalide-->
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import swal from "sweetalert";

export default {
  name: "sin-gup",
  inject: ["setRole"],
  data() {
    return {
      personne: "",
      invalide: false,
      role: false,
      Bar: localStorage.getItem("user"),
      ID: "",
    };
  },
  methods: {
    login() {
      axios
        .post(`${this.$apiUrl}/${this.personne}/index`, {
          ID: this.ID,
        })
        .then((response) => {
          if (response.data.status == "information correct") {
            if (response.data.data.suspended == 0) {
              swal({
                title: "Welcome",
                text: "pour continuer veuillez vous Validate your account",
                icon: "success",
                button: "Validate",
              });
              this.$router.push("/Validation");
              localStorage.setItem("id", response.data.data.id);
            } else if (response.data.data.suspended == -1) {
              this.$router.push("/");
              swal({
                title: "Welcome",
                text: "pour continuer veuillez vous Validate your account",
                icon: "success",
                button: "Validate",
              });
            } else {
              localStorage.setItem("user", this.personne);
              localStorage.setItem("id",response.data.data.id); 
              this.setRole(this.personne);
              this.$router.push("/")
            }
          } else {
            this.error = response.data.message;
            this.invalide = true;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    oublierMotPass() {
      swal({
        title: "Forgot your password?",
        text: "Enter your email address below to receive a password reset link.",
        icon: "info",
        content: "input",
        button: {
          text: "Send",
          closeModal: false,
        },
      }).then((email) => {
        if (!email) throw null;
        axios
          .post(`${this.$apiUrl}/Clients/forgot`, {
            email: email,
          })
          .then((response) => {
            if (response.data.status == "information correct") {
              swal({
                title: "Check your email",
                text: `We have sent you an email in "${email}"  with instructions to reset your password!`,
                icon: "success",
                button: "OK",
              });
            } else {
              swal({
                title: "Error",
                text: "We couldn't find your email in our database.",
                icon: "error",
                button: "OK",
              });
            }
          })
          .catch((error) => {
            console.log(error);
          });
      });
    },
  },
};
</script>

<style>
.form_Login_title {
  font-size: 1.5rem;
  font-weight: bold;
  color: rgba(255, 159, 28, 1);
}

.form_Login_formData {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: flex-start;
  background-color: rgb(255, 255, 255);
}

.form_Login_formData label {
  text-align: start;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 24px;
}

.form_Login_formData select,
.form_Login_formData input {
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
  .form_Login_formData select,
  .form_Login_formData input {
    width: 396px;
  }
}@media (max-width: 417px) {
  .form_Login_formData select,
  .form_Login_formData input {
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
  .login {
   display: none;
  }
}
</style>
