<template>
  <div id="app">
    <HeaderSite/>
    <AboutSite/>
    <WinesMapSite/>
    <DegustationSite/>
    <FooterSite/>
  </div>
</template>

<script>

import HeaderSite from "./Header/Header.vue";
import AboutSite from "./Main/About.vue";
import WinesMapSite from "./Main/WinesMap.vue";
import DegustationSite from "./Main/Degustation.vue";
import FooterSite from "./Footer/Footer.vue";
export default {
  name: 'App',
  components: {FooterSite, DegustationSite, WinesMapSite, AboutSite, HeaderSite},
}
</script>

<style>
#app {
  font-family: 'Playfair Display', serif;
  color: #FFFFFF;
  font-size: 13px;
}

.color-accent {
  color: #998431;
}

.bgc-section-2 {
  background-color: #E6E3C4;
}

.bgc-sections-main {
  background-color: #282828;
}

.bgc-sections-accent {
  background-color: #998431;
  border-radius: 0;
  padding: 18px 30px;

}

li
{
  list-style-type: none;
}

</style>
