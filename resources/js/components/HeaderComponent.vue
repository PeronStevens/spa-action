<template>
    <header class="container-fluid pos-lg-fixed pos-t-0 pos-x-0 bg-white pb-2">
        <div class="d-flex pt-2 pt-md-3 justify-content-between">
            <div class="d-flex">
                <a href="http://dkbmed.com" class="align-self-center" target="_blank">
                    <img src="/images/dkbmed-logo-green-blue.png" alt="DKBmed" class="dkbmed-logo">
                </a>
                <div class="mb-0 ml-2 d-none d-sm-none d-md-inline-block align-self-end">
                    Closing Practice Gaps to<br>
                    Optimize Patient Care
                </div>
            </div>
            <div class="text-smaller">
                <div v-if="auth" >
                    <p class="strong em mb-1">Welcome, <br class="d-sm-none">  {{ firstName }}  </p>
                    <a href="/logout" class="btn btn-outline-secondary br-n d-none d-sm-block dkb_log_out">Sign Out</a>
                </div>
                <div v-else >
                    <p class="em mb-1">Log-in or register here</p>
                    <a href="/login" class="btn btn-dkb-green d-block br-n dkb_log_in">Sign On</a>
                </div>
            </div>
        </div>
        <div class="row mt-2 mt-md-3">
            <div class="col">
                <nav class="navbar navbar-expand-sm bg-dkb-navi">
                    <button class="navbar-bars btn btn-dkb-green br-n d-sm-none"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbar"
                            aria-controls="navbar"
                            aria-expanded="false"
                            aria-label="Menu">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav py-2 py-sm-0 mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://dkbmed.com/programs" target="_blank">ALL PROGRAMS</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#home" role="tab" >HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#cme" role="tab"  >CME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#faculty" role="tab"   >FACULTY</a>
                            </li>
                            <div v-show="auth" class="d-xs-block d-sm-none " >
                                <!-- Auth tabs ( Monograph, Webcast, Sign-out etc... )-->
                                <li class="nav-item">
                                    <a class="nav-link" href="http://dkbmed.com/programs" target="_blank">MONOGRAPH</a>
                                </li>  
                                <div class="dropdown-divider"></div>                                                              
                                <li class="nav-item">
                                    <a class="nav-link dkb_log_out" href="/logout">SIGN OUT</a>
                                </li>                                
                            </div>
                        </ul>
                    </div>
                    <form class="search-form" action="/search">
                        <div class="input-group">
                            <input type="text"
                                name="search"
                                class="form-control br-n bg-dkb-navi text-white border-left border-white"
                                placeholder="search...">
                            <div class="input-group-btn">
                                <button class="btn btn-dkb-green br-n" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    data: () => {
        return {
            auth: false,
            firstName: ""
        }
    },
    created: function() {
        this.auth      = this.$root.$data.auth
        this.firstName = this.$root.$data.firstName
        
    }
}
</script>