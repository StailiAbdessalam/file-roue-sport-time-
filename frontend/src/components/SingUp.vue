<template>
  <div class="flex justify-center items-center w-full">
    <div class="bg-white w-screen h-screen absolute z-50 bg-opacity-70" v-if="load">
      <loading class="z-60" />

    </div>
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
        <div class="relative flex flex-col gap-3">
          <div class="flex flex-col justify-center items-center">
            <h1 class="form_singup_title">Sig Up in a new account</h1>
          </div>
          <label for="role">Role</label>
          <select v-model="role" @change="changerole" name="" id="">
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

            <div>
              <div class="mb-5">
                <label for="password" class="font-bold mb-1 text-gray-700 block"
                  >Set up password</label
                >
                <div class="relative">
                  <input
                    :type="togglePassword ? 'text' : 'password'"
                    @keydown="checkPasswordStrength()"
                    v-model="password"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Your strong password..."
                  />
                  <div
                    class="absolute right-9 top-2  cursor-pointer"
                    @click="togglePassword = !togglePassword"
                  >
                    <svg
                      v-bind:class="{
                        hidden: !togglePassword,
                        block: togglePassword,
                      }"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z"
                      />
                    </svg>

                    <svg
                      v-bind:class="{
                        hidden: togglePassword,
                        block: !togglePassword,
                      }"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"
                      />
                      <path
                        d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"
                      />
                    </svg>
                  </div>

                  <div class="text-gray-600 mt-2 mb-4">
                    Please create a secure password including the following
                    criteria below.

                    <ul class="list-disc text-sm ml-4 mt-2">
                      <li>lowercase letters</li>
                      <li>numbers</li>
                      <li>capital letters</li>
                      <li>special characters</li>
                    </ul>
                  </div>
                </div>

                <div class="flex items-center mt-4 h-3">
                  <div class="w-2/3 flex justify-between h-2">
                    <div
                      class="h-2 rounded-full mr-1 w-1/3"
                      :class="[
                        passwordStrengthText == 'Too weak' ||
                        passwordStrengthText == 'Could be stronger' ||
                        passwordStrengthText == 'Strong password'
                          ? 'bg-red-400'
                          : 'bg-gray-300',
                      ]"
                    ></div>
                    <div
                      class="h-2 rounded-full mr-1 w-1/3"
                      :class="[
                        passwordStrengthText == 'Could be stronger' ||
                        passwordStrengthText == 'Strong password'
                          ? 'bg-orange-400'
                          : 'bg-gray-300',
                      ]"
                    ></div>
                    <div
                      class="h-2 rounded-full w-1/3"
                      :class="
                        passwordStrengthText == 'Strong password'
                          ? 'bg-green-400'
                          : 'bg-gray-300'
                      "
                    ></div>
                  </div>
                  <div
                    class="text-gray-500 font-medium text-sm ml-3 leading-none"
                  >
                    {{ passwordStrengthText }}
                  </div>
                </div>
              </div>
            </div>

            <input class="cursor-pointer" id="submit" type="submit" name="valid" value="Sing Up" />
          </form>
          <form
            v-if="role == 'Organisateur'"
            class="form_singup_formData"
            @submit.prevent="FaitDemmande"
          >
            <label for="fullName">first Name </label>
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

            <div>
              <div class="mb-5">
                <label for="password" class="font-bold mb-1 text-gray-700 block"
                  >Set up password</label
                >
                <div class="relative">
                  <input
                    :type="togglePassword ? 'text' : 'password'"
                    @keydown="checkPasswordStrength()"
                    v-model="password"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Your strong password..."
                  />
                  <div
                    class="absolute right-9  top-2 cursor-pointer"
                    @click="togglePassword = !togglePassword"
                  >
                    <svg
                      v-bind:class="{
                        hidden: !togglePassword,
                        block: togglePassword,
                      }"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z"
                      />
                    </svg>

                    <svg
                      v-bind:class="{
                        hidden: togglePassword,
                        block: !togglePassword,
                      }"
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-6 h-6 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"
                      />
                      <path
                        d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"
                      />
                    </svg>
                  </div>
                  <div class="text-gray-600 mt-2 mb-4">
                    Please create a secure password including the following
                    criteria below.

                    <ul class="list-disc text-sm ml-4 mt-2">
                      <li>lowercase letters</li>
                      <li>numbers</li>
                      <li>capital letters</li>
                      <li>special characters</li>
                    </ul>
                  </div>
                </div>

                <div class="flex items-center mt-4 h-3">
                  <div class="w-2/3 flex justify-between h-2">
                    <div
                      class="h-2 rounded-full mr-1 w-1/3"
                      :class="[
                        passwordStrengthText == 'Too weak' ||
                        passwordStrengthText == 'Could be stronger' ||
                        passwordStrengthText == 'Strong password'
                          ? 'bg-red-400'
                          : 'bg-gray-300',
                      ]"
                    ></div>
                    <div
                      class="h-2 rounded-full mr-1 w-1/3"
                      :class="[
                        passwordStrengthText == 'Could be stronger' ||
                        passwordStrengthText == 'Strong password'
                          ? 'bg-orange-400'
                          : 'bg-gray-300',
                      ]"
                    ></div>
                    <div
                      class="h-2 rounded-full w-1/3"
                      :class="
                        passwordStrengthText == 'Strong password'
                          ? 'bg-green-400'
                          : 'bg-gray-300'
                      "
                    ></div>
                  </div>
                  <div
                    class="text-gray-500 font-medium text-sm ml-3 leading-none"
                  >
                    {{ passwordStrengthText }}
                  </div>
                </div>
              </div>
            </div>

            <input
              id="submit"
              type="submit"
              name="valid"
              value="send Demmande"
              class="cursor-pointer"
            />
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import loading from "../Animation/loading.vue"
import axios from "axios";
import swal from "sweetalert";

