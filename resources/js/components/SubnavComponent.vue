<template>
    <div class="sub-nav pos-lg-fixed d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <ul class="nav nav-tabs nav-fill pb-2 bg-white no-bottom-border" role="tablist" >
                        <li class="nav-item">
                            <a :class="{ dkb_log_in: !auth }" class="nav-link start-program-btn btn btn-secondary"  id="monograph-tab" data-toggle="tab" :href="tabID" role="tab" aria-controls="monograph" aria-selected="true"> <span class="d-sm-none d-md-block" >MONOGRAPH</span><i class="d-sm-block d-md-none fab fa-readme"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="d-sm-none d-md-block" >HOME</span> <i class="d-sm-block d-md-none fas fa-home"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="true">
                                <span class="d-sm-none d-md-block" >FACULTY</span> <i class="d-sm-block d-md-none fas fa-users"></i>
                            </a>
                        </li>                              
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary" id="cme-tab" data-toggle="tab" href="#cme" role="tab" aria-controls="cme" aria-selected="true">
                                <span class="d-sm-none d-md-block">CME</span> <i class="d-sm-block d-md-none fas fa-file-contract"></i>
                            </a>
                        </li>                                        
                    </ul>
                </div>
            </div>
        </div>            
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            auth: false,
            tabID: ''
        }
    },
    created: function() {
        this.auth = this.$root.$data.auth

        if (this.auth) this.tabID = '#monograph';
    }
}
</script>

