<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-gray-100">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">RENTAMOVIES</span>
      <span class="block text-indigo-600">¡Empieza a ver y rentar peliculas online!</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Iniciar sesión </a>
      </div>
      <div class="ml-3 inline-flex rounded-md shadow">
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-900"> Registrarse </a>
      </div>
    </div>
  </div>
</div>
<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Próximos estrenos</h2><br><br><br><br>
    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="{{ route('login') }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://lumiere-a.akamaihd.net/v1/images/poster_oficial_thor_amor_y_trueno_e930d90e.jpeg?region=0,0,862,1078" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-m text-gray-700 font-semibold" align="center">THOR: AMOR Y TRUENO</h3>
      </a>

      <a href="{{ route('login') }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://es.web.img2.acsta.net/pictures/22/05/18/14/52/1524445.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-m text-gray-700 font-semibold" align="center">ELVIS</h3>
      </a>

      <a href="{{ route('login') }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://pics.filmaffinity.com/Dragon_Ball_Super_Super_Hero-181561937-large.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-m text-gray-700 font-semibold" align="center">DRAGÓN BALL SUPER HERO</h3>
      </a>

      <a href="{{ route('login') }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://pics.filmaffinity.com/Minions_El_origen_de_Gru-608394212-large.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-m text-gray-700 font-semibold" align="center">THE RISE OF GRU</h3>
      </a><br><br>
    </div>
  </div>
</div>
        <div class="pt-12">
            <footer id="footer" class="relative z-50 dark:bg-gray-900">
                <div tabindex="0" aria-label="footer" class="focus:outline-none border-t border-b border-gray-200 dark:border-gray-800 py-16">
                    <div class="mx-auto container px-4 xl:px-12 2xl:px-4">
                        <div class="lg:flex">
                            <div class="w-full lg:w-1/2 mb-16 lg:mb-0 flex">
                                <div class="w-full lg:w-1/2 px-6">
                                    <ul>
                                        <li><a class="focus:outline-none focus:underline  text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Components</a></li>
                                        <li class="mt-6"><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Templates</a></li>
                                        <li class="mt-6"><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Pricing</a></li>
                                        <li class="mt-6"><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">FAQ</a></li>
                                        <li class="mt-6"><a href="javascript:void(0)" class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50">Documentation</a></li>
                                    </ul>
                                </div>
                                <div class="w-full lg:w-1/2 px-6">
                                    <ul>
                                        <li><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Free components</a></li>
                                        <li class="mt-6"><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Blog</a></li>
                                        <li class="mt-6"><a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Changelog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 flex">
                                <div class="w-full lg:w-1/2 px-6">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="focus:underline focus:outline-none text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50">Privacy policy</a></li>
                                        <li class="mt-6"><a class="focus:underline focus:outline-none text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50" href="javascript:void(0)">Terms of service</a></li>
                                    </ul>
                                </div>
                                <div class="w-full lg:w-1/2 px-6 flex flex-col justify-between">
                                    <div class="flex items-center mb-6">
                                        <a  aria-label="Github" href="javascript:void(0)">
                                            <div class="text-gray-800 dark:text-gray-50 cursor-pointer hover:text-brand dark:hover:text-brand">
                                               <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg1.svg" alt="Github">
                                               <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg1dark.svg" alt="Github">
                                            </div> </a
                                        ><a aria-label="Twitter"  href="javascript:void(0)" class="ml-4">
                                            <div class="">
                                               <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg2.svg" alt="Twitter">
                                               <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg2dark.svg" alt="Twitter">
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-16 flex flex-col justify-center items-center">
                    <a class="focus:outline-none" tabindex="0" role="link" aria-label="home link" href="javascript:void(0)"
                        >
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg7.svg" alt="tuk logo">
                        <img class="dark:block hidden" src="https://cdn.discordapp.com/attachments/990027599776481292/992210888272642161/unknown.png" alt="tuk logo">
                    </a>
                    <p tabindex="0" class="focus:outline-none mt-6 text-xs lg:text-sm leading-none text-gray-900 dark:text-gray-50">2022 RentaMovies. Todo derecho reservado.</p>
                </div>
            </footer>
        </div>
        
    
            

        
            
        
        
