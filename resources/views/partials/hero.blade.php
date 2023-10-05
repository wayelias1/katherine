<div style="height: 100vh">
    <div class="columns is-gapless is-full-height">

      {{-- columna 1 --}}
      <div class="column is-6">

        {{-- primera division --}}
        <div class="lets-talk has-background-primary has-padding-top-10 has-padding-left-40 has-padding-bottom-40 has-padding-right-40">
          <a href="https://www.katherineboean.info">
            <img src="@asset('images/logo.svg')" alt="logo" style="width: 40%; min-width: 160px;">
          </a>  

          <div class="has-text-white columns m-0 is-mobile" style="height: 60%">
            <div class="column is-1 has-padding-left-10">
              <span class="is-flex is-justify-content-flex-end rotate-270deg" style="text-wrap: nowrap;">Financial Literacy Specialist</span>
            </div>
            <div class="column is-8 is-offset-2-desktop is-offset-1-mobile" style="width: max-content">
              <span>Business Consultant</span>
              <h1 class="is-size-1" style="line-height: 8.5rem">Let's</h1>
                <div class="is-flex">
                  @include('partials.decorator', ['color'=>'rgb(0,37,61)'])
                  <h3 class="is-size-3 has-margin-left-30" style="line-height: 5.5rem">talk</h3>
                </div>
            </div>
          </div>
          <div class="has-text-align-right">
            <span class="has-text-black" style="text-wrap: nowrap;">Schedule a meeting</span>
          </div>          
        </div>

        {{-- segunda division --}}
        <div class="services columns is-multiline is-gapless is-marginless has-background-dark">
          <div class="column is-7 is-paddingless">
            <div class="is-full-height" style="background: url(@asset('images/Rectangle-image.svg'))center center/cover no-repeat; opacity:0.5"></div>
          </div>
          <div class="column is-5 is-clipped">
            <template x-data="{ information: [] }" x-init="data()" x-for="item in information" :key="item.id">
              <div class="has-text-light has-padding-30 is-full-height is-flex is-flex-direction-column is-justify-content-space-between">
                <p class="is-size-3 has-text-right" x-text='item.id'></p>
                <div>
                  <h4 class="is-size-4 has-text-light" x-text='item.titulo'></h4>
                  <div class="is-flex is-align-items-center is-half-width">
                    @include('partials.decorator', ['color'=>'#F2F2F2'])
                  </div>
                  <p class="is-size-6" x-text='item.mensaje'></p>
                </div>
              </div>
            </template>
          </div>
          <script>
            function data(){  
              var information = [
                  {
                    id: 1,
                    titulo: 'NXTVISOR',
                    mensaje: 'We guide around strengthening and implementing financial strategies for business owners, start-ups and enterprises.'
                  },
                  {
                    id: 2,
                    titulo: 'WF&F',
                    mensaje: 'A space to learn and encourage others based on faith and finances.'
                  },
                  {
                    id: 3,
                    titulo: 'HYC',
                    mensaje: 'Financial fundamentals that can be applied both personally and businesswise.'
                  },
                  {
                    id: 4,
                    titulo: 'GSG',
                    mensaje: 'Podcast created to amplify the voices of many through faith, finances, family, wellness, and also fun.'
                  },
                  {
                    id: 5,
                    titulo: 'KB Realty',
                    mensaje: 'Focused on real estate in the areas north of Atlanta.'
                  },
                ]
                data().information.forEach((item, time) => {
                  setTimeout(() => {
                    item.id = item.id;
                    item.titulo = item.titulo;
                    item.mensaje = item.mensaje;
                    console.log(`id: ${item.id}, titulo: ${item.titulo}, mensaje: ${item.mensaje}`);
                  }, time * 2000);
                });
              }      
          </script>    
        </div>
      </div>

      {{-- columna 2 --}}
      <div class="column is-5 has-background-white is-relative">
        <div class="is-relative" style="background: url(@asset('images/KATHERINE.svg')) center center / cover no-repeat; height: 100vh;">
        </div>
        <div class="is-flex is-justify-content-space-around is-align-items-center is-full-width has-background-white" 
            style="height: 100px; position: absolute; bottom: 0;">
          <a class="has-text-black" href="tel: +1 404 777 5857">
            +1 404 777 5857
          </a>
          <a class="has-text-black" href="https://www.google.com/maps/place/Atlanta,+Georgia,+EE.+UU./@33.7675434,-84.5849409,11z/data=!3m1!4b1!4m6!3m5!1s0x88f5045d6993098d:0x66fede2f990b630b!8m2!3d33.748752!4d-84.3876845!16zL20vMDEzeXE?hl=es&entry=ttu">
            Atlanta, EU
          </a>
        </div>
      </div>

      {{-- columna 3 --}}
      <div class="navigation column is-1 has-background-primary" style="overflow: hidden">
        <div class="navigation-plus has-padding-20 has-background-dark is-flex is-justify-content-center is-align-items-center">
          <div class="image is-48x48" style="background: url(@asset('images/plus-circle.svg'))center center/contain no-repeat"></div>
        </div>
        <div class="items-row is-flex is-justify-content-space-around is-full-width has-text-align-center has-padding-top-30 has-padding-bottom-30">
          <a class="" href="https://www.instagram.com/katherineboean/">Instagram</a>
          <a class="" href="email: hello@katherineboean.com">Email</a>
          <a class="" href="https://www.linkedin.com/in/katherine-boean/">Linkedin</a>
          <a class="" href="https://open.spotify.com/show/3pvnYmHXRIpUHVhFuY9GUW?utm_medium=share&utm_source=linktree">Spotify</a>
        </div>
      </div>
    </div>
</div>