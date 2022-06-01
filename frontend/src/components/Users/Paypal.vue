<template>
  <div class="pay">
    <div class="w-full flex justify-center items-center " v-if="paidFor">
      <h1>Noice, you bought a beautiful lamp!</h1>
    </div>
    <div class="w-1/2 pt-8 h-fit flex justify-center items-center bg-black rounded-lg" ref="paypal"></div>
  </div>
</template>

<script>
// import image from "../assets/lamp.png"
export default {
  name: "pay-ment",

  data: function () {
    return {
      loaded: false,
      paidFor: false,
      product: {
        price: 777.77,
        description: "leg lamp from that one movie",
        img: "./assets/lamp.jpg",
      },
    };
  },
  mounted: function () {
    const script = document.createElement("script");
    script.src =
      "https://www.paypal.com/sdk/js?client-id=AX0QjHOJhy6xQWEFJb3PLRIoiG68B7ThUMB1H9wiSnGET0hDH4VjW5rt-d-04rJCZP0gtNGh3b7eJ7uh";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  },
  methods: {
    setLoaded: function () {
      this.loaded = true;
      window.paypal
        .Buttons({
          createOrder: (data, actions) => {
            return actions.order.create({
              purchase_units: [
                {
                  description: this.product.description,
                  amount: {
                    currency_code: "USD",
                    value: this.product.price,
                  },
                },
              ],
            });
          },
          onApprove: async (data, actions) => {
            const order = await actions.order.capture();
            this.paidFor = true;
            console.log(order);
          },
          onError: (err) => {
            console.log(err);
          },
        })
        .render(this.$refs.paypal);
    },
  },
};
</script>

<style lang="scss" scoped>
  .pay {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
  }
</style>
