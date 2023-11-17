<template>
  <div id="main">
    <section class="header"
             :style="{ backgroundImage: 'url(/storage/bgc-header.png)', width: 'auto', height: '900px', maxWidth: '100%', backgroundSize: 'cover', backgroundPosition: 'center' }">
      <div class="container">
        <div class="address">
          <ul class="navbar">
            <li class="nav-item">Проспект ювілейний 24</li>
            <li class="nav-item">+380 (050) 566 87 96</li>
          </ul>
        </div>
        <div class="main-menu">
          <ul class="navbar d-flex justify-content-center row">
            <li class="col list-group-item cus border-bottom border-top"><a href="#"
                                                                            class="plink text-white text-decoration-none">Каталог</a>
            </li>
            <li class="col list-group-item cus border"><a href="#"
                                                          class="plink text-white text-decoration-none">Доставка</a>
            </li>
            <li class="col list-group-item cus border"><a href="#"
                                                          class="plink text-white text-decoration-none">Колекції</a>
            </li>
            <li class="col list-group-item cus border-bottom border-top"><a href="#"
                                                                            class="plink text-white text-decoration-none">Контакти</a>
            </li>
          </ul>
        </div>
        <div class="buttons-header">
          <div class="d-flex justify-content-center">
            <button @click="scrollToMap" class="btn text-white bgc-sections-accent">Винна карта</button>
            <button @click="scrollToDeg" class="btn  text-white margin-1 bgc-sections-accent">Дегустація</button>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>

export default {
  name: 'HeaderSite',
  methods: {
    scrollToMap() {
      const currentPosition = window.scrollY;
      const newPosition = currentPosition + 1850;
      window.scrollTo({
        top: newPosition,
        behavior: 'smooth',
      });
    },
    scrollToDeg() {
      const currentPosition = window.scrollY;
      const newPosition = currentPosition + 2850;
      window.scrollTo({
        top: newPosition,
        behavior: 'smooth',
      });
    },
  }

}

</script>
<style scoped>
li {
  padding: 10px 0;
  display: flex;
  justify-content: center;
}

.cus a {
  padding: 10px 15px;
}

@media screen and (max-width: 375px) {
  button {
    padding: 15px 20px;
  }

}

@media screen and (max-width: 336px) {
  button {
    padding: 10px 15px;
  }

}
</style>
<style>
@media screen and (max-width: 1200px) {
  .list-group-item {
    padding: 0 15px;
  }
}

@media screen and (max-width: 376px) {
  .buttons-header {
    margin-top: 210px !important;
  }
}

@media screen and (max-width: 576px) {
  .buttons-header {
    margin-top: 210px !important;
  }
}

.header {
  width: 100%;
  height: auto;
}

.container {
  color: #FFFFFF;
  font-size: 13px;
  font-family: 'Montserrat', serif;
}

.main-menu {
  margin-top: 25px;
}

.nav-item {
  padding: 18px 107px;
}

.buttons-header {
  margin-top: 510px;
}

.margin-1 {
  margin-left: 18px;
}
</style>