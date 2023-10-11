<div style="height: 100vh; min-height: 660px">
  <div class="columns is-gapless is-full-height">
    {{-- columna 1 --}}
    <div class="column is-6">
      {{-- primera división --}}
      <div class="lets-talk is-flex is-flex-direction-column is-justify-content-space-between has-background-primary has-padding-top-10 has-padding-left-40 has-padding-bottom-40 has-padding-right-40">
        <a href="https://www.katherineboean.info">
          <img src="@asset('images/logo.svg')" alt="logo" style="width: 32%; min-width: 200px;">
        </a>
        <div class="has-text-white columns m-0 is-mobile" style="height: 60%">
          <div class="column is-1 has-padding-left-10">
            <span class="has-margin-top-20 is-flex is-justify-content-flex-end rotate-270deg" style="text-wrap: nowrap;">Financial Literacy Specialist</span>
          </div>
          <div class="middle-column column is-8 is-offset-2-desktop is-offset-1-mobile" style="width: max-content">
            <span>Business Consultant</span>
            <h1 class="is-size-1">Let's</h1>
            <div class="is-flex">
              @include('partials.decorator', ['color'=>'rgb(0,37,61)'])
              <h3 class="is-size-3 has-margin-left-30">talk</h3>
            </div>
          </div>
        </div>
        <div class="has-text-align-right">
          <a href="https://www.katherineboean.info" class="has-padding-right-20 has-text-hover-light" style="text-wrap: nowrap;">Schedule a meeting</a>
        </div>
      </div>
      {{-- segunda división --}}
      <div class="services columns is-multiline is-gapless is-marginless has-background-dark">
        <div class="column-image column is-7 is-paddingless">
          <div class="is-full-height" style="background: url(@asset('images/Rectangle-image.svg'))center center/cover no-repeat; opacity:0.5"></div>
        </div>
        <div class="column column-services is-5 is-clipped" x-data="data">
          <div class="has-text-light has-padding-30 is-full-height is-flex is-flex-direction-column is-justify-content-space-between carrusel active" id="carrusel">
            <p class="is-size-3 has-text-right is-flex is-justify-content-flex-end">
              <span>0</span>
              <span  x-text="item.id">1</span>
            </p>
            <div>
              <h4 class="is-size-4 has-text-light" x-text="item.titulo">NXTVISOR</h4>
              <div class="is-flex is-align-items-center is-half-width has-padding-top-5 has-padding-bottom-10">
                @include('partials.decorator', ['color'=>'#F2F2F2'])
              </div>
              <p class="is-size-6" x-text="item.mensaje">We guide around strengthening and implementing financial strategies for business owners, start-ups and enterprises.</p>
            </div>
          </div>   
        </div>
        <script>
          function data() {
            return {
              information: [
                {
                  id: 01,
                  titulo: 'NXTVISOR',
                  mensaje: 'We guide around strengthening and implementing financial strategies for business owners, start-ups and enterprises.'
                },
                {
                  id: 02,
                  titulo: 'WF&F',
                  mensaje: 'A space to learn and encourage others based on faith and finances.'
                },
                {
                  id: 03,
                  titulo: 'HYC',
                  mensaje: 'Financial fundamentals that can be applied both personally and businesswise.'
                },
                {
                  id: 04,
                  titulo: 'GSG',
                  mensaje: 'Podcast created to amplify the voices of many through faith, finances, family, wellness, and also fun.'
                },
                {
                  id: 05,
                  titulo: 'KB Realty',
                  mensaje: 'Focused on real estate in the areas north of Atlanta.'
                },
              ],
              
              currentIndex: 0,
              get item(){
                return this.information[this.currentIndex];
                
              },
              init() {
                let carrusel = document.querySelector('#carrusel');
                carrusel.classList.add('start-animation')
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.information.length;
                  }, 4000);
                }
              }
            }
          
          
        </script>
      </div>
    </div>
    {{-- columna 2 --}}
    <div class="column is-5 has-background-white is-relative">
      <div class="is-relative" style="background: url(@asset('images/KATHERINE.svg')) center center / cover no-repeat; height: 100vh;"></div>
      <div class="contacts is-flex is-justify-content-space-around is-align-items-center is-full-width has-background-white"
           style="height: 100px; position: absolute; bottom: 0;">
        <a class="has-text-hover-primary" href="tel: +1 404 777 5857">+1 404 777 5857</a>
        <a class="has-text-hover-primary" href="https://www.google.com/maps/place/Atlanta,+Georgia,+EE.+UU./@33.7675434,-84.5849409,11z/data=!3m1!4b1!4m6!3m5!1s0x88f5045d6993098d:0x66fede2f990b630b!8m2!3d33.748752!4d-84.3876845!16zL20vMDEzeXE?hl=es&entry=ttu">Atlanta, EU</a>
      </div>
    </div>
    {{-- columna 3 --}}
    <div class="navigation column is-1 has-background-primary is-clipped">
      <a href="https://www.katherineboean.info" class="navigation-plus has-padding-20 has-background-dark is-flex is-justify-content-center is-align-items-center">
        <div class="plus-button image is-48x48" style="background: url(@asset('images/plus-circle.svg'))center center/contain no-repeat"></div>
      </a>
      <div class="items-row is-flex is-justify-content-space-around is-full-width has-text-align-center has-padding-top-30 has-padding-bottom-30-touch has-padding-bottom-100-desktop">
        <a class="has-text-hover-light" href="https://www.instagram.com/katherineboean/">Instagram</a>
        <a class="has-text-hover-light" href="email: hello@katherineboean.com">Email</a>
        <a class="has-text-hover-light" href="https://www.linkedin.com/in/katherine-boean/">Linkedin</a>
        <a class="has-text-hover-light" href="https://open.spotify.com/show/3pvnYmHXRIpUHVhFuY9GUW?utm_medium=share&utm_source=linktree">Spotify</a>
      </div>
    </div>
  </div>
</div>