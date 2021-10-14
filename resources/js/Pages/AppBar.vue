<template>
    <div data-app="true" class="v-application v-application--is-ltr theme--light" id="app">

        <div class="v-application--wrap">
            <header-component></header-component>
            <section>
                <v-sheet>
                    <v-img :src="bg6"
                           gradient="to top, rgba(13, 3, 29, 0.85), rgba(25, 25, 38, 0.85)"

                           height="100vh">
                        <div class=" fill-height">
                            <v-responsive class="d-flex align-end  fill-height"
                                          style="height: 100%; width: 100%;">
                                <v-row class="align-end"
                                       style="height: 100%; width: 100%; margin: 0px !important;padding: 0px !important;">
                                    <v-col class="col-12 d-flex align-end flex-column pt-12"
                                           style="margin: 0px !important;padding: 0px !important;">
                                        <v-container class="px-5 pt-12 mt-12 d-flex align-center justify-center">
                                            <v-row class="align-end align-bottom">
                                                <v-col class="col-md-6 col-12">
                                                    <p :class="$vuetify.breakpoint.smAndDown?'display-1':'display-2'"
                                                       class="mb-4 text-left white--text">
                                                        ¿Qué es CaFe Producciones?
                                                    </p>
                                                    <p class="title font-weight-light mb-4 text-left white--text ">

                                                        Somos tu empresa de producción,
                                                        planificación
                                                        y acompañamiento
                                                        <span class="font-weight-bold">
                                                        para todo tipo evento
                                                        </span>
                                                    </p>
                                                    <v-btn class="primary--text font-weight-bold  mr-4 mb-1  white"
                                                           contained dark
                                                           outlined
                                                           rounded style="height: 50px;" target="_blank">
                                                        saber más
                                                    </v-btn>
                                                    <v-btn
                                                        class="font-weight-bold  mr-4 mb-1  v-btn--depressed white--text"
                                                        dark
                                                        outlined
                                                        rounded
                                                        style="height: 50px;" target="_blank">
                                                        Contáctenos
                                                    </v-btn>
                                                </v-col>
                                                <v-col v-if="$vuetify.breakpoint.mdAndUp"
                                                       class="col-md-6 col-12 d-flex align-end">
                                                    <v-img :src="require('../../images/logo CaFe Black Shadow.png')"
                                                           class="mt-12"
                                                           contain
                                                           style="min-height: 200px; max-width: 650px;height: 30vh">
                                                    </v-img>
                                                </v-col>
                                            </v-row>

                                        </v-container>
                                        <svg style="height: 100% !important; width:100% !important;"
                                             viewBox="0 0 1428 174"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                                <g fill="#FFFFFF" fill-rule="nonzero"
                                                   transform="translate(-2.000000, 44.000000)">
                                                    <path
                                                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                                        opacity="0.100000001"></path>
                                                    <path
                                                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                                        opacity="0.100000001"></path>
                                                    <path id="Path-4"
                                                          d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                                          opacity="0.200000003"></path>
                                                </g>
                                                <g fill="#FFFFFF" fill-rule="nonzero"
                                                   transform="translate(-4.000000, 76.000000)">
                                                    <path
                                                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </v-col>
                                </v-row>
                            </v-responsive>
                        </div>
                    </v-img>
                </v-sheet>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cum, cumque delectus harum illo
                    odio ratione rem repudiandae sit ullam voluptas voluptate? Atque eius iusto nam nihil nisi odio,
                    vitae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem, explicabo laudantium
                    minus non provident quis soluta sunt vel voluptatem. Aspernatur, cumque delectus nulla officiis
                    tempore ut. Consequatur, dolores, voluptates!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut eum natus odit repellendus.
                    Accusamus consequuntur deserunt est id iste nemo, nulla odio pariatur perferendis sed similique ut.
                    Alias, architecto!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem blanditiis culpa ea earum esse
                    eveniet fugit, modi necessitatibus omnis optio pariatur soluta sunt tenetur totam vel voluptate.
                    Amet, tempore?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis harum ipsa molestias
                    mollitia! Commodi doloremque eos fugit illo laborum, minima molestiae odio omnis quaerat quas,
                    tempore vero voluptate voluptatum!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eum hic molestiae, quam
                    ratione tempore vitae voluptas! Adipisci autem consequatur distinctio dolorum facere iste natus,
                    quod? Ipsum odit quae repellendus.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat in maiores
                    necessitatibus, obcaecati voluptate? Accusantium at, dolor illum nam neque nesciunt odit perferendis
                    quam sunt, unde vel voluptatibus!
                </p>
                <br/>
            </section>
            <header
                class="v-sheet v-sheet--tile theme--dark v-toolbar v-toolbar--flat v-app-bar v-app-bar--fixed transparent"
                data-booted="true"
                style="height: 64px; margin-top: 0px; transform: translateY(0px); left: 0px; right: 0px;">
                <div class="v-toolbar__content" style="height: 64px;">
                    <div class="v-responsive v-image shrink rounded-lg" style="max-width: 50%;">
                        <div class="v-responsive__sizer" style="padding-bottom: 21.5962%;"></div>
                        <v-img></v-img>
                        <div class="v-image__image v-image__image--contain rounded-lg"
                             style="background-image: url(images/logoCaFeCircular.png); background-position: center center;"></div>
                        <div class="v-responsive__content" style="width: 213px;"></div>
                    </div>
                    <div class="spacer"></div>
                    <div class="v-toolbar__items"><a href="#try-it"
                                                     class="v-btn v-btn--flat v-btn--text theme--dark v-size--default"><span
                        class="v-btn__content"> Try It </span></a></div>
                </div>
            </header>
            <main class="v-content white pt-0" data-booted="true" style="padding: 64px 0px 88px;">
                <div class="v-content__wrap">
                    <section id="home" class="pa-0">
                        <div class="v-responsive v-image white--text" style="height: 100vh;">
                            <div class="v-responsive__sizer" style="padding-bottom: 75%;"></div>
                            <div class="v-image__image v-image__image--cover"
                                 style="background-image: linear-gradient(to top, rgba(13, 3, 29, 0.85), rgba(25, 25, 38, 0.85)), url(images/6.jpg);background-position: center center;"></div>
                            <div class="v-responsive__content" style="width: 1440px;">
                                <div class="container fill-height">
                                    <div class="row pt-5 px-3 align-center">
                                        <div class="v-sheet theme--dark transparent" style="max-width: 500px;">
                                            <h1
                                                class="mb-4 display-2"> Supercharge your development </h1>
                                            <p class="title font-weight-light"> Improve your workflow and productivity
                                                with the most popular Material Framework for Vue,
                                                <strong>Vuetify</strong>. </p>
                                            <div class="py-4"></div>
                                            <div class="row ma-0 justify-md-start justify-center"><a href="#pricing"
                                                                                                     class="mr-md-3 my-2 v-btn v-btn--depressed v-btn--flat v-btn--outlined v-btn--rounded theme--dark v-size--large white--text"
                                                                                                     style="min-width: 175px;"><span
                                                class="v-btn__content"> Learn More </span></a><a href="#try-it"
                                                                                                 class="text--primary my-2 v-btn v-btn--contained v-btn--rounded theme--dark v-size--large white"
                                                                                                 style="min-width: 175px;"><span
                                                class="v-btn__content"> Sign up </span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="welcome">
                            <div class="section-header text-center mb-12">
                                <div class="text-uppercase caption mb-4 grey--text text--darken-2">Welcome</div>
                                <h2 class="display-1 font-weight-light">No Front-end Experience Required</h2>
                                <hr role="separator" aria-orientation="horizontal"
                                    class="mt-5 mb-4 mx-auto v-divider theme--light">
                                <p class="title font-weight-light mx-auto" style="max-width: 700px;">Find out why
                                    Vuetify is the #1 Material Library for the Vue Framework.</p></div>
                            <div class="container pt-5 px-0 pb-0">
                                <div class="v-responsive v-image mx-auto mb-5" style="height: 400px; max-width: 600px;">
                                    <div class="v-responsive__sizer" style="padding-bottom: 100%;"></div>
                                    <div class="v-image__image v-image__image--contain"
                                         style="background-image: url(&quot;https://alpha-saas.vuetifyjs.com/static/welcome-monitor.png&quot;); background-position: center center;"></div>
                                    <div class="v-responsive__content" style="width: 512px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-cellphone-link theme--light blue-grey--text"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">Responsive</h3>
                                                <p class="body-1 font-weight-light">Whether it's desktop, tablet or
                                                    mobile, your application will just work, right out of the box.</p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-cogs theme--light indigo--text"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">Customizable</h3>
                                                <p class="body-1 font-weight-light">Each component comes packed full of
                                                    customization features that allow you to handle any use-case.</p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-material-design theme--light teal--text"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">UI Kit</h3>
                                                <p class="body-1 font-weight-light">Built with Material Design, each
                                                    component is built precisely to match the specification.</p></div>
                                        </section>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-brush theme--light red--text text--lighten-2"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">Design</h3>
                                                <p class="body-1 font-weight-light">Easily built a custom designed
                                                    application from the ground up, no prior experience required.</p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-widgets theme--light deep-purple--text text--accent-4"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">Long-term Support</h3>
                                                <p class="body-1 font-weight-light">Feel confident in the life-span of
                                                    your product with major version long-term support.</p></div>
                                        </section>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <section class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                            <div class="col"><i aria-hidden="true"
                                                                class="v-icon notranslate mdi mdi-forum theme--light green--text"
                                                                style="font-size: 56px;"></i></div>
                                            <div class="col-md-10 col-12"><h3
                                                class="title font-weight-regular mb-3 mt-2">Support</h3>
                                                <p class="body-1 font-weight-light">Stuck? Take advantage of our active
                                                    community full of developers just like you.</p></div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="demo" class="py-5 primary darken-2 white--text">
                            <div class="container">
                                <div class="row text-md-left text-center align-center justify-center"><h3
                                    class="headline font-weight-light "> Want to see for yourself? Checkout our vast
                                    component options! </h3>
                                    <div class="spacer hidden-sm-and-down"></div>
                                    <a href="https://vuetifyjs.com/components/api-explorer" target="_blank"
                                       class="my-3 v-btn v-btn--contained v-btn--rounded theme--light v-size--large"
                                       rel="noopener" style="min-width: 128px;"><span class="v-btn__content"> Go to the Documentation </span></a>
                                </div>
                            </div>
                        </section>
                        <section id="features" class="grey lighten-3 px-3">
                            <div class="section-header text-center mb-12">
                                <div class="text-uppercase caption mb-4 grey--text text--darken-2">Features</div>
                                <h2 class="display-1 font-weight-light">The Last UI Kit You'll Ever Need</h2>
                                <hr role="separator" aria-orientation="horizontal"
                                    class="mt-5 mb-4 mx-auto v-divider theme--light">
                                <p class="title font-weight-light mx-auto" style="max-width: 700px;">With regular
                                    updates, dedicated support and an armada of components, there is a solution to any
                                    problem.</p></div>
                            <div class="container mt-5 pt-5 px-0 pb-0">
                                <div class="row align-center my-5" style="flex-direction: row;">
                                    <div class="hidden-sm-and-down col-md-6 col-12">
                                        <div class="mx-auto v-sheet theme--light" style="max-width: 400px;">
                                            <div class="v-responsive v-image" color="grey"
                                                 style="height: 300px; width: 100%;">
                                                <div class="v-responsive__sizer"
                                                     style="padding-bottom: 102.333%;"></div>
                                                <div class="v-image__image v-image__image--cover"
                                                     style="background-image: url(&quot;https://alpha-saas.vuetifyjs.com/static/feature-easy.png&quot;); background-position: center center;"></div>
                                                <div class="v-responsive__content" style="width: 600px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12"><h3 class="headline font-weight-regular mb-3 mt-2">Easy
                                        to get started</h3>
                                        <p class="body-1 font-weight-light">Maecenas vestibulum mollis diam. Etiam
                                            feugiat lorem non metus. Fusce pharetra convallis urna. Vestibulum turpis
                                            sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Duis leo.
                                            Phasellus accumsan cursus velit. Curabitur a felis in nunc fringilla
                                            tristique. Phasellus a est. Vestibulum dapibus nunc ac augue. Vestibulum
                                            facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod
                                            ligula urna in dolor.</p></div>
                                    <div order-xs="4" class="py-5 hidden-sm-and-down col col-12">
                                        <hr role="separator" aria-orientation="horizontal"
                                            class="v-divider theme--light">
                                    </div>
                                </div>
                                <div class="row align-center my-5" style="flex-direction: row-reverse;">
                                    <div class="hidden-sm-and-down col-md-6 col-12">
                                        <div class="mx-auto v-sheet theme--light" style="max-width: 400px;">
                                            <div class="v-responsive v-image" color="grey"
                                                 style="height: 300px; width: 100%;">
                                                <div class="v-responsive__sizer" style="padding-bottom: 81.676%;"></div>
                                                <div class="v-image__image v-image__image--cover"
                                                     style="background-image: url(&quot;https://alpha-saas.vuetifyjs.com/static/feature-community.png&quot;); background-position: center center;"></div>
                                                <div class="v-responsive__content" style="width: 895px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12"><h3 class="headline font-weight-regular mb-3 mt-2">Easy
                                        to get help</h3>
                                        <p class="body-1 font-weight-light">Maecenas vestibulum mollis diam. Etiam
                                            feugiat lorem non metus. Fusce pharetra convallis urna. Vestibulum turpis
                                            sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Duis leo.
                                            Phasellus accumsan cursus velit. Curabitur a felis in nunc fringilla
                                            tristique. Phasellus a est. Vestibulum dapibus nunc ac augue. Vestibulum
                                            facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod
                                            ligula urna in dolor.</p></div>
                                    <div order-xs="4" class="py-5 hidden-sm-and-down col col-12">
                                        <hr role="separator" aria-orientation="horizontal"
                                            class="v-divider theme--light">
                                    </div>
                                </div>
                                <div class="row align-center my-5" style="flex-direction: row;">
                                    <div class="hidden-sm-and-down col-md-6 col-12">
                                        <div class="mx-auto v-sheet theme--light" style="max-width: 400px;">
                                            <div class="v-responsive v-image" color="grey"
                                                 style="height: 300px; width: 100%;">
                                                <div class="v-responsive__sizer"
                                                     style="padding-bottom: 67.7507%;"></div>
                                                <div class="v-image__image v-image__image--cover"
                                                     style="background-image: url(&quot;https://alpha-saas.vuetifyjs.com/static/feature-build.png&quot;); background-position: center center;"></div>
                                                <div class="v-responsive__content" style="width: 738px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12"><h3 class="headline font-weight-regular mb-3 mt-2">Easy
                                        to build applications</h3>
                                        <p class="body-1 font-weight-light">Maecenas vestibulum mollis diam. Etiam
                                            feugiat lorem non metus. Fusce pharetra convallis urna. Vestibulum turpis
                                            sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Duis leo.
                                            Phasellus accumsan cursus velit. Curabitur a felis in nunc fringilla
                                            tristique. Phasellus a est. Vestibulum dapibus nunc ac augue. Vestibulum
                                            facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod
                                            ligula urna in dolor.</p></div><!----></div>
                            </div>
                        </section>
                        <section id="pricing" class="px-3">
                            <div class="section-header text-center mb-12">
                                <div class="text-uppercase caption mb-4 grey--text text--darken-2">Plans</div>
                                <h2 class="display-1 font-weight-light">Pricing</h2>
                                <hr role="separator" aria-orientation="horizontal"
                                    class="mt-5 mb-4 mx-auto v-divider theme--light">
                                <p class="title font-weight-light mx-auto" style="max-width: 700px;">Choose any of the
                                    following plans to get started with. You can begin with the FREE plan to see our web
                                    application at first. You can always change your plan at any time.</p></div>
                            <div class="container mt-5 pa-0">
                                <div class="row">
                                    <div class="text-center mb-5 col col-12">
                                        <div class="v-item-group theme--light v-btn-toggle v-btn-toggle--rounded">
                                            <button type="button"
                                                    class="v-btn v-btn--contained theme--light v-size--default"
                                                    style="min-width: 50%; max-height: 40px;"><span
                                                class="v-btn__content"> Monthly </span></button>
                                            <button type="button"
                                                    class="v-btn v-item--active v-btn--active v-btn--contained theme--light v-size--default"
                                                    style="min-width: 50%; max-height: 40px;"><span
                                                class="v-btn__content"> Yearly </span></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div
                                            class="v-card--plan text-center pb-3 v-card v-card--outlined v-sheet theme--light elevation-0">
                                            <header
                                                class="v-sheet v-sheet--tile theme--light v-toolbar v-toolbar--flat grey lighten-5"
                                                style="height: 64px;">
                                                <div class="v-toolbar__content" style="height: 64px;">
                                                    <div class="spacer"></div>
                                                    <div>Free</div>
                                                    <div class="spacer"></div>
                                                </div>
                                            </header>
                                            <div class="row">
                                                <div class="v-card--plan__price pa-5 col col-12">
                                                    <div class="d-inline-block"><sup>$</sup><span
                                                        class="display-3 font-weight-bold">0</span></div>
                                                    <span class="caption"> /yr </span></div>
                                            </div>
                                            <div class="v-card__text mb-4">
                                                <div>100+ Components</div>
                                                <div>Community Support</div>
                                                <div>Unlimited Projects</div>
                                            </div>
                                            <div class="v-card__text">
                                                <button type="button"
                                                        class="v-btn v-btn--depressed v-btn--tile theme--light v-size--default primary">
                                                    <span class="v-btn__content"> Get Started </span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div
                                            class="v-card--plan text-center pb-3 v-card v-sheet theme--light elevation-12">
                                            <header
                                                class="v-sheet v-sheet--tile theme--light v-toolbar v-toolbar--flat grey lighten-5"
                                                style="height: 64px;">
                                                <div class="v-toolbar__content" style="height: 64px;">
                                                    <div class="spacer"></div>
                                                    <div>Personal</div>
                                                    <div class="spacer"></div>
                                                </div>
                                            </header>
                                            <div class="row">
                                                <div class="v-card--plan__price pa-5 col col-12">
                                                    <div class="d-inline-block success--text"><sup>$</sup><span
                                                        class="display-3 font-weight-bold">199</span></div>
                                                    <span class="caption"> /yr </span></div>
                                            </div>
                                            <div class="v-card__text mb-4">
                                                <div>100+ Components</div>
                                                <div>Private Support</div>
                                                <div>Unlimited Projects</div>
                                            </div>
                                            <div class="v-card__text">
                                                <button type="button"
                                                        class="v-btn v-btn--depressed v-btn--tile theme--light v-size--default success">
                                                    <span class="v-btn__content"> Get Started </span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div
                                            class="v-card--plan text-center pb-3 v-card v-card--outlined v-sheet theme--light elevation-0">
                                            <header
                                                class="v-sheet v-sheet--tile theme--light v-toolbar v-toolbar--flat grey lighten-5"
                                                style="height: 64px;">
                                                <div class="v-toolbar__content" style="height: 64px;">
                                                    <div class="spacer"></div>
                                                    <div>Premium</div>
                                                    <div class="spacer"></div>
                                                </div>
                                            </header>
                                            <div class="row">
                                                <div class="v-card--plan__price pa-5 col col-12">
                                                    <div class="d-inline-block"><sup>$</sup><span
                                                        class="display-3 font-weight-bold">999</span></div>
                                                    <span class="caption"> /yr </span></div>
                                            </div>
                                            <div class="v-card__text mb-4">
                                                <div>Issue Resolution Priority</div>
                                                <div>On-Demand Support</div>
                                                <div>Unlimited Projects</div>
                                            </div>
                                            <div class="v-card__text">
                                                <button type="button"
                                                        class="v-btn v-btn--depressed v-btn--tile theme--light v-size--default primary">
                                                    <span class="v-btn__content"> Get Started </span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="try-it" class="grey lighten-3 px-3">
                            <div class="section-header text-center mb-12">
                                <div class="text-uppercase caption mb-4 grey--text text--darken-2">Check it out</div>
                                <h2 class="display-1 font-weight-light">Get Started Today</h2>
                                <hr role="separator" aria-orientation="horizontal"
                                    class="mt-5 mb-4 mx-auto v-divider theme--light">
                                <p class="title font-weight-light mx-auto" style="max-width: 700px;">Sign up for free
                                    and become one of the millions of people around the world who have fallen in love
                                    with TheSaaS.</p></div>
                            <div class="pa-4 mx-auto v-card v-card--outlined v-sheet theme--light"
                                 style="max-width: 500px;">
                                <form novalidate="novalidate" class="v-form">
                                    <div
                                        class="v-input theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined">
                                        <div class="v-input__control">
                                            <div class="v-input__slot">
                                                <fieldset aria-hidden="true">
                                                    <legend style="width: 0px;"><span>​</span></legend>
                                                </fieldset>
                                                <div class="v-text-field__slot"><label for="input-67"
                                                                                       class="v-label theme--light"
                                                                                       style="left: 0px; right: auto; position: absolute;">Name</label><input
                                                    id="input-67" type="text"></div>
                                            </div>
                                            <div class="v-text-field__details">
                                                <div class="v-messages theme--light">
                                                    <div class="v-messages__wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="v-input theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined">
                                        <div class="v-input__control">
                                            <div class="v-input__slot">
                                                <fieldset aria-hidden="true">
                                                    <legend style="width: 0px;"><span>​</span></legend>
                                                </fieldset>
                                                <div class="v-text-field__slot"><label for="input-70"
                                                                                       class="v-label theme--light"
                                                                                       style="left: 0px; right: auto; position: absolute;">Email</label><input
                                                    id="input-70" type="text"></div>
                                            </div>
                                            <div class="v-text-field__details">
                                                <div class="v-messages theme--light">
                                                    <div class="v-messages__wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button"
                                            class="v-btn v-btn--block v-btn--depressed v-btn--tile theme--light v-size--large success">
                                        <span class="v-btn__content"> Sign up </span></button>
                                </form>
                            </div>
                        </section>
                    </section>
                </div>
            </main>
            <footer class="v-footer elevation-12 v-sheet v-sheet--tile theme--light v-footer--absolute"
                    data-booted="true" style="height: 88px; left: 0px; right: 0px; bottom: 0px;">
                <div class="container py-0 container--fluid">
                    <div class="row fill-height align-center justify-start">
                        <div>
                            <div class="v-responsive v-image">
                                <div class="v-responsive__sizer" style="padding-bottom: 21.6981%;"></div>
                                <div class="v-image__image v-image__image--cover"
                                     style="background-image: url(&quot;https://alpha-saas.vuetifyjs.com/static/alpha-software-logo-dark.png&quot;); background-position: center center;"></div>
                                <div class="v-responsive__content" style="width: 212px;"></div>
                            </div>
                        </div>
                        <div class="spacer d-none d-md-block"></div>
                        <div class="caption pr-md-12"> ©2019. All rights reserved</div>
                    </div>
                </div>
            </footer>
            <button type="button"
                    class="v-btn v-btn--bottom v-btn--contained v-btn--fab v-btn--fixed v-btn--right v-btn--round theme--light v-size--small primary"
                    style="margin-bottom: 8px; transform-origin: center center; display: none;"><span
                class="v-btn__content"><i aria-hidden="true"
                                          class="v-icon notranslate mdi mdi-chevron-up theme--light"></i></span>
            </button>
        </div>
    </div>
</template>

<script>
import bg6 from '@/../images/bg/6.jpg';
import Header from '@/base/Header';

export default {
    name: "AppBar",
    components: {
        'header-component': Header,
    },
    data: () => ({
        bg6: bg6,
    })
}
</script>

<style scoped>

</style>
