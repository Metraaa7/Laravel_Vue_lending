<template>
  <div id="footer">
    <section class="footer bgc-sections-accent">
      <div class="container">
        <div class="footer-menu">
          <ul class="row navbar d-flex justify-content-center m-0 p-0">
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Головна</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Каталог</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Постачальники</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Коллекції</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Дегустація</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Карта</a></li>
            <li class="col list-group-item cus border-bottom border-top d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">Контакти</a></li>
          </ul>
          <ul class="navbar max-footer-menu d-flex justify-content-center m-0 p-0">
            <li class="col nav-item border-bottom border-end d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">LE CORTE</a></li>
            <li class="col nav-item border-bottom border-end d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">+380 (050) 566 87 96</a></li>
            <li class="col nav-item border-bottom border-end"><a href="#" class="text-white text-decoration-none">
              <div class="d-flex justify-content-around align-items-center">
                <img src="/storage/bx_bxl-facebook.svg" alt="yt-img" class="icon">
                <img src="/storage/facebook.svg" alt="fc-img">
                <img src="/storage/twitter.svg" alt="tw-img">
              </div>
            </a></li>
            <li class="col nav-item border-bottom d-flex justify-content-center"><a href="#" class="text-white text-decoration-none">@LE-CORTE.UA</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'AboutSite',

}
</script>

<style scoped>
li {
  padding: 10px 0;
  display: flex;
  justify-content: center;
}

.cus a {
  padding: 0 10px;
}

@media screen and (max-width: 576px) {
 .max-footer-menu {
   display: block !important;
 }
  .nav-item {
    border-right: none !important;
  }

}
</style>

<style>
.footer {
  padding-top: 50px;
  font-family: 'Montserrat', serif;
  padding-bottom: 50px;
}

hr {
  color: #FFFFFF;
}

.icon {
  fill: white;
}

a{
  font-size: 10px;
}

.footer-menu {
  margin-top: 50px;
  margin-bottom: 50px;
}

</style>