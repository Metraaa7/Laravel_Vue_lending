<template>
  <div id="degustation">
    <section class="degustation bgc-sections-main">
      <div class="container">
        <div class="col-xl-12 d-flex align-items-center justify-content-center">
          <div class="col-xl-3">
            <img src="/storage/footer-1.png" alt="about-img">
          </div>
          <div class="col-xl-1">
            <span class="d-flex justify-content-center hr"><hr class="col-12"></span>
          </div>
          <div class="col-xl-4">
            <h2 class="d-title d-flex justify-content-center">Запис на дегустацію</h2>
          </div>
          <div class="col-xl-1">
            <span class="d-flex justify-content-center hr"><hr class="col-12"></span>
          </div>
          <div class="col-xl-3 d-flex justify-content-end">
            <img src="/storage/footer-2.png" alt="about-img">
          </div>
        </div>
        <div
            class="border-0 border-bottom border-end border-start card-wrapper d-flex justify-content-center flex-column">
          <span class="d-flex justify-content-center hr"><hr class="col-2"></span>
          <div class="col-12 d-flex justify-content-center">
            <div class="col-2"></div>
            <div class="col-8">
              <p class="card-text d-flex justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed
                fermentum.</p>
            </div>
            <div class="col-2"></div>
          </div>
          <form class="custom-form">
            <div class="mt-3 row form-group d-flex justify-content-center">
              <div class="col-4">
                <input v-model="name" id="name" type="text" class="form-control bg-transparent border-0 border-bottom text-white" placeholder="Им'я" required>
                <div class="invalid-feedback">Будь ласка, введіть ваше им'я.</div>
              </div>
              <div class="col-4">
                <input v-model="number" id="number" type="number" required class="form-control bg-transparent border-0 border-bottom text-white"
                       placeholder="Телефон">
                <div class="invalid-feedback">Будь ласка, введіть ваш телефон.</div>
              </div>
              <div class="col-8 mt-4">
                <input v-model="address" id="address" type="text" class="form-control bg-transparent border-0 border-bottom text-white" placeholder="Ваша адреса" required>
                <div class="invalid-feedback">Будь ласка, введіть вашу адресу.</div>
              </div>
              <div class="col-8 mt-3">
                <button @click.prevent="submitForm" class="col-12 btn btn-outline-secondary">Записатись</button>

                <div ref="modal" :class="{ 'modal-overlay': modalVisible, 'modal': true }" @click="closeModal">
                  <div class="modal-content">
                    <span class="close" @click="closeModal">
                      &times;
                    </span>
                    <p class="text-dark">Ви записані на дегустацію</p>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="number"] {
  -moz-appearance: textfield;
}
</style>

<script>
export default {
  name: 'DegustationSite',
  data() {
    return {
      modalVisible: false,
      name: null,
      number: null,
      address: null
    };
  },
  methods: {
    openModal() {
      this.modalVisible = true;
      document.body.style.overflow = 'hidden';

      this.$nextTick(() => {
        window.dispatchEvent(new Event('resize'));
        this.$refs.modal.classList.add('visible');
      });
    },
    closeModal() {
      this.modalVisible = false;
      document.body.style.overflow = '';
      this.$refs.modal.classList.remove('visible');

      this.name = '';
      this.number = '';
      this.address = '';
    },
    validateForm() {
      const form = this.$el.querySelector('form');
      if (form.checkValidity()) {
        form.classList.remove('was-validated');
        return true;
      } else {
        form.classList.add('was-validated');
        return false;
      }
    },
    submitForm() {
      if (this.validateForm()) {
        setTimeout(() => {
          this.openModal();
        }, 100);
      }
      axios.post('/api/', {name: this.name, number: this.number, address: this.address}).then()
    }
  },
}
</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}


.modal {
  padding: 20px;
  width: 300px;
  height: 300px;
  overflow: auto;
  transition: opacity 0.3s ease;
  opacity: 0;
}

.modal.visible {
  opacity: 1;
}

.modal-content {
  text-align: center;
  padding: 20px;
  outline: none;
}

.close {
  display: flex;
  justify-content: end;
  cursor: pointer;
  font-size: 30px;
  color: red;
}


input {
  font-size: 12px;
}

@media screen and (max-width: 370px) {
  input {
    font-size: 8px;
  }

}

@media screen and (max-width: 690px) {
  img {
    display: none;
  }
}

.degustation {
  padding-top: 100px;
  font-family: 'Montserrat', serif;
  padding-bottom: 100px;
}

.custom-form {
  border-radius: 0;
}

.card-wrapper {
  padding: 75px 0;
}

input::placeholder {
  color: white !important;
}

hr {
  color: #FFFFFF;
}

.hr {
  margin-top: 50px;
}

.card-text {
  margin-top: 45px;
  text-align: center;
}

.d-title {
  margin-top: 50px;
}

</style>
