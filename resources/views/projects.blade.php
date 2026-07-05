<x-layout>
    <x-slot name="addedCustomScript">
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="{{secure_asset('css/welcome.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital@0;1&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3a24dfb225.js" crossorigin="anonymous"></script>
    </x-slot>

    <div class="d-flex flex-column px-5 py-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link contact-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Code Projects</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link contact-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">3D Arts</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane text-light fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div id="carouselCodeExample" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselCodeExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselCodeExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselCodeExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselCodeExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselCodeExample" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item rounded-4 cust-car-prj active">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/CodingThumbnail/sea.jpg')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">OCEAN SIMULATION</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">My implementation of ocean simulation</p>
                                            <p class="archivo-exLight my-0">using Gerstner Waves from NVIDIA GPU Gems, Chapter 1</p>
                                            <p class="archivo-exLight my-0">Other sources includes fournier paper, Acerola channel, and Learnopengl.com</p>

                                            <div class="w-100 d-flex flex-row gap-3 gap-md-5">
                                                <a style="text-decoration: none;" href="https://youtu.be/E7AKhIDgMwE" class="archivo-exLight my-3">Youtube</a>
                                                <a style="text-decoration: none;" href="https://www.artstation.com/artwork/nJKB2K" class="archivo-exLight my-3">Artstation</a>
                                                <a style="text-decoration: none;" href="https://github.com/CrabAteMyPizza/Ocean-Simulation" class="archivo-exLight my-3">Github</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-5 px-md-5 cust-gap">
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 306 344.35" enable-background="new 0 0 306 344.35" xml:space="preserve">
                                                    <path fill="#00599C" d="M302.107,258.262c2.401-4.159,3.893-8.845,3.893-13.053V99.14c0-4.208-1.49-8.893-3.892-13.052L153,172.175
                                                        L302.107,258.262z"/>
                                                    <path fill="#004482" d="M166.25,341.193l126.5-73.034c3.644-2.104,6.956-5.737,9.357-9.897L153,172.175L3.893,258.263
                                                        c2.401,4.159,5.714,7.793,9.357,9.896l126.5,73.034C147.037,345.401,158.963,345.401,166.25,341.193z"/>
                                                    <path fill="#659AD2" d="M302.108,86.087c-2.402-4.16-5.715-7.793-9.358-9.897L166.25,3.156c-7.287-4.208-19.213-4.208-26.5,0
                                                        L13.25,76.19C5.962,80.397,0,90.725,0,99.14v146.069c0,4.208,1.491,8.894,3.893,13.053L153,172.175L302.108,86.087z"/>
                                                    <g>
                                                        <path fill="#FFFFFF" d="M153,274.175c-56.243,0-102-45.757-102-102s45.757-102,102-102c36.292,0,70.139,19.53,88.331,50.968
                                                            l-44.143,25.544c-9.105-15.736-26.038-25.512-44.188-25.512c-28.122,0-51,22.878-51,51c0,28.121,22.878,51,51,51
                                                            c18.152,0,35.085-9.776,44.191-25.515l44.143,25.543C223.142,254.644,189.294,274.175,153,274.175z"/>
                                                    </g>
                                                    <g>
                                                        <polygon fill="#FFFFFF" points="255,166.508 243.666,166.508 243.666,155.175 232.334,155.175 232.334,166.508 221,166.508 
                                                            221,177.841 232.334,177.841 232.334,189.175 243.666,189.175 243.666,177.841 255,177.841 	"/>
                                                    </g>
                                                    <g>
                                                        <polygon fill="#FFFFFF" points="297.5,166.508 286.166,166.508 286.166,155.175 274.834,155.175 274.834,166.508 263.5,166.508 
                                                            263.5,177.841 274.834,177.841 274.834,189.175 286.166,189.175 286.166,177.841 297.5,177.841 	"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" version="1.1" id="OpenGL" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 500" enable-background="new 0 0 1200 500" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path fill="#5586A4" d="M182.039,212.314c3.851-11.769,9.633-22.192,17.334-31.26c7.701-9.067,17.29-16.309,28.753-21.711
                                                                c11.464-5.404,24.814-8.111,40.046-8.111c15.226,0,28.577,2.708,40.04,8.111c11.463,5.402,21.052,12.644,28.753,21.711
                                                                c7.701,9.067,13.483,19.491,17.333,31.26c3.851,11.768,5.782,24.018,5.782,36.749s-1.931,24.986-5.782,36.754
                                                                c-3.85,11.769-9.632,22.192-17.333,31.261c-7.701,9.066-17.29,16.264-28.753,21.581c-11.463,5.311-24.814,7.976-40.04,7.976
                                                                c-15.231,0-28.582-2.664-40.046-7.976c-11.463-5.317-21.052-12.515-28.753-21.581c-7.701-9.068-13.483-19.492-17.334-31.261
                                                                c-3.851-11.768-5.776-24.023-5.776-36.754S178.189,224.082,182.039,212.314z M205.477,277.016
                                                                c2.513,9.165,6.459,17.412,11.842,24.741c5.379,7.332,12.284,13.223,20.718,17.677c8.427,4.452,18.47,6.673,30.135,6.673
                                                                c11.66,0,21.702-2.221,30.136-6.673c8.427-4.454,15.333-10.345,20.717-17.677c5.378-7.329,9.323-15.576,11.835-24.741
                                                                c2.512-9.166,3.769-18.461,3.769-27.886s-1.257-18.713-3.769-27.879c-2.512-9.166-6.458-17.412-11.835-24.747
                                                                c-5.385-7.328-12.29-13.218-20.717-17.671c-8.434-4.453-18.477-6.68-30.136-6.68c-11.665,0-21.707,2.227-30.135,6.68
                                                                c-8.434,4.454-15.339,10.344-20.718,17.671c-5.384,7.335-9.329,15.581-11.842,24.747c-2.512,9.165-3.762,18.454-3.762,27.879
                                                                S202.965,267.85,205.477,277.016z"/>
                                                            <path fill="#5586A4" d="M397.94,223.478v16.135h0.404c3.296-6.606,8.478-11.411,15.548-14.409
                                                                c7.07-2.997,14.84-4.496,23.324-4.496c9.419,0,17.625,1.69,24.618,5.07c6.988,3.38,12.795,7.945,17.429,13.699
                                                                c4.633,5.761,8.124,12.398,10.485,19.918c2.355,7.523,3.535,15.506,3.535,23.949c0,8.444-1.143,16.426-3.416,23.951
                                                                c-2.279,7.523-5.731,14.087-10.365,19.688c-4.633,5.601-10.447,10.017-17.435,13.236c-6.995,3.221-15.118,4.835-24.385,4.835
                                                                c-2.986,0-6.325-0.307-10.012-0.919c-3.692-0.621-7.341-1.614-10.952-2.996c-3.61-1.382-7.032-3.271-10.251-5.65
                                                                c-3.219-2.381-5.927-5.335-8.124-8.876h-0.404v61.471h-20.2V223.478H397.94z M469.637,265.815
                                                                c-1.49-5.292-3.755-10.011-6.81-14.156c-3.056-4.144-6.975-7.444-11.754-9.898c-4.785-2.455-10.383-3.683-16.803-3.683
                                                                c-6.742,0-12.46,1.308-17.157,3.917c-4.703,2.609-8.54,6.02-11.52,10.239c-2.979,4.219-5.132,9.018-6.464,14.391
                                                                c-1.332,5.371-1.995,10.818-1.995,16.338c0,5.835,0.7,11.474,2.115,16.919c1.407,5.454,3.642,10.245,6.698,14.391
                                                                c3.054,4.145,7.006,7.482,11.867,10.012c4.86,2.533,10.738,3.798,17.63,3.798c6.893,0,12.65-1.301,17.271-3.91
                                                                c4.621-2.609,8.346-6.062,11.167-10.362c2.816-4.293,4.854-9.202,6.11-14.729c1.25-5.527,1.881-11.202,1.881-17.036
                                                                C471.871,276.522,471.126,271.113,469.637,265.815z"/>
                                                            <path fill="#5586A4" d="M596.31,334.933c-9.129,6.748-20.61,10.121-34.461,10.121c-9.759,0-18.224-1.534-25.382-4.6
                                                                c-7.165-3.071-13.186-7.371-18.066-12.898c-4.879-5.526-8.54-12.125-10.977-19.804c-2.436-7.675-3.812-16.045-4.128-25.099
                                                                c0-9.055,1.414-17.344,4.254-24.87c2.834-7.524,6.811-14.05,11.931-19.577c5.119-5.527,11.185-9.819,18.192-12.891
                                                                c7.007-3.071,14.689-4.607,23.041-4.607c10.87,0,19.884,2.195,27.054,6.575c7.172,4.385,12.922,9.961,17.252,16.728
                                                                c4.331,6.772,7.329,14.155,8.983,22.148c1.654,8,2.323,15.612,2.008,22.841h-91.303c-0.158,5.212,0.467,10.153,1.881,14.828
                                                                c1.414,4.675,3.687,8.814,6.83,12.417c3.144,3.601,7.146,6.469,12.019,8.615c4.867,2.147,10.599,3.22,17.195,3.22
                                                                c8.477,0,15.428-1.917,20.844-5.761c5.416-3.843,8.988-9.683,10.718-17.529h19.821
                                                                C611.339,318.138,605.438,328.185,596.31,334.933z M591.416,258.53c-1.803-4.133-4.234-7.698-7.289-10.683
                                                                c-3.062-2.985-6.672-5.36-10.827-7.124c-4.16-1.764-8.749-2.646-13.767-2.646c-5.176,0-9.847,0.882-14.001,2.646
                                                                c-4.16,1.764-7.726,4.176-10.706,7.235c-2.98,3.065-5.334,6.631-7.058,10.689c-1.729,4.059-2.746,8.388-3.061,12.983H594.6
                                                                C594.283,267.035,593.223,262.668,591.416,258.53z"/>
                                                            <path fill="#5586A4" d="M648.387,223.478v18.905h0.379c8.369-14.446,21.645-21.675,39.818-21.675
                                                                c8.055,0,14.769,1.079,20.148,3.232c5.371,2.153,9.715,5.15,13.035,8.994c3.32,3.842,5.65,8.413,6.994,13.717
                                                                c1.338,5.305,2.014,11.184,2.014,17.641v78.395h-20.199V262.04c0-7.371-2.211-13.206-6.623-17.511
                                                                c-4.418-4.3-10.484-6.453-18.205-6.453c-6.146,0-11.469,0.926-15.963,2.77c-4.494,1.845-8.238,4.453-11.23,7.833
                                                                c-2.99,3.38-5.238,7.334-6.734,11.861c-1.502,4.533-2.248,9.486-2.248,14.865v67.279h-20.199V223.478H648.387z"/>
                                                            <path fill="#5586A4" d="M870.412,341.391c-9.121,3.757-18.332,5.639-27.623,5.639c-14.67,0-27.857-2.5-39.572-7.483
                                                                c-11.717-4.989-21.594-11.86-29.643-20.619c-8.049-8.752-14.217-19.04-18.51-30.858c-4.291-11.817-6.437-24.561-6.437-38.217
                                                                c0-14.001,2.141-27.004,6.42-39c4.281-11.991,10.434-22.451,18.463-31.383c8.031-8.932,17.897-15.932,29.605-21.015
                                                                c11.709-5.076,24.896-7.617,39.566-7.617c9.834,0,19.354,1.449,28.562,4.343c9.211,2.898,17.525,7.154,24.949,12.767
                                                                c7.422,5.613,13.545,12.533,18.373,20.755c4.83,8.228,7.785,17.665,8.857,28.323h-40.234
                                                                c-2.506-10.479-7.336-18.344-14.488-23.586c-7.158-5.243-15.83-7.864-26.02-7.864c-9.48,0-17.529,1.794-24.144,5.384
                                                                c-6.615,3.59-11.982,8.408-16.098,14.446c-4.115,6.044-7.107,12.915-8.98,20.619c-1.883,7.704-2.816,15.667-2.816,23.895
                                                                c0,7.883,0.939,15.543,2.82,22.982c1.883,7.438,4.881,14.136,8.996,20.089c4.115,5.951,9.488,10.719,16.115,14.309
                                                                c6.623,3.59,14.682,5.385,24.178,5.385c13.963,0,24.744-3.44,32.355-10.325c7.613-6.883,12.045-16.863,13.301-29.939h-42.381
                                                                V241.63h80.357v101.199h-26.738l-4.281-21.23C887.853,331.035,879.533,337.635,870.412,341.391z"/>
                                                            <path fill="#5586A4" d="M994.678,155.574v152.374h93.354v34.737H952.662V155.574H994.678z"/>
                                                        </g>
                                                        <path fill="#5586A4" d="M795.977,365.945c-64.285,38.205-160.568,59.951-267.996,59.951c-193.548,0-350.451-78.75-350.451-175.897
                                                            S334.433,74.102,527.981,74.102c107.822,0,204.496,22.149,268.783,60.593C726.594,70.282,600.779,25.022,456.926,25
                                                            C236.608,24.965,57.988,125.675,57.969,249.938C57.95,374.199,236.537,474.97,456.856,475
                                                            C600.137,475.024,725.625,429.908,795.977,365.945z"/>
                                                    </g>
                                                    <g>
                                                        <path fill="#5586A4" d="M1143.848,325.427c0,3.141-0.786,6.067-2.356,8.779c-1.57,2.712-3.711,4.85-6.423,6.412
                                                            c-2.712,1.563-5.639,2.345-8.779,2.345c-3.126,0-6.045-0.781-8.757-2.345c-2.712-1.562-4.854-3.7-6.424-6.412
                                                            c-1.571-2.712-2.355-5.639-2.355-8.779c0-3.126,0.784-6.048,2.355-8.769c1.57-2.72,3.712-4.86,6.424-6.424
                                                            c2.712-1.562,5.631-2.344,8.757-2.344c3.141,0,6.067,0.781,8.779,2.344c2.712,1.564,4.853,3.704,6.423,6.424
                                                            C1143.062,319.379,1143.848,322.301,1143.848,325.427z M1140.446,325.427c0-3.907-1.383-7.244-4.148-10.01
                                                            c-2.767-2.766-6.103-4.148-10.009-4.148c-3.907,0-7.244,1.383-10.01,4.148c-2.766,2.766-4.148,6.103-4.148,10.01
                                                            c0,3.907,1.383,7.243,4.148,10.009c2.766,2.766,6.103,4.148,10.01,4.148c3.906,0,7.242-1.383,10.009-4.148
                                                            C1139.063,332.67,1140.446,329.334,1140.446,325.427z M1118.336,316.05h8.39c2.374,0,4.095,0.478,5.159,1.436
                                                            c1.064,0.957,1.598,2.24,1.598,3.85c0,1.256-0.406,2.344-1.218,3.264c-0.812,0.919-2.092,1.586-3.839,1.999
                                                            c0.72,0.276,1.249,0.567,1.586,0.873c0.475,0.43,0.973,1.065,1.494,1.908c0.03,0.061,1.041,1.87,3.034,5.424h-5.517
                                                            c-1.792-3.569-2.995-5.704-3.607-6.401c-0.614-0.696-1.227-1.046-1.84-1.046c-0.138,0-0.33,0.023-0.574,0.069v7.378h-4.666V316.05z
                                                            M1123.002,324.001h2.022c1.348,0,2.299-0.218,2.851-0.654c0.551-0.438,0.827-1,0.827-1.69c0-0.689-0.265-1.253-0.793-1.689
                                                            c-0.529-0.437-1.43-0.654-2.701-0.654h-2.206V324.001z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item rounded-4 cust-car-prj">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/CodingThumbnail/ecommerce.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">BUILDMARKET</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">An Ecommerce site that connects building material seller</p>
                                            <p class="archivo-exLight my-0">of all kinds of sizes. Equipped with Azure Blob for government papers</p>
                                            <p class="archivo-exLight my-0">verification, 3rd party payment, and shipping REST APIs</p>

                                            <div class="d-flex flex-row gap-5">
                                                <a style="text-decoration: none;" href="https://github.com/OOPKelompok6/Thesis_BuildMarket" class="archivo-exLight my-3">Github</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-auto px-md-5 px-0 px-md-5 gap-3 gap-md-5">
                                            <div class="d-flex my-auto svg-wrap">
                                                <i class="fa-brands std-icon-awe fa-laravel text-danger"></i>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="d-flex my-auto svg-wrap">
                                                <i class="fa-brands std-icon-awe fa-js text-warning"></i>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="d-flex my-auto svg-wrap">
                                                <i class="text-primary std-icon-awe fa-brands fa-bootstrap"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item rounded-4 cust-car-prj">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/CodingThumbnail/StockTicker.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">STOCK TICKER</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">A Stock ticker project for realtime market</p>
                                            <p class="archivo-exLight my-0">monitoring. Build using 3rd party API,</p>
                                            <p class="archivo-exLight my-0">SignalR, and WebSocket.</p>

                                            <a style="text-decoration: none;" href="https://github.com/OOPKelompok6/StockTicker" class="archivo-exLight my-3">Github</a>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-5 px-md-5 cust-gap">
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" viewBox="0 0 456 456" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="456" height="456" fill="#512BD4"/>
                                                    <path d="M81.2738 291.333C78.0496 291.333 75.309 290.259 73.052 288.11C70.795 285.906 69.6665 283.289 69.6665 280.259C69.6665 277.173 70.795 274.529 73.052 272.325C75.309 270.121 78.0496 269.019 81.2738 269.019C84.5518 269.019 87.3193 270.121 89.5763 272.325C91.887 274.529 93.0424 277.173 93.0424 280.259C93.0424 283.289 91.887 285.906 89.5763 288.11C87.3193 290.259 84.5518 291.333 81.2738 291.333Z" fill="white"/>
                                                    <path d="M210.167 289.515H189.209L133.994 202.406C132.597 200.202 131.441 197.915 130.528 195.546H130.044C130.474 198.081 130.689 203.508 130.689 211.827V289.515H112.149V171H134.477L187.839 256.043C190.096 259.57 191.547 261.994 192.192 263.316H192.514C191.977 260.176 191.708 254.859 191.708 247.365V171H210.167V289.515Z" fill="white"/>
                                                    <path d="M300.449 289.515H235.561V171H297.87V187.695H254.746V221.249H294.485V237.861H254.746V272.903H300.449V289.515Z" fill="white"/>
                                                    <path d="M392.667 187.695H359.457V289.515H340.272V187.695H307.143V171H392.667V187.695Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="vr"></div>
                                                <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                    <circle cx="50" cy="50" r="45" fill="#fff" stroke="#3c790a" stroke-width="10"/>
                                                    <path fill="#3c790a" d="M 66.23 62.237 L 74.235 62.237 L 74.235 43.019 L 65.218 34.002 L 59.557 39.661 L 66.23 46.334 L 66.23 62.237 Z M 74.254 66.249 L 62.597 66.249 L 46.336 66.249 L 39.662 59.577 L 42.492 56.746 L 48.005 62.259 L 59.345 62.259 L 48.173 51.066 L 51.024 48.215 L 62.196 59.387 L 62.196 48.046 L 56.706 42.556 L 59.514 39.747 L 45.639 25.808 L 31.954 25.808 L 31.954 25.808 L 17.763 25.808 L 25.746 33.791 L 25.746 33.812 L 25.788 33.812 L 42.304 33.812 L 48.153 39.661 L 39.599 48.215 L 33.751 42.365 L 33.751 37.825 L 25.746 37.825 L 25.746 45.68 L 39.599 59.535 L 33.961 65.174 L 42.978 74.192 L 56.662 74.192 L 82.238 74.192 L 82.238 74.192 L 74.254 66.249 Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item rounded-4 cust-car-prj">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/CodingThumbnail/GameOfLife.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">CONWAY GAME OF LIFE</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">A life demo of Mathematician John Conway Game of Life.</p>
                                            <p class="archivo-exLight my-0">System uses Javascript canvas system.</p>
                                            <p class="archivo-exLight my-0">Built using Javascript and Html.</p>

                                            <div class="d-flex flex-row gap-5">
                                                <a style="text-decoration: none;" href="https://crabatemypizza.github.io/Game_Of_life/" class="archivo-exLight my-3">Live Demo</a>
                                                <a style="text-decoration: none;" href="https://github.com/CrabAteMyPizza/Game_Of_life" class="archivo-exLight my-3">Github</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-5 px-md-5 cust-gap">
                                            <div class="d-flex my-auto svg-wrap">
                                                <i style="font-size: 3rem;" class="fa-brands fa-js text-warning"></i>
                                            </div>
                                            <div class="vr"></div>
                                                <div class="d-flex my-auto svg-wrap">
                                                    <i style="font-size: 3rem; color:#f06529;" class="fa-brands fa-html5"></i>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item rounded-4 cust-car-prj">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/CodingThumbnail/lissajous.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">LISSAJOUS VISUALIZER</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">A Lissajous table visualizer.</p>
                                            <p class="archivo-exLight my-0">Built using Javascript and WebGl.</p>

                                            <div class="d-flex flex-row gap-5">
                                                <a style="text-decoration: none;" href="https://crabatemypizza.github.io/Lissajous-Visualizer/" class="archivo-exLight my-3">Live Demo</a>
                                                <a style="text-decoration: none;" href="https://github.com/CrabAteMyPizza/Lissajous-Visualizer" class="archivo-exLight my-3">Github</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-5 px-md-5 cust-gap">
                                            <div class="d-flex my-auto svg-wrap">
                                                <i style="font-size: 3rem;" class="fa-brands fa-js text-warning"></i>
                                            </div>
                                            <div class="vr"></div>
                                                <div class="d-flex my-auto svg-wrap">
                                                <svg id="vlpa" version="1.1" viewBox="0 0 1082 452.3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><title>WebGL logo</title><desc>An open standard for hardware-accelerated web graphics by Khronos Group</desc><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata>
                                                    <g transform="translate(-64.6 -23.3)" fill="#900">
                                                        <polygon points="1114 318.1 1114 323.6 1106 323.6 1106 342.7 1100 342.7 1100 323.6 1092 323.6 1092 318.1"/>
                                                        <polygon points="1138 342.7 1138 324 1138 324 1133 342.7 1128 342.7 1122 324 1122 324 1122 342.7 1116 342.7 1116 318.1 1126 318.1 1130 334.5 1134 318.1 1144 318.1 1144 342.7"/>
                                                    </g>
                                                    <g transform="matrix(.9958 0 0 1 -57.13 -23.3)" fill="#900">
                                                        
                                                            <path d="m859.4 341.3c-9 3.8-18 5.7-27.1 5.7-14.4 0-27.4-2.5-38.9-7.5s-21.2-11.9-29.1-20.7-14-19.1-18.2-31-6.3-24.7-6.3-38.4c0-14.1 2.1-27.1 6.3-39.2s10.2-22.6 18.1-31.5c7.9-9 17.6-16 29.1-21.1s24.4-7.7 38.9-7.7c9.7 0 19 1.5 28 4.4s17.2 7.2 24.5 12.8 13.3 12.6 18 20.9 7.6 17.8 8.7 28.5h-39.4c-2.5-10.5-7.2-18.4-14.2-23.7s-15.5-7.9-25.6-7.9c-9.3 0-17.2 1.8-23.7 5.4s-11.8 8.4-15.8 14.5-7 13-8.8 20.7-2.8 15.7-2.8 24c0 7.9 0.9 15.6 2.8 23.1 1.8 7.5 4.8 14.2 8.8 20.2s9.3 10.8 15.8 14.4 14.4 5.4 23.7 5.4c13.7 0 24.3-3.5 31.8-10.4s11.8-16.9 13.1-30.1h-41.6v-31.1h78.9v101.7h-26.3l-4.2-21.3c-7.3 9.5-15.5 16.1-24.5 19.9z"/>
                                                            <path d="m981.5 154.6v153.1h91.7v34.9h-133v-188z"/>
                                                        
                                                        <path d="m786.3 366c-63.1 38.4-157.7 60.2-263.2 60.2-190.1 0-344.1-79.1-344.1-176.8 0-97.6 154.1-176.8 344.1-176.8 105.9 0 200.8 22.3 263.9 60.9-68.8-64.7-192.4-110.1-333.6-110.2-216.4 0-391.8 101.2-391.8 226.1s175.4 226.2 391.7 226.2c140.7 0 263.9-45.3 333-109.6z"/>
                                                    </g>
                                                    <g transform="translate(-61.6,-23.3)" fill="#900">
                                                        <polygon points="282.5 296.9 246.2 139.9 211.9 139.9 265.7 344.6 297.9 344.6 343.2 183.8 387.9 344.6 420.2 344.6 475.9 139.9 439.6 139.9 403.3 296.9 359.5 139.9 326.3 139.9"/>
                                                        <path d="m566.5 226.1c-5-7.1-11.3-12.5-18.7-16.2-7.6-3.8-16.4-5.7-26.2-5.7-11 0-20.9 2-29.5 5.9-8.1 3.7-15 9.2-20.6 16.3-10.3 13.1-15.7 31.6-15.7 53.5 0 9.7 1.4 18.9 4.1 27.1 2.7 8.3 6.8 15.6 12 21.7 11 12.8 26.7 19.6 45.4 19.6 9.8 0 17.8-1 24.5-3.1 5.8-1.8 9.7-4.2 12.9-6.3 4.1-2.7 7.8-6 11.2-9.8 2.8-3.3 5.3-6.9 7.5-10.8 3.8-7 5.7-13.6 6.1-17l0.3-2.3h-26.7l-0.1 1.9c-0.7 8.7-12.1 24.2-32.4 24.2-29 0-35.9-21-36.4-39.5h97.2v-2.1c0-11.9-1.2-22.8-3.6-32.3-2.7-9.9-6.4-18.3-11.3-25.1zm-48 2.1c21.5 0 33 11.6 35.1 35.4h-69.6c1.1-19.3 16.4-35.4 34.5-35.4z"/>
                                                        <path d="m715.7 245.7c-2.6-8.3-6.4-15.6-11.3-21.7-5.1-6.3-11.3-11.2-18.4-14.6-7.4-3.5-15.7-5.3-24.7-5.3-8.3 0.1-15.8 1.9-22.4 5.4-5.5 2.8-10.4 6.8-14.6 11.8v-62.8h-26.6v186h25.3v-12.7c2.2 2.9 5.1 6 8.9 8.7 7.2 5.2 16.1 7.8 26.4 7.8 11.1 0 21.1-2.5 29.5-7.4 7.5-4.4 13.9-10.7 18.9-18.7 4.4-7 7.7-15.3 9.9-24.6 1.9-8 2.9-16.8 2.9-25.4 0.1-9.3-1.2-18.3-3.8-26.5zm-23.9 30.2c0 14.6-2.9 26.8-8.5 35.4-5.9 9.1-14.5 13.7-25.5 13.7-15.9 0-34.5-11.1-34.5-42.5 0-15 1.9-26.6 5.7-35.4 5.5-12.7 14.8-18.8 28.3-18.8 14.4 0 24.1 5.6 29.5 17.3 4.4 9.6 5 21.3 5 30.3z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane text-light fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div id="carouselExample" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item rounded-4 cust-car-prj active">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/Jaguar/front.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">JAGUAR XJR9</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">My rendition of the 1988 Le Mans Winner,</p>
                                            <p class="archivo-exLight my-0">Jaguar XJR9. Naturaly aspirated V12 running for 24 hours.</p>
                                            <p class="archivo-exLight my-0">A tribute to iconic Group C automobiles.</p>

                                            <a style="text-decoration: none;" href="https://www.artstation.com/artwork/nJKB2K" class="archivo-exLight my-3">See more</a>
                                        </div>
                                        <div class="d-flex flex-row mb-3 mx-1 mx-md-auto px-md-5 px-0 px-md-5 gap-3 gap-md-5">
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" viewBox=".1 16.7 2472.8 1996.5" xmlns="http://www.w3.org/2000/svg"><path d="m2006.5 1485.6c-98.8 100.8-237 157.8-386.7 158-149.8.3-288.1-56.3-386.9-156.8-48.3-49-83.7-105.2-105.7-165.3-21.5-59-29.7-122.1-24.2-184.6 5.3-61 23.3-120.3 53-173.9 28.9-52.4 68.6-99.7 117.6-139.7 96-78.3 218.2-120.6 346.2-120.8s250.1 41.9 346.2 119.8c48.9 39.9 88.6 87 117.4 139.3 29.7 53.6 47.8 112.8 53.1 173.8 5.5 62.6-2.8 125.6-24.3 184.7-22 60-57.5 116.3-105.7 165.5z" fill="#fff"/>
                                                    <path d="m1300.4 1143.3c4.5-81.5 44.5-153.4 104.7-204.3 59.1-50.1 138.7-80.6 225.4-80.6 86.8.1 166.3 30.6 225.4 80.6 60.2 51 100.2 122.8 104.8 204.3 4.6 83.8-29.1 161.7-88.2 219.4-60.2 58.7-146 95.6-242 95.6s-181.9-36.9-242.1-95.6c-59-57.7-92.6-135.6-88-219.4z" fill="#005385"/>
                                                    <path d="m774.5 1308.3c.6 31.8 10.8 93.8 26 142.3 32.1 102.5 86.5 197.4 162.3 281 77.8 85.9 173.4 154.9 284 203.8 116.3 51.5 242.2 77.8 372.9 77.5 130.7-.2 256.6-26.9 372.8-78.8 110.5-49.5 206.1-118.7 283.8-204.8 75.7-84 130-179 162.1-281.5 16-51.1 26.3-103.8 30.5-157.1 4-52 2.3-104.4-5-156.1-14.4-101.4-49.5-196.5-103.5-283.2-49.5-79.6-113.1-149.4-188.8-208.2l.1-.1-763.8-586.4c-.6-.5-1.3-1.1-1.9-1.6-50.3-38.4-134.5-38.3-189.6.3-55.8 39-62.1 103.5-12.6 144.2l-.2.1 318.6 259.2-971.3 1h-1.3c-80.2.1-157.4 52.8-172.7 119.3-15.6 67.8 38.9 124 122.4 124.4l-.1.3 492.3-1-878.5 674.3c-1.1.9-2.3 1.7-3.3 2.5-82.8 63.4-109.6 169-57.5 235.8 53 67.9 165.6 68 249.4.3l479.4-392.3s-7 53-6.5 84.8zm1232 177.3c-98.8 100.8-237 157.8-386.7 158-149.8.3-288.1-56.3-386.9-156.8-48.3-49-83.7-105.2-105.7-165.3-21.5-59-29.7-122.1-24.2-184.6 5.3-61 23.3-120.3 53-173.9 28.9-52.4 68.6-99.7 117.6-139.7 96-78.3 218.2-120.6 346.2-120.8s250.1 41.9 346.2 119.8c48.9 39.9 88.6 87 117.4 139.3 29.7 53.6 47.8 112.8 53.1 173.8 5.5 62.6-2.8 125.6-24.3 184.7-22 60-57.5 116.3-105.7 165.5z" fill="#ff7021"/>
                                                </svg>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg class="svg-icon-prj" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.47 499.66">
                                                    <defs>
                                                        <style>.a{fill:#1e3101;}.b{fill:#99e83f;}</style>
                                                    </defs><title>adobe-substance-3d-painter</title>
                                                    <path class="a" d="M90.75,0h331a90.75,90.75,0,0,1,90.75,90.75V408.91a90.75,90.75,0,0,1-90.75,90.75h-331A90.75,90.75,0,0,1,0,408.91V90.75A90.75,90.75,0,0,1,90.75,0Z"/>
                                                    <path class="b" d="M110.85,350.39V130.71c0-1.6.68-2.4,2.06-2.4q5.49,0,13.06-.17t16.33-.35l18.57-.34q9.8-.18,19.42-.18,26.13,0,44,6.54A76.18,76.18,0,0,1,253,151.34a67.28,67.28,0,0,1,15.64,24.24,80.35,80.35,0,0,1,4.82,27.67q0,27.51-12.72,45.38a72,72,0,0,1-34.38,26,137.05,137.05,0,0,1-48.13,8.08q-7.57,0-10.66-.18c-2.06-.11-5.16-.17-9.28-.17v67.73a2.74,2.74,0,0,1-2.32,3.09,2.49,2.49,0,0,1-.77,0H113.25C111.65,353.14,110.85,352.23,110.85,350.39Zm47.44-180.83v71.17q4.46.35,8.25.34h11.34a81.19,81.19,0,0,0,24.58-3.44A37.11,37.11,0,0,0,220,226.29q6.7-7.9,6.7-22a34.81,34.81,0,0,0-5-18.9,32.14,32.14,0,0,0-15-12.21,63.8,63.8,0,0,0-25.09-4.29q-8.25,0-14.61.17t-8.77.51Z"/><path class="b" d="M401,319.11V347.3q0,3.78-2.75,4.47a122.82,122.82,0,0,1-13.75,3.44A88.75,88.75,0,0,1,368,356.58q-22.35,0-35.06-11.69t-12.72-37.47V222.16H299.92c-1.83,0-2.75-1-2.75-3.09V185c0-1.83,1-2.75,3.1-2.75h20.28q.34-5.84.86-13.58c.35-5.15.8-10.31,1.38-15.47s1.08-9.34,1.54-12.54a6.09,6.09,0,0,1,1-1.89,3.74,3.74,0,0,1,1.72-1.21L368,132.44a2.87,2.87,0,0,1,1.89.09c.46.23.52.83.52,2q-.69,7.91-1,21.49t-.69,26.29h32c1.38,0,2.07.92,2.07,2.75v34.73a2.12,2.12,0,0,1-1.72,2.4H368.34v73.57q0,11.7,4,16.68t14.61,5c2.06,0,4-.05,5.85-.17s3.66-.29,5.5-.52a2.21,2.21,0,0,1,1.89.17A2.44,2.44,0,0,1,401,319.11Z"/>
                                                </svg>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="d-flex my-auto svg-wrap">
                                                <svg
                                                class="svg-icon-prj"
                                                viewBox="0 0 25.612032 25.612"
                                                version="1.1"
                                                id="svg1"
                                                sodipodi:docname="gimp.svg"
                                                inkscape:version="1.3.2 (091e20ef0f, 2023-11-25)"
                                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:svg="http://www.w3.org/2000/svg">
                                                <sodipodi:namedview
                                                    id="namedview1"
                                                    pagecolor="#ffffff"
                                                    bordercolor="#cccccc"
                                                    borderopacity="1"
                                                    inkscape:showpageshadow="0"
                                                    inkscape:pageopacity="1"
                                                    inkscape:pagecheckerboard="0"
                                                    inkscape:deskcolor="#d1d1d1"
                                                    inkscape:document-units="mm"
                                                    inkscape:zoom="1.6461121"
                                                    inkscape:cx="42.220697"
                                                    inkscape:cy="-43.739427"
                                                    inkscape:window-width="1920"
                                                    inkscape:window-height="1131"
                                                    inkscape:window-x="0"
                                                    inkscape:window-y="32"
                                                    inkscape:window-maximized="1"
                                                    inkscape:current-layer="layer1" />
                                                <defs
                                                    id="defs1">
                                                    <clipPath
                                                    clipPathUnits="userSpaceOnUse"
                                                    id="clipPath385">
                                                    <path
                                                        style="display:none;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;paint-order:stroke markers fill"
                                                        d="m 1396.2684,724.37728 -0.098,-0.18359 -0.1474,-0.74504 1.6069,-1.36398 0.4734,-0.0196 0.4745,0.2836 -0.4773,-0.47034 -1.096,-0.22609 -1.1061,0.71625 -0.075,1.1693 0.3006,0.79854 z"
                                                        id="path386"
                                                        sodipodi:nodetypes="cccccccccccc" />
                                                    <path
                                                        id="lpe_path-effect386"
                                                        style="display:block;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;paint-order:stroke markers fill"
                                                        class="powerclip"
                                                        d="m 1390.8785,716.82155 h 13.5377 v 14.09705 h -13.5377 z m 5.3899,7.55573 -0.098,-0.18359 -0.1474,-0.74504 1.6069,-1.36398 0.4734,-0.0196 0.4745,0.2836 -0.4773,-0.47034 -1.096,-0.22609 -1.1061,0.71625 -0.075,1.1693 0.3006,0.79854 z" />
                                                    </clipPath>
                                                    <inkscape:path-effect
                                                    effect="powerclip"
                                                    id="path-effect386"
                                                    is_visible="true"
                                                    lpeversion="1"
                                                    inverse="true"
                                                    flatten="false"
                                                    hide_clip="false"
                                                    message="Use fill-rule evenodd on &lt;b&gt;fill and stroke&lt;/b&gt; dialog if no flatten result after convert clip to paths." />
                                                    <clipPath
                                                    clipPathUnits="userSpaceOnUse"
                                                    id="clipPath382">
                                                    <path
                                                        id="path382"
                                                        style="fill:none;fill-opacity:1;stroke:none;stroke-width:0.0863068;stroke-linecap:round;stroke-linejoin:round"
                                                        d="m 1399.06,725.88231 c 0.1487,0.27038 0.4395,-1.02899 0.3334,-1.93164 -0.2357,-2.00494 -2.3519,-2.57702 -3.0943,-1.78747 -0.6299,0.65669 -0.49,1.66327 0.01,2.26491 0.4952,0.60163 1.2521,0.61547 1.736,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                        sodipodi:nodetypes="ssczcs" />
                                                    </clipPath>
                                                </defs>
                                                <g
                                                    inkscape:label="Layer 1"
                                                    inkscape:groupmode="layer"
                                                    id="layer1"
                                                    transform="translate(-181.76867,-170.39167)">
                                                    <g
                                                    id="g1"
                                                    transform="translate(-5.0339185e-6,0.0329991)">
                                                    <path
                                                        id="path378"
                                                        style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none"
                                                        d="m 1399.06,725.8823 c 0.1487,0.27039 0.4395,-1.02898 0.3334,-1.93163 -0.2357,-2.00493 -2.3519,-2.57702 -3.0943,-1.78748 -0.6299,0.6567 -0.49,1.66328 0.01,2.26491 0.4952,0.60164 1.252,0.61548 1.7359,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                        sodipodi:nodetypes="ssczcss"
                                                        clip-path="url(#clipPath385)"
                                                        inkscape:path-effect="#path-effect386"
                                                        inkscape:original-d="m 1399.06,725.8823 c 0.1487,0.27039 0.4395,-1.02898 0.3334,-1.93163 -0.2357,-2.00493 -2.3519,-2.57702 -3.0943,-1.78748 -0.6299,0.6567 -0.49,1.66328 0.01,2.26491 0.4952,0.60164 1.252,0.61548 1.7359,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                        transform="translate(-1192.0575,-531.63232)" />
                                                    <path
                                                        d="m 206.4479,172.04496 c 0.029,0 0.056,0 0.081,0 0.099,0.016 0.2173,0.1222 0.2583,0.2424 0.041,0.1202 1.6717,8.3689 -0.6551,13.117 -2.3268,4.7481 -7.4741,6.1856 -10.4388,6.165 -4.9826,0.073 -9.31,-1.7057 -11.3004,-5.7598 2.1608,-0.073 2.8794,-2.1661 2.9145,-3.9088 0.011,-0.5378 0.8536,-6.3886 1.047,-6.6461 0.053,-0.065 0.1307,-0.032 0.1689,0.027 0.81,1.266 1.5553,1.9199 2.6484,2.5176 1.7368,0.7503 2.868,1.0257 5.4304,0.57 2.5627,-0.4557 6.7828,-1.9767 9.5501,-6.1304 0.1061,-0.1363 0.2093,-0.186 0.2961,-0.1958 z"
                                                        style="color:#000000;fill:#8c8073;fill-opacity:1;stroke-width:0.999988;stroke-linecap:round;-inkscape-stroke:none;paint-order:stroke fill markers"
                                                        id="path429-0" />
                                                    <ellipse
                                                        style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.388936;stroke-linecap:round;stroke-linejoin:round"
                                                        id="ellipse430-9"
                                                        cx="191.10779"
                                                        cy="181.94153"
                                                        rx="2.8563435"
                                                        ry="3.2004485" />
                                                    <ellipse
                                                        style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.401192;stroke-linecap:round;stroke-linejoin:round"
                                                        id="ellipse431-4"
                                                        cx="191.724"
                                                        cy="182.06018"
                                                        rx="1.7185632"
                                                        ry="2.0892863" />
                                                    <ellipse
                                                        style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.387617;stroke-linecap:round;stroke-linejoin:round"
                                                        id="circle431-6"
                                                        cx="191.7301"
                                                        cy="180.90564"
                                                        rx="0.7829693"
                                                        ry="0.78298879" />
                                                    <ellipse
                                                        style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.584723;stroke-linecap:round;stroke-linejoin:round"
                                                        id="ellipse432-9"
                                                        cx="143.63785"
                                                        cy="216.02808"
                                                        rx="2.4320455"
                                                        ry="3.1360881"
                                                        transform="matrix(0.97889982,-0.20434075,0.20194198,0.97939749,0,0)" />
                                                    <ellipse
                                                        style="fill:#ffffff;stroke:none;stroke-width:0.595814;stroke-linecap:round;paint-order:stroke fill markers"
                                                        id="circle432-2"
                                                        cx="183.93652"
                                                        cy="180.63477"
                                                        rx="1.323804"
                                                        ry="1.323837" />
                                                    <path
                                                        d="m 200.3122,186.43436 c -0.1746,-0.1214 0.034,-0.3108 0.4112,-0.3241 0.2261,-0.01 0.5127,0.048 0.8132,0.2192 0.8086,0.462 0.8362,1.0306 0.5707,1.1541 -0.1857,0.086 -0.9024,-0.4493 -0.9024,-0.4493 0,0 -0.5222,-0.3422 -0.8927,-0.5999 z"
                                                        style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.0876773;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none"
                                                        id="path432-2"
                                                        sodipodi:nodetypes="cccccc" />
                                                    <path
                                                        style="color:#000000;fill:#000000;stroke-width:0.999988;-inkscape-stroke:none"
                                                        d="m 201.1061,186.57146 c -1.5937,2.2126 -4.031,3.5472 -8.0089,2.9837 -0.5193,-0.069 -0.9134,0.6153 1.4528,0.7119 2.9659,0.1206 5.5251,-0.7637 7.267,-3.1819 z"
                                                        id="path433-4"
                                                        sodipodi:nodetypes="ccscc" />
                                                    <path
                                                        d="m 200.7637,188.26616 c -0.6615,-0.2764 -1.5684,0.6625 -1.2246,0.9142 0.527,0.3379 2.3644,1.513 2.7517,1.7188 0.4496,0.2388 1.0919,-0.1876 1.0919,-0.1876 l 0.2005,-0.3768 c 0,0 -0.01,-0.7713 -0.4563,-1.0102 -0.2907,-0.1544 -1.5042,-0.6859 -2.3554,-1.0553 0,0 -0.01,0 -0.01,0 z"
                                                        style="fill:#f2840d;stroke-width:0.40666;stroke-linecap:round;stroke-linejoin:round"
                                                        id="path434-77" />
                                                    <path
                                                        id="path435-5"
                                                        style="fill:#bbbbbb;fill-opacity:1;stroke:none;stroke-width:0.0847624;stroke-linecap:round;stroke-linejoin:round"
                                                        d="m 202.8402,190.86926 c 0.084,0.2969 0.3796,0.1622 0.5591,0.2618 0.1794,0.1 0.2208,0.4219 0.5173,0.3365 0.2965,-0.085 0.6851,-0.7845 0.601,-1.0815 -0.084,-0.297 -0.3797,-0.162 -0.5591,-0.2617 -0.1793,-0.1 -0.2207,-0.4221 -0.5172,-0.3367 -0.2966,0.085 -0.6852,0.7846 -0.6011,1.0816 z"
                                                        sodipodi:nodetypes="zzzzzzz" />
                                                    <ellipse
                                                        style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.363585;stroke-linecap:round;stroke-linejoin:round"
                                                        id="ellipse435-8"
                                                        cx="197.40088"
                                                        cy="181.94885"
                                                        rx="3.7499065"
                                                        ry="3.8277867" />
                                                    <ellipse
                                                        style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.514703;stroke-linecap:round;stroke-linejoin:round"
                                                        id="ellipse436-1"
                                                        cx="198.30798"
                                                        cy="182.08923"
                                                        rx="2.3218393"
                                                        ry="2.5452883" />
                                                    <ellipse
                                                        style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.377451;stroke-linecap:round;stroke-linejoin:round"
                                                        id="circle436-2"
                                                        cx="198.30774"
                                                        cy="180.70233"
                                                        rx="0.99682391"
                                                        ry="0.99685425" />
                                                    <path
                                                        style="fill:#8c8073;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke markers fill"
                                                        d="m 1397.693,722.21492 c 0.1266,-0.20758 0.8185,0.0728 0.9692,0.18088 -0.2987,-0.48421 -1.8637,-1.10586 -2.563,-0.33574 -0.6993,0.77012 -0.055,2.09042 0.2073,2.43123 -0.077,-0.21189 -0.2301,-0.81294 -0.069,-0.9281 0.1606,-0.11516 0.5326,0.53901 0.8382,0.35 0.3055,-0.18901 -0.2892,-0.71221 0.01,-0.95904 0.312,-0.247 0.7338,0.44411 0.9975,0.13324 0.2255,-0.27366 -0.5053,-0.68338 -0.3901,-0.87247 z"
                                                        id="path379"
                                                        sodipodi:nodetypes="sczczcccss"
                                                        clip-path="url(#clipPath382)"
                                                        transform="translate(-1192.0575,-531.63232)" />
                                                    </g>
                                                </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item rounded-4 cust-car-prj">
                            <div class="bg-light d-flex flex-column flex-lg-row h-100">
                                <div class="lg-layout-setting rounded-4">
                                    <img class="carousel-image" src="{{secure_asset('images/2049/threeQuarter.png')}}">
                                </div>
                                
                                <div class="w-100 d-flex flex-column my-auto mx-auto text-dark lg-layout-setting">
                                    <div class="d-flex flex-column px-5 py-5">
                                        <div class="d-flex mb-4 ms-lg-4">
                                            <h1 class="fw-bold archivo-regular em-project-h1-font">BLADERUNNER 2019 BLASTER</h1>
                                        </div>

                                        <div class="d-flex flex-column mb-4 ms-lg-4">
                                            <p class="archivo-exLight my-0">My rendition of Rick Deckard standard blaster</p>
                                            <p class="archivo-exLight my-0">Available in both high poly and low poly</p>
                                            <p class="archivo-exLight my-0">A tribute to cult classic movie</p>

                                            <a style="text-decoration: none;" href="https://www.artstation.com/artwork/nJKB2K" class="archivo-exLight my-3">See more</a>
                                        
                                            <div class="d-flex flex-row mb-3 mx-1 mx-md-auto px-md-5 px-0 px-md-5 gap-3 gap-md-5">
                                                <div class="d-flex my-auto svg-wrap">
                                                    <svg class="svg-icon-prj" viewBox=".1 16.7 2472.8 1996.5" xmlns="http://www.w3.org/2000/svg"><path d="m2006.5 1485.6c-98.8 100.8-237 157.8-386.7 158-149.8.3-288.1-56.3-386.9-156.8-48.3-49-83.7-105.2-105.7-165.3-21.5-59-29.7-122.1-24.2-184.6 5.3-61 23.3-120.3 53-173.9 28.9-52.4 68.6-99.7 117.6-139.7 96-78.3 218.2-120.6 346.2-120.8s250.1 41.9 346.2 119.8c48.9 39.9 88.6 87 117.4 139.3 29.7 53.6 47.8 112.8 53.1 173.8 5.5 62.6-2.8 125.6-24.3 184.7-22 60-57.5 116.3-105.7 165.5z" fill="#fff"/>
                                                        <path d="m1300.4 1143.3c4.5-81.5 44.5-153.4 104.7-204.3 59.1-50.1 138.7-80.6 225.4-80.6 86.8.1 166.3 30.6 225.4 80.6 60.2 51 100.2 122.8 104.8 204.3 4.6 83.8-29.1 161.7-88.2 219.4-60.2 58.7-146 95.6-242 95.6s-181.9-36.9-242.1-95.6c-59-57.7-92.6-135.6-88-219.4z" fill="#005385"/>
                                                        <path d="m774.5 1308.3c.6 31.8 10.8 93.8 26 142.3 32.1 102.5 86.5 197.4 162.3 281 77.8 85.9 173.4 154.9 284 203.8 116.3 51.5 242.2 77.8 372.9 77.5 130.7-.2 256.6-26.9 372.8-78.8 110.5-49.5 206.1-118.7 283.8-204.8 75.7-84 130-179 162.1-281.5 16-51.1 26.3-103.8 30.5-157.1 4-52 2.3-104.4-5-156.1-14.4-101.4-49.5-196.5-103.5-283.2-49.5-79.6-113.1-149.4-188.8-208.2l.1-.1-763.8-586.4c-.6-.5-1.3-1.1-1.9-1.6-50.3-38.4-134.5-38.3-189.6.3-55.8 39-62.1 103.5-12.6 144.2l-.2.1 318.6 259.2-971.3 1h-1.3c-80.2.1-157.4 52.8-172.7 119.3-15.6 67.8 38.9 124 122.4 124.4l-.1.3 492.3-1-878.5 674.3c-1.1.9-2.3 1.7-3.3 2.5-82.8 63.4-109.6 169-57.5 235.8 53 67.9 165.6 68 249.4.3l479.4-392.3s-7 53-6.5 84.8zm1232 177.3c-98.8 100.8-237 157.8-386.7 158-149.8.3-288.1-56.3-386.9-156.8-48.3-49-83.7-105.2-105.7-165.3-21.5-59-29.7-122.1-24.2-184.6 5.3-61 23.3-120.3 53-173.9 28.9-52.4 68.6-99.7 117.6-139.7 96-78.3 218.2-120.6 346.2-120.8s250.1 41.9 346.2 119.8c48.9 39.9 88.6 87 117.4 139.3 29.7 53.6 47.8 112.8 53.1 173.8 5.5 62.6-2.8 125.6-24.3 184.7-22 60-57.5 116.3-105.7 165.5z" fill="#ff7021"/>
                                                    </svg>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="d-flex my-auto svg-wrap">
                                                    <svg class="svg-icon-prj" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.47 499.66">
                                                        <defs>
                                                            <style>.a{fill:#1e3101;}.b{fill:#99e83f;}</style>
                                                        </defs><title>adobe-substance-3d-painter</title>
                                                        <path class="a" d="M90.75,0h331a90.75,90.75,0,0,1,90.75,90.75V408.91a90.75,90.75,0,0,1-90.75,90.75h-331A90.75,90.75,0,0,1,0,408.91V90.75A90.75,90.75,0,0,1,90.75,0Z"/>
                                                        <path class="b" d="M110.85,350.39V130.71c0-1.6.68-2.4,2.06-2.4q5.49,0,13.06-.17t16.33-.35l18.57-.34q9.8-.18,19.42-.18,26.13,0,44,6.54A76.18,76.18,0,0,1,253,151.34a67.28,67.28,0,0,1,15.64,24.24,80.35,80.35,0,0,1,4.82,27.67q0,27.51-12.72,45.38a72,72,0,0,1-34.38,26,137.05,137.05,0,0,1-48.13,8.08q-7.57,0-10.66-.18c-2.06-.11-5.16-.17-9.28-.17v67.73a2.74,2.74,0,0,1-2.32,3.09,2.49,2.49,0,0,1-.77,0H113.25C111.65,353.14,110.85,352.23,110.85,350.39Zm47.44-180.83v71.17q4.46.35,8.25.34h11.34a81.19,81.19,0,0,0,24.58-3.44A37.11,37.11,0,0,0,220,226.29q6.7-7.9,6.7-22a34.81,34.81,0,0,0-5-18.9,32.14,32.14,0,0,0-15-12.21,63.8,63.8,0,0,0-25.09-4.29q-8.25,0-14.61.17t-8.77.51Z"/><path class="b" d="M401,319.11V347.3q0,3.78-2.75,4.47a122.82,122.82,0,0,1-13.75,3.44A88.75,88.75,0,0,1,368,356.58q-22.35,0-35.06-11.69t-12.72-37.47V222.16H299.92c-1.83,0-2.75-1-2.75-3.09V185c0-1.83,1-2.75,3.1-2.75h20.28q.34-5.84.86-13.58c.35-5.15.8-10.31,1.38-15.47s1.08-9.34,1.54-12.54a6.09,6.09,0,0,1,1-1.89,3.74,3.74,0,0,1,1.72-1.21L368,132.44a2.87,2.87,0,0,1,1.89.09c.46.23.52.83.52,2q-.69,7.91-1,21.49t-.69,26.29h32c1.38,0,2.07.92,2.07,2.75v34.73a2.12,2.12,0,0,1-1.72,2.4H368.34v73.57q0,11.7,4,16.68t14.61,5c2.06,0,4-.05,5.85-.17s3.66-.29,5.5-.52a2.21,2.21,0,0,1,1.89.17A2.44,2.44,0,0,1,401,319.11Z"/>
                                                    </svg>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="d-flex my-auto svg-wrap">
                                                    <svg
                                                    class="svg-icon-prj"
                                                    viewBox="0 0 25.612032 25.612"
                                                    version="1.1"
                                                    id="svg1"
                                                    sodipodi:docname="gimp.svg"
                                                    inkscape:version="1.3.2 (091e20ef0f, 2023-11-25)"
                                                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:svg="http://www.w3.org/2000/svg">
                                                    <sodipodi:namedview
                                                        id="namedview1"
                                                        pagecolor="#ffffff"
                                                        bordercolor="#cccccc"
                                                        borderopacity="1"
                                                        inkscape:showpageshadow="0"
                                                        inkscape:pageopacity="1"
                                                        inkscape:pagecheckerboard="0"
                                                        inkscape:deskcolor="#d1d1d1"
                                                        inkscape:document-units="mm"
                                                        inkscape:zoom="1.6461121"
                                                        inkscape:cx="42.220697"
                                                        inkscape:cy="-43.739427"
                                                        inkscape:window-width="1920"
                                                        inkscape:window-height="1131"
                                                        inkscape:window-x="0"
                                                        inkscape:window-y="32"
                                                        inkscape:window-maximized="1"
                                                        inkscape:current-layer="layer1" />
                                                    <defs
                                                        id="defs1">
                                                        <clipPath
                                                        clipPathUnits="userSpaceOnUse"
                                                        id="clipPath385">
                                                        <path
                                                            style="display:none;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;paint-order:stroke markers fill"
                                                            d="m 1396.2684,724.37728 -0.098,-0.18359 -0.1474,-0.74504 1.6069,-1.36398 0.4734,-0.0196 0.4745,0.2836 -0.4773,-0.47034 -1.096,-0.22609 -1.1061,0.71625 -0.075,1.1693 0.3006,0.79854 z"
                                                            id="path386"
                                                            sodipodi:nodetypes="cccccccccccc" />
                                                        <path
                                                            id="lpe_path-effect386"
                                                            style="display:block;opacity:1;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;paint-order:stroke markers fill"
                                                            class="powerclip"
                                                            d="m 1390.8785,716.82155 h 13.5377 v 14.09705 h -13.5377 z m 5.3899,7.55573 -0.098,-0.18359 -0.1474,-0.74504 1.6069,-1.36398 0.4734,-0.0196 0.4745,0.2836 -0.4773,-0.47034 -1.096,-0.22609 -1.1061,0.71625 -0.075,1.1693 0.3006,0.79854 z" />
                                                        </clipPath>
                                                        <inkscape:path-effect
                                                        effect="powerclip"
                                                        id="path-effect386"
                                                        is_visible="true"
                                                        lpeversion="1"
                                                        inverse="true"
                                                        flatten="false"
                                                        hide_clip="false"
                                                        message="Use fill-rule evenodd on &lt;b&gt;fill and stroke&lt;/b&gt; dialog if no flatten result after convert clip to paths." />
                                                        <clipPath
                                                        clipPathUnits="userSpaceOnUse"
                                                        id="clipPath382">
                                                        <path
                                                            id="path382"
                                                            style="fill:none;fill-opacity:1;stroke:none;stroke-width:0.0863068;stroke-linecap:round;stroke-linejoin:round"
                                                            d="m 1399.06,725.88231 c 0.1487,0.27038 0.4395,-1.02899 0.3334,-1.93164 -0.2357,-2.00494 -2.3519,-2.57702 -3.0943,-1.78747 -0.6299,0.65669 -0.49,1.66327 0.01,2.26491 0.4952,0.60163 1.2521,0.61547 1.736,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                            sodipodi:nodetypes="ssczcs" />
                                                        </clipPath>
                                                    </defs>
                                                    <g
                                                        inkscape:label="Layer 1"
                                                        inkscape:groupmode="layer"
                                                        id="layer1"
                                                        transform="translate(-181.76867,-170.39167)">
                                                        <g
                                                        id="g1"
                                                        transform="translate(-5.0339185e-6,0.0329991)">
                                                        <path
                                                            id="path378"
                                                            style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none"
                                                            d="m 1399.06,725.8823 c 0.1487,0.27039 0.4395,-1.02898 0.3334,-1.93163 -0.2357,-2.00493 -2.3519,-2.57702 -3.0943,-1.78748 -0.6299,0.6567 -0.49,1.66328 0.01,2.26491 0.4952,0.60164 1.252,0.61548 1.7359,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                            sodipodi:nodetypes="ssczcss"
                                                            clip-path="url(#clipPath385)"
                                                            inkscape:path-effect="#path-effect386"
                                                            inkscape:original-d="m 1399.06,725.8823 c 0.1487,0.27039 0.4395,-1.02898 0.3334,-1.93163 -0.2357,-2.00493 -2.3519,-2.57702 -3.0943,-1.78748 -0.6299,0.6567 -0.49,1.66328 0.01,2.26491 0.4952,0.60164 1.252,0.61548 1.7359,0.72591 0.484,0.11044 0.8424,0.40566 1.0197,0.72829 z"
                                                            transform="translate(-1192.0575,-531.63232)" />
                                                        <path
                                                            d="m 206.4479,172.04496 c 0.029,0 0.056,0 0.081,0 0.099,0.016 0.2173,0.1222 0.2583,0.2424 0.041,0.1202 1.6717,8.3689 -0.6551,13.117 -2.3268,4.7481 -7.4741,6.1856 -10.4388,6.165 -4.9826,0.073 -9.31,-1.7057 -11.3004,-5.7598 2.1608,-0.073 2.8794,-2.1661 2.9145,-3.9088 0.011,-0.5378 0.8536,-6.3886 1.047,-6.6461 0.053,-0.065 0.1307,-0.032 0.1689,0.027 0.81,1.266 1.5553,1.9199 2.6484,2.5176 1.7368,0.7503 2.868,1.0257 5.4304,0.57 2.5627,-0.4557 6.7828,-1.9767 9.5501,-6.1304 0.1061,-0.1363 0.2093,-0.186 0.2961,-0.1958 z"
                                                            style="color:#000000;fill:#8c8073;fill-opacity:1;stroke-width:0.999988;stroke-linecap:round;-inkscape-stroke:none;paint-order:stroke fill markers"
                                                            id="path429-0" />
                                                        <ellipse
                                                            style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.388936;stroke-linecap:round;stroke-linejoin:round"
                                                            id="ellipse430-9"
                                                            cx="191.10779"
                                                            cy="181.94153"
                                                            rx="2.8563435"
                                                            ry="3.2004485" />
                                                        <ellipse
                                                            style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.401192;stroke-linecap:round;stroke-linejoin:round"
                                                            id="ellipse431-4"
                                                            cx="191.724"
                                                            cy="182.06018"
                                                            rx="1.7185632"
                                                            ry="2.0892863" />
                                                        <ellipse
                                                            style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.387617;stroke-linecap:round;stroke-linejoin:round"
                                                            id="circle431-6"
                                                            cx="191.7301"
                                                            cy="180.90564"
                                                            rx="0.7829693"
                                                            ry="0.78298879" />
                                                        <ellipse
                                                            style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.584723;stroke-linecap:round;stroke-linejoin:round"
                                                            id="ellipse432-9"
                                                            cx="143.63785"
                                                            cy="216.02808"
                                                            rx="2.4320455"
                                                            ry="3.1360881"
                                                            transform="matrix(0.97889982,-0.20434075,0.20194198,0.97939749,0,0)" />
                                                        <ellipse
                                                            style="fill:#ffffff;stroke:none;stroke-width:0.595814;stroke-linecap:round;paint-order:stroke fill markers"
                                                            id="circle432-2"
                                                            cx="183.93652"
                                                            cy="180.63477"
                                                            rx="1.323804"
                                                            ry="1.323837" />
                                                        <path
                                                            d="m 200.3122,186.43436 c -0.1746,-0.1214 0.034,-0.3108 0.4112,-0.3241 0.2261,-0.01 0.5127,0.048 0.8132,0.2192 0.8086,0.462 0.8362,1.0306 0.5707,1.1541 -0.1857,0.086 -0.9024,-0.4493 -0.9024,-0.4493 0,0 -0.5222,-0.3422 -0.8927,-0.5999 z"
                                                            style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.0876773;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none"
                                                            id="path432-2"
                                                            sodipodi:nodetypes="cccccc" />
                                                        <path
                                                            style="color:#000000;fill:#000000;stroke-width:0.999988;-inkscape-stroke:none"
                                                            d="m 201.1061,186.57146 c -1.5937,2.2126 -4.031,3.5472 -8.0089,2.9837 -0.5193,-0.069 -0.9134,0.6153 1.4528,0.7119 2.9659,0.1206 5.5251,-0.7637 7.267,-3.1819 z"
                                                            id="path433-4"
                                                            sodipodi:nodetypes="ccscc" />
                                                        <path
                                                            d="m 200.7637,188.26616 c -0.6615,-0.2764 -1.5684,0.6625 -1.2246,0.9142 0.527,0.3379 2.3644,1.513 2.7517,1.7188 0.4496,0.2388 1.0919,-0.1876 1.0919,-0.1876 l 0.2005,-0.3768 c 0,0 -0.01,-0.7713 -0.4563,-1.0102 -0.2907,-0.1544 -1.5042,-0.6859 -2.3554,-1.0553 0,0 -0.01,0 -0.01,0 z"
                                                            style="fill:#f2840d;stroke-width:0.40666;stroke-linecap:round;stroke-linejoin:round"
                                                            id="path434-77" />
                                                        <path
                                                            id="path435-5"
                                                            style="fill:#bbbbbb;fill-opacity:1;stroke:none;stroke-width:0.0847624;stroke-linecap:round;stroke-linejoin:round"
                                                            d="m 202.8402,190.86926 c 0.084,0.2969 0.3796,0.1622 0.5591,0.2618 0.1794,0.1 0.2208,0.4219 0.5173,0.3365 0.2965,-0.085 0.6851,-0.7845 0.601,-1.0815 -0.084,-0.297 -0.3797,-0.162 -0.5591,-0.2617 -0.1793,-0.1 -0.2207,-0.4221 -0.5172,-0.3367 -0.2966,0.085 -0.6852,0.7846 -0.6011,1.0816 z"
                                                            sodipodi:nodetypes="zzzzzzz" />
                                                        <ellipse
                                                            style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.363585;stroke-linecap:round;stroke-linejoin:round"
                                                            id="ellipse435-8"
                                                            cx="197.40088"
                                                            cy="181.94885"
                                                            rx="3.7499065"
                                                            ry="3.8277867" />
                                                        <ellipse
                                                            style="fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.514703;stroke-linecap:round;stroke-linejoin:round"
                                                            id="ellipse436-1"
                                                            cx="198.30798"
                                                            cy="182.08923"
                                                            rx="2.3218393"
                                                            ry="2.5452883" />
                                                        <ellipse
                                                            style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.377451;stroke-linecap:round;stroke-linejoin:round"
                                                            id="circle436-2"
                                                            cx="198.30774"
                                                            cy="180.70233"
                                                            rx="0.99682391"
                                                            ry="0.99685425" />
                                                        <path
                                                            style="fill:#8c8073;fill-opacity:1;stroke:none;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke markers fill"
                                                            d="m 1397.693,722.21492 c 0.1266,-0.20758 0.8185,0.0728 0.9692,0.18088 -0.2987,-0.48421 -1.8637,-1.10586 -2.563,-0.33574 -0.6993,0.77012 -0.055,2.09042 0.2073,2.43123 -0.077,-0.21189 -0.2301,-0.81294 -0.069,-0.9281 0.1606,-0.11516 0.5326,0.53901 0.8382,0.35 0.3055,-0.18901 -0.2892,-0.71221 0.01,-0.95904 0.312,-0.247 0.7338,0.44411 0.9975,0.13324 0.2255,-0.27366 -0.5053,-0.68338 -0.3901,-0.87247 z"
                                                            id="path379"
                                                            sodipodi:nodetypes="sczczcccss"
                                                            clip-path="url(#clipPath382)"
                                                            transform="translate(-1192.0575,-531.63232)" />
                                                        </g>
                                                    </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>