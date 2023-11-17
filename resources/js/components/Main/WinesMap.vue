<template>
  <div id="map">
    <section class="map bgc-section-2">
      <div class="container">
        <span><hr class="color-accent"></span>
        <div class="row wine-card">
          <div class="col-12 col-xl-6">
            <div class="col-12 text-black wine-category">Новинки коллекції</div>
            <h2 class="col-12 fw-bold text-black wine-data">Березень 1980</h2>
            <h2 class="col-12 fw-bold text-black wine-receipt">Врожай Марселя</h2>
            <span class="col-12"><hr class="color-accent col-3"></span>
            <div class="col-6 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. </div>
            <div class="wine-table col-12">
              <table class="table">
                <tbody>
                <tr v-for="(item, index) in wineData" :key="index">
                  <th scope="row" class="text-center align-middle col-2 border-dark border-bottom border-end" style="background-color: transparent">{{ item.year }}</th>
                  <td class=" col-8 border-dark border-bottom" style="background-color: transparent">
                    <h2 class="wine-title">{{ item.title }}</h2>
                    <p class="wine-desc">{{ item.description }}</p>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-6 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. </div>
            <div class="col-12">
              <button @click="scrollToDegFrMap" class="col-5 btn btn-more text-white bgc-sections-accent">Дізнатись більше</button>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="gallery col-sm-12 d-flex justify-content-center">
              <img src="/storage/degustation-1.png" alt="map-1" class="img-1">
            </div>
            <div class="gallery col-sm-12 mt-3 d-flex justify-content-center">
              <div class="margin-3">
                <img src="/storage/degustation-2.png" alt="map-1" class="img-2">
              </div>
              <div class="ml-lg-3"  >
                <img src="/storage/degustation-3.png" alt="map-1" class="img-3">
              </div>
            </div>
          </div>
        </div>
        <span><hr class="bhr color-accent"></span>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'WinesMapSite',
  data() {
    return {
      wineData: [
        { year: 1970, title: "Colli Euganei Bianco Ca' Lustra 1970", description: "Барвиста пляшка вина з Марселю" },
        { year: 1980, title: "Colli Euganei Bianco Ca' Lustra 1980", description: "Барвиста пляшка вина з Марселю" },
        { year: 1990, title: "Colli Euganei Bianco Ca' Lustra 1990", description: "Барвиста пляшка вина з Марселю" },
      ],
    };
  },
  methods: {
    scrollToDegFrMap() {
      const currentPosition = window.scrollY;
      const newPosition = currentPosition + 1000;
      window.scrollTo({
        top: newPosition,
        behavior: 'smooth',
      });
    },
  }
}
</script>
<style scoped>
@media screen and (max-width: 768px) {
  button {
    padding: 10px 15px;
    font-size: 14px;
  }
}
@media screen and (max-width: 1200px) {
  .gallery {
    display: flex;
    justify-content: start !important;
  }

}
</style>
<style>

@media screen and (max-width: 576px) {
  .img-1 {
    width: 300px;
    height: 100%;
  }
  .img-2 {
    width: 135px;
    height: 100%;
  }
  .img-3 {
    width: 135px;
    height: 100%;
  }
}

.map {
  padding-top: 80px;
  padding-bottom: 70px;
}

.wine-category, .wine-data, .wine-receipt, .wine-title {
  font-family: 'Playfair Display', serif;
}

.wine-category {
  margin-top: 30px;
}
.wine-data {
  margin-top: 30px;
}
.wine-table {
  margin-top: 20px;
}
.wine-title {
  font-size: 18px;
}
.btn-more {
  margin-top: 39px;
}
.bhr {
  margin-top: 50px;
}
.gallery {
  margin-top: 30px;
}
.margin-3 {
  margin-right: 30px;
}
</style>