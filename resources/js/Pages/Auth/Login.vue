<template>
    <v-app>
        <v-row class="row">
            <div class="info d-none d-md-flex align-center justify-center col-lg-7 col-xl-6 col-12">
                <div class="container">
                    <div class="pa-10">
                        <div class="row justify-center">
                            <div class="col-xl-5 col-8">
                                <div><h2 class="display-1 white--text font-weight-medium">Elegant Design with unlimited
                                    features, built with love</h2><h6
                                    class="subtitle-1 mt-4 white--text op-5 font-weight-regular">Wrappixel helps
                                    developers
                                    to build organized and well-coded admin dashboards full of beautiful and feature
                                    rich
                                    modules.</h6>
                                    <button type="button"
                                            class="mt-4 text-capitalize v-btn v-btn--depressed v-btn--flat v-btn--outlined theme--light v-size--x-large white--text">
                                        <span class="v-btn__content">Learn More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-center col-lg-5 col-xl-6 col-12">
                <div class="container">
                    <div class="pa-7 pa-sm-12">
                        <div class="row">
                            <div class="col-lg-9 col-xl-6 col-12"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2xpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowODNFNEJCQjFEQzIxMUU3OERFRkU4NjlBMUU3RjM5RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5RDlBRDQ3QTg0NDExMUU3ODM2Nzk0NTIyNjExRUVBNCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5RDlBRDQ3OTg0NDExMUU3ODM2Nzk0NTIyNjExRUVBNCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjQwNDUyRjkxN0QwMjExRTdBMDg1OTk1ODJGNTVFMzcwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjQwNDUyRjkyN0QwMjExRTdBMDg1OTk1ODJGNTVFMzcwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+a5xIawAAAtZJREFUeNrsmEtIlFEUx520MRryUamtEzOIDKIghRZFjZtWQlaLoMdKjax1iyCidUnZRqIIsgcJ0aYX1SqjxyqqASFoG0UzJYHWMP0P/Ac+7J7r+WZuNsQc+OFw7nfP/fvde8937k0UCoWaSrZFNRVuVYH/vcA6l7Nj3SZL38WgF+wEm8Fq0MS2LPgAXoKH4D74OV/AqbevbALnMRFxDAyCFuWZNtINjoLP4AI4S/F/bYr3ggw46RHnspXsk2GM4AJrwSgY55sp1doYY5QxgwiUQDfBQMC1P8CYtSEEyrrpMw78FfwwPisxz5UrcA844mn/Ba6ANFgGloMUN5L4LvMZzYY4RkkCZZART/sk2AAOMJVMR9py9B0EXeCZJ85IJD3FEiippFVpk/WzDbwzTOV7sJ19XNbKsWIJTDLPuew52A9mYmyKGfaZVNoHOaZZYFrJc7KeDoHZEnbuLPu61mQLx4wl0GXjnLI/vo7gNtdejr87HM9Jor6mxO6NI3Cj4r/l8HWCF0wbDaSPvk5jDHVMTeAah09K7ycO/xllFzaxba49ZSzXLJgFNjp82TmppGg7POvOtVSmlYKhsdxiIRnwU5e0xtcE5hy+lPJfPvIIeaC8qVS51cyU4t/q8J1QpizLNkuM2AJfK/7dSurYAibAdzJBX8YYQ7WE61yMkn8X/txVEnWXkgsttha80Sp5lPwJ6xuUtfNFOcNcKnHDJNm3LsQUy2fpvNImU3cV1McYp559ukMeO6VQ/aS09YPHoN0wRjuf7Q99Ls7yRKZZD8utMSbraOpooG+Mz/QEPRdH7AbTwpBnXR0mxZJfpnPpQt4sDDNtWKw5pDirwDzXz8VKvpvJs+rd59k4C3c347Hr4B44znW5Ikbfbzw8SaL+yLuaJWA9kA/DqhACi7tbrjFOswpORy6PmiObpXh5JDn1DsXlPXnylPlTV0lWvcCsCvzX9luAAQARlpHG7ldESwAAAABJRU5ErkJggg==">
                                <h2 class="font-weight-bold mt-4 blue-grey--text text--darken-2">Sign in</h2><h6
                                    class="subtitle-1"> Don't have an account? <a href="#/pages/fullregister">Sign
                                    Up</a>
                                </h6>
                                <form novalidate="novalidate" action="/dashboards/analytical" class="v-form">
                                    <div
                                        class="v-input mt-4 v-input--has-state theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined error--text">
                                        <div class="v-input__control">
                                            <div class="v-input__slot">
                                                <fieldset aria-hidden="true">
                                                    <legend style="width: 0px;"><span>​</span></legend>
                                                </fieldset>
                                                <div class="v-text-field__slot"><label for="input-10"
                                                                                       class="v-label theme--light error--text"
                                                                                       style="left: 0px; right: auto; position: absolute;">E-mail</label><input
                                                    required="required" id="input-10" type="text"></div>
                                            </div>
                                            <div class="v-text-field__details">
                                                <div class="v-messages theme--light error--text" role="alert">
                                                    <div class="v-messages__wrapper">
                                                        <div class="v-messages__message">E-mail is required</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="v-input v-input--has-state theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined error--text">
                                        <div class="v-input__control">
                                            <div class="v-input__slot">
                                                <fieldset aria-hidden="true">
                                                    <legend style="width: 0px;"><span>​</span></legend>
                                                </fieldset>
                                                <div class="v-text-field__slot"><label for="input-13"
                                                                                       class="v-label theme--light error--text"
                                                                                       style="left: 0px; right: auto; position: absolute;">Password</label><input
                                                    required="required" id="input-13" type="password"></div>
                                                <div class="v-input__append-inner">
                                                    <div class="v-input__icon v-input__icon--append"><i
                                                        aria-hidden="true"
                                                        class="v-icon notranslate mdi mdi-eye-off theme--light error--text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="v-text-field__details">
                                                <div class="v-messages theme--light error--text" role="alert">
                                                    <div class="v-messages__wrapper">
                                                        <div class="v-messages__message">Password is required</div>
                                                    </div>
                                                </div>
                                                <div class="v-counter theme--light">0 / 10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-flex align-center mb-4 mb-sm-0">
                                        <div class="v-input theme--light v-input--selection-controls v-input--checkbox">
                                            <div class="v-input__control">
                                                <div class="v-input__slot">
                                                    <div class="v-input--selection-controls__input"><i
                                                        aria-hidden="true"
                                                        class="v-icon notranslate mdi mdi-checkbox-blank-outline theme--light"></i><input
                                                        aria-checked="false" id="input-17" role="checkbox"
                                                        type="checkbox"
                                                        required="required" value="">
                                                        <div class="v-input--selection-controls__ripple"></div>
                                                    </div>
                                                    <label for="input-17" class="v-label theme--light"
                                                           style="left: 0px; right: auto; position: relative;">Remember
                                                        me?</label></div>
                                                <div class="v-messages theme--light">
                                                    <div class="v-messages__wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto"><a href="javascript:void(0)" class="link">Forgot pwd?</a>
                                        </div>
                                    </div>
                                    <button type="button"
                                            class="mr-4 v-btn v-btn--block v-btn--contained v-btn--disabled theme--light v-size--default"
                                            submit="" disabled="disabled"><span class="v-btn__content">Sign In</span>
                                    </button>
                                </form>
                                <div class="text-center mt-6"><span
                                    class="mr-2 v-chip v-chip--no-color v-chip--pill theme--light v-size--default"><span
                                    class="v-chip__content"><div class="v-avatar v-avatar--left"
                                                                 style="height: 48px; min-width: 48px; width: 48px;"><button
                                    type="button"
                                    class="white--text v-btn v-btn--contained theme--light v-size--default blue lighten-1"><span
                                    class="v-btn__content"><i aria-hidden="true"
                                                              class="v-icon notranslate mdi mdi-twitter theme--light"></i></span></button></div>Twitter </span></span><span
                                    class="v-chip v-chip--no-color v-chip--pill theme--light v-size--default"><span
                                    class="v-chip__content"><div class="v-avatar v-avatar--left"
                                                                 style="height: 48px; min-width: 48px; width: 48px;"><button
                                    type="button"
                                    class="white--text v-btn v-btn--contained theme--light v-size--default teal lighten-2"><span
                                    class="v-btn__content"><i aria-hidden="true"
                                                              class="v-icon notranslate mdi mdi-github theme--light"></i></span></button></div>Github </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </v-row>
    </v-app>
</template>

<script>
export default {}
</script>

<style scoped>

</style>
