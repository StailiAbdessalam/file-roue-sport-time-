<template>
    <div class="flex justify-center items-center w-full ">
        <div class="flex justify-center items-center w-full ">
            <div class="flex justify-center  items-center gap-20  w-full form_singup ">
                <div data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-delay="500" data-aos-offset="500">
                   <img src="../assets/img/SignUp.gif" alt="">
                </div>
                <div  data-aos="flip-left" data-aos-anchor="#example-anchor" data-aos-duration="1500"
                    data-aos-delay="1000" data-aos-offset="500" class=" relative h-full flex flex-col gap-3">
                    <div class="flex flex-col justify-center items-center  ">
                        <h1 class="form_singup_title">Sig Up in a new account</h1>
                    </div>
                    <form class="form_singup_formData" action="">
                        <label for="fullName">full Name</label>
                        <input type="text" placeholder="ABDESSALAM" name="fullName">
                        <label for="lastName">last Name</label>
                        <input type="text" placeholder="STAILI" name="lastName">
                        <label for="Phone">Phone</label>
                        <input type="number" placeholder="+212 6________" name="Phone">
                        <label for="email">your email</label>
                        <input type="email" placeholder="A.STAILI@gmail.com" name="email">
                        <label for="password">password</label>
                        <input type="password" placeholder="**************" name="password">
                        <input id="submit" type="submit" name="valid" value="Sing Up">
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "sin-gup",
    methods: {

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

.form_singup_formData input {
    border: 1px solid #D5DAE1;
    box-sizing: border-box;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
    border-radius: 8px;
    width: 500px;
    height: 2.5rem;
    outline: none;
    padding: 10px;
    margin-bottom: 1rem;
}

#submit {
    height: 3rem;
    margin-top: 10px;
    background-color: rgba(34, 197, 94, 1);
    color: #fff;
}
</style>