export default {
  name: "sin-gup",
  data() {
    return {
      passwordStrengthText: "",
      togglePassword: false,
      load: false,
      role: false,
      Valide: false,
      password: "",
      dataClient: {
        FirstName: "",
        LastName: "",
        UserName: "",
        Email: "",
        Phone: "",
        IdUnique: "",
      },
      dataOrganisateur: {
        IdUnique: "",
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
    loading,
  },
  methods: {
    changerole() {
      if (this.role == "Client") {
        this.dataClient.IdUnique = this.password;
      }
      if (this.role == "Organisateur") {
        this.dataOrganisateur.IdUnique = this.password;
      }
    },
    checkPasswordStrength() {
      var strongRegex = new RegExp(
        "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})"
      );
      var mediumRegex = new RegExp(
        "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})"
      );
      let value = this.password;
      if (strongRegex.test(value)) {
        this.passwordStrengthText = "Strong password";
      } else if (mediumRegex.test(value)) {
        this.passwordStrengthText = "Could be stronger";
      } else {
        this.passwordStrengthText = "Too weak";
      }
      if (this.role == "Client") {
        this.dataClient.IdUnique = this.password;
      }
      if (this.role == "Organisateur") {
        this.dataOrganisateur.IdUnique = this.password;
      }
    },

    ADDClient() {
      if (this.passwordStrengthText == "Strong password") {
        this.load = true;
        axios
          .post(`${this.$apiUrl}/Clients/register`, this.dataClient)
          .then((res) => {
            console.log(res.data.keys);
            if (res.data.keys) {
              this.load = false;
              swal({
                title: "warning",
                text: `Ce ${res.data.keys} existe déjà`,
                icon: "warning",
                button: "OK",
              });
            } else {
              this.Valide = true;
              setTimeout(() => {
                this.$router.push("Login");
                swal(
                  "Good job!",
                  "Ceci est votre mot de passe pour vous connecter a votre compte  bienvenue a sport time",
                  "success"
                );
              }, 1500);
            }
          });
      } else {
        swal("Oops...", "Votre mot de passe n'est pas assez sécurisé", "error");
      }
    },
    FaitDemmande() {
      if (this.passwordStrengthText == "Strong password") {
        this.load = true;
        axios
          .post(`${this.$apiUrl}/Organisateur/register`, this.dataOrganisateur)
          .then((res) => {
            console.log(res);
            this.Valide = true;
            setTimeout(() => {
              this.$router.push("Login");
              swal(
                "Good job!",
                "Ceci est votre mot de passe pour vous connecter a votre compte  bienvenue a sport time",
                "success"
              );
            }, 1500);
          });
      } else {
        swal("Oops...", "Votre mot de passe n'est pas assez sécurisé", "error");
      }
    },
  },
  watch: {
    password() {
      this.changerole();
    },
  },
  mounted() {
    console.log("gsdugfuidsgfuigquifguidsgufiguisd");
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
