<template>
    <div class="flex justify-center items-center w-full ">
        <div class="flex justify-center items-center w-full ">
            <div class="flex justify-center  items-center gap-20  w-full form_singup ">
                <div data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-delay="500" data-aos-offset="500">
                    <img src="../assets/img/SignUp.gif" alt="">
                </div>
                <div data-aos="flip-left" data-aos-anchor="#example-anchor" data-aos-duration="1500"
                    data-aos-delay="1000" data-aos-offset="500" class=" relative h-full flex flex-col gap-3">
                    <div class="flex flex-col justify-center items-center  ">
                        <h1 class="form_singup_title">Sig Up in a new account</h1>
                    </div>
                    <select v-model="role" name="" id="">
                        <option disabled selected>choisi votre role</option>
                        <option value="Organisateur">organisateur</option>
                        <option value="Client">CLient</option>
                    </select>
                    <form v-if="role == 'Client'" class="form_singup_formData" @submit.prevent="ADDClient">
                        <label for="FirstName">First Name</label>
                        <input type="text" v-model="dataClient.FirstName" placeholder="ABDESSALAM" required
                            name="FirstName">
                        <label for="lastName">last Name</label>
                        <input type="text" v-model="dataClient.LastName" required placeholder="STAILI" name="lastName">
                        <label for="UserName">User Name</label>
                        <input type="text" v-model="dataClient.UserName" required placeholder="BENJY33X"
                            name="UserName">
                        <label for="Phone">Phone</label>
                        <input type="tel" v-model="dataClient.Phone" required placeholder="+212 6________" name="Phone">
                        <label for="email">your email</label>
                        <input type="email" v-model="dataClient.Email" required placeholder="A.STAILI@gmail.com"
                            name="email">
                        <input id="submit" type="submit" name="valid" value="Sing Up">
                    </form>
                    <form v-if="role == 'Organisateur'" class="form_singup_formData" @submit.prevent="FaitDemmande">
                        <label for="fullName">full Name </label>
                        <input type="text" v-model="dataOrganisateur.FirstName" placeholder="sport " required
                            name="fullName">
                        <label for="lastName">last Name</label>
                        <input type="text" v-model="dataOrganisateur.LastName" required placeholder="Time"
                            name="lastName">
                        <label for="business_name">Business name </label>
                        <input type="text" v-model="dataOrganisateur.business_name" required placeholder="Sport Time"
                            name="business_name">
                        <label for="Phone">Phone</label>
                        <input type="tel" v-model="dataOrganisateur.Phone" required placeholder="+212 6________"
                            name="Phone">
                        <label for="email">your email</label>
                        <input type="email" v-model="dataOrganisateur.Email" required placeholder="A.STAILI@gmail.com"
                            name="email">
                        <input id="submit" type="submit" name="valid" value="send Demmande">
                    </form>
                </div>
            </div>
        </div>


        <div v-if="Valide" data-aos="fade-up-left" data-aos-delay="100" data-aos-duration="200"
            class="absolute top:1/2 right-0 alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
            <div
                class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-green-800">
                    Success
                </div>
                <div class="alert-description text-sm text-green-600">
                    This is an alert message, alert message goes here..!
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import swal from 'sweetalert';


export default {
    name: "sin-gup",
    data() {
        return {
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
                Profil: "dd",
                Email: "",
                Phone: "",
                suspended: false,
            }
        }
    },
    methods: {
        ADDClient() {
            axios.post("http://localhost/FILEROUGE/Clientsr/register", this.dataClient).then(res => {
                console.log(res)
                this.Valide = true;
                setTimeout(() => {
                    this.$router.push("Login")
                    swal(res.data.IdUnique, "copie this code", "success");
                }, 1500);
            })
        },
        FaitDemmande() {
            axios.post("http://localhost/FILEROUGE/Organisateur/register", this.dataOrganisateur).then(res => {
                console.log(res)
                this.Valide = true;
                setTimeout(() => {
                    this.$router.push("Login")
                    swal(res.data.IdUnique, "copie this code", "success");
                }, 1500);
            })

        }
    },
}
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
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;

}

Select,
.form_singup_formData input {
    border: 1px solid #D5DAE1;
    box-sizing: border-box;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
    border-radius: 8px;
    width: 500px;
    height: 2.5rem;
    outline: none;
    padding-left: 10px;
    margin-bottom: 1rem;
}

#submit {
    height: 3rem;
    margin-top: 10px;
    background-color: rgba(34, 197, 94, 1);
    color: #fff;
}
</style>
