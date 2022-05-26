<template>
  <div class="flex justify-center items-center">
    <div class="modal__container m-24">
      <div class="modal__content">
        <form>
          <ul class="form-list">
            <li class="form-list__row">
              <label>Name</label>
              <input type="text" name="" required="" />
            </li>
            <li class="form-list__row">
              <label>Card Number</label>
              <div id="input--cc" class="creditcard-icon">
                <input type="text" name="cc_number" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--inline">
              <div>
                <label>Expiration Date</label>
                <div class="form-list__input-inline">
                  <input
                    type="text"
                    name="cc_month"
                    placeholder="MM"
                    pattern="\\d*"
                    minlength="2"
                    maxlength="2"
                    required=""
                  />
                  <input
                    type="text"
                    name="cc_year"
                    placeholder="YY"
                    pattern="\\d*"
                    minlength="2"
                    maxlength="2"
                    required=""
                  />
                </div>
              </div>
              <div>
                <label>
                  CVC

                  <a
                    href="#cvv-modal"
                    class="button--transparent modal-open button--info"
                  >
                    <svg
                      class="nc-icon glyph"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      width="16px"
                      height="16px"
                      viewBox="0 0 16 16"
                    >
                      <g>
                        <path
                          fill="#35a4fb"
                          d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,13c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9,12.6,8.6,13,8,13z M9.5,8.4C9,8.7,9,8.8,9,9v1H7V9c0-1.3,0.8-1.9,1.4-2.3C8.9,6.4,9,6.3,9,6c0-0.6-0.4-1-1-1 C7.6,5,7.3,5.2,7.1,5.5L6.6,6.4l-1.7-1l0.5-0.9C5.9,3.6,6.9,3,8,3c1.7,0,3,1.3,3,3C11,7.4,10.1,8,9.5,8.4z"
                        ></path>
                      </g>
                    </svg>
                    <span class="visuallyhidden">What is CVV?</span>
                  </a>
                </label>
                <input
                  type="text"
                  name="cc_cvc"
                  placeholder="123"
                  pattern="\\d*"
                  minlength="3"
                  maxlength="4"
                  required=""
                />
              </div>
            </li>
            <!-- <li class="form-list__row form-list__row--agree">
              <label>
                <input type="checkbox" name="save_cc" checked="checked">
                Save my card for future purchases
              </label>
            </li> -->
            <li class="mt-24">
              <button type="submit" class="button">Pay Now</button>
            </li>
          </ul>
        </form>
      </div>
      <!-- END: .modal__content -->
      <div class="modal__featured">
        <button type="button" class="button--transparent button--close">
          <svg
            class="nc-icon glyph"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            width="32px"
            height="32px"
            viewBox="0 0 32 32"
          >
            <g>
              <path
                fill="#ffffff"
                d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"
              ></path>
            </g>
          </svg>
          <span class="visuallyhidden">Return to Product Page</span>
        </button>
        <div class="modal__circle"></div>
        <img src="../../assets/img/Hakimi.png" class="modal__product" />
      </div>
    </div>
    <!-- END: .modal__container -->
  </div>
</template>

<script>
export default {
  name: "Paym-ent",
};
</script>

<style lang="scss" scoped>
h1,
h2,
h3,
h4,
h5 {
  margin: 0;
  font-weight: 600;
}

.button {
  color: #ffffff;
  background-color: #24cf5f;
  padding: 12px 25px;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-radius: 7px;
  outline: 0;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.2);
  transition: all 0.2s;
}
.button:hover,
.button:active,
.button:focus {
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}

.button--transparent {
  background: transparent;
  border: 0;
  outline: 0;
}

.button--close {
  position: absolute;
  top: 10px;
  left: 10px;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  color: #ffffff;
  border-radius: 50%;
  transition: all 0.25s;
  z-index: 10;
}
.button--close svg {
  width: 20px;
  height: 20px;
}
.button--close svg * {
  fill: currentColor;
}
.button--close:hover,
.button--close:active,
.button--close:focus {
  color: #fbcf34;
  background-color: #ffffff;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1);
}

.button--info {
  position: absolute;
  top: 0;
  right: 0;
}

input {
  width: 70%;
  min-height: 30px;
  padding-left: 5px;
  padding-right: 5px;
  letter-spacing: 0.5px;
  border: 0;
  border-bottom: 2px solid #f0f0f0;
}
input:valid {
  border-color: #24cf5f;
}
input:focus {
  outline: none;
  border-color: #fbcf34;
}

.form-list {
  padding-left: 0;
  list-style: none;
}
.form-list__row {
  margin-bottom: 25px;
}
.form-list__row label {
  position: relative;
  display: block;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 11px;
  letter-spacing: 0.5px;
  color: #939393;
}
.form-list__row--inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.form-list__row--inline > :first-child {
  -ms-flex: 2;
  flex: 2;
  padding-right: 20px;
}
.form-list__row--inline > :nth-child(2n) {
  -ms-flex: 1;
  flex: 1;
}
.form-list__input-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.form-list__input-inline > * {
  width: calc(50% - 10px - 10px);
}

#input--cc {
  position: relative;
  padding-top: 6px;
}
#input--cc input {
  padding-left: 46px;
  width: calc(100% - 46px);
}
#input--cc:before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 36px;
  height: 45px;
  background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20glyph%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%20%3Cpath%20data-color%3D%22color-2%22%20fill%3D%22%238c8c8c%22%20d%3D%22M47%2C16V9c0-1.105-0.895-2-2-2H3C1.895%2C7%2C1%2C7.895%2C1%2C9v7H47z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%238c8c8c%22%20d%3D%22M1%2C22v17c0%2C1.105%2C0.895%2C2%2C2%2C2h42c1.105%2C0%2C2-0.895%2C2-2V22H1z%20M18%2C33H8c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h10%20c0.552%2C0%2C1%2C0.448%2C1%2C1S18.552%2C33%2C18%2C33z%20M40%2C33h-5c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h5c0.552%2C0%2C1%2C0.448%2C1%2C1S40.552%2C33%2C40%2C33z%22%3E%3C/path%3E%20%3C/g%3E%3C/svg%3E");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 36px;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}


.modal__container {
  display: flex;
  height: 58vh;
  width: 65vw;
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1);
}
.modal__featured {
  position: relative;
  -ms-flex: 1;
  flex: 1;
  min-width: 230px;
  padding: 20px;
  overflow: hidden;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.modal__circle {
  position: absolute;
  top: 0;
  left: 0;
  height: 200%;
  width: 200%;
  background-color: #fbcf34;
  border-radius: 50%;
  // -ms-transform: translateX(-50%) translateY(-25%);
  //     transform: translateX(-50%) translateY(-25%);
}
.modal__product {
  position: absolute;
  top: 0;
  left: 50%;
  -ms-transform: translateX(calc(-50% - 10px));
  transform: translateX(calc(-50% - 10px));
  max-width: 200%;
}
.modal__content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 80%;
  -ms-flex: 3;
  flex: 3;
  padding: 40px 30px;
}

@media (max-width: 768px) {
  .modal__featured {
    display: none;
  }
}
</style>
