<template>
    <div class="d-block d-lg-none">
        <p class="text-left"><img class="small-banner" :src="mobileBannerUrl"></p>
        <div class="clearfix">
            <div class="col-xs-12" >
                {{ providedBy }}
            </div>
            <div class="col-xs-12">
                <p class="supported-by">
                    {{ supportedBy }}
                </p>
            </div>								
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            mobileBannerUrl: '',
            providedBy: '',
            supportedBy: ''
        }
    },
     created: function() {
         axios.get('http://localhost:9001/api/programs/1')
         .then( res => {

            //  console.log(res.data);

             this.mobileBannerUrl = res.data.mobile_banner;
             this.supportedBy     = res.data.supported_by,
             this.providedBy      = res.data.provided_by
         })
     }    
}
</script>