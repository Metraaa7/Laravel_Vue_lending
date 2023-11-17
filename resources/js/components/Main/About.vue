<template>
  <div id="about">
    <section class="about bgc-sections-main">
      <div class="container">
        <div class="border card-wrapper d-flex justify-content-center flex-column">
          <h2 class="card-title d-flex justify-content-center">Найкращий смак, це смак багаторічного вина</h2>
          <span class="d-flex justify-content-center hr"><hr class="col-2"></span>
          <div class="col-12 d-flex justify-content-center">
            <div class="col-2"></div>
            <div class="col-8">
              <p class="card-text d-flex justify-content-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. Mauris dictumst risus pulvinar blandit elit. Vestibulum quam ultrices nascetur et viverra suscipit. Proin vitae aliquet leo aliquam amet rutrum. Lectus auctor purus ultrices enim ultrices. Augue fringilla tellus tortor orci ultrices sed. Viverra cras sapien, pellentesque viverra malesuada. Tellus dolor, eget vitae dignissim molestie eget sit duis. Vitae dui vel pretium euismod diam. Pellentesque amet, lacus, amet, quis risus. Pellentesque scelerisque nunc, orci aliquam quis.</p>
            </div>
            <div class="col-2"></div>
          </div>
          <div class="card-image d-flex justify-content-center">
            <img src="/storage/header.png" alt="about-img">
          </div>
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

<style>
  .about {
    padding-top: 100px;
    font-family: 'Montserrat', serif;
    padding-bottom: 100px;
  }
  .card-wrapper {
    padding: 75px 0;
  }
  .card-title {
    text-align: center;
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

  .card-image {
    margin-top: 55px;
  }

</style>