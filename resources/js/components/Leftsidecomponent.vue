<template>
    <div class="left-side pos-lg-fixed d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img :src="bannerUrl" class="mh-100">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            bannerUrl: ''
        }
    },
     created: function() {
         axios.get('http://localhost:9001/api/programs/1')
         .then( res => {
             this.bannerUrl = res.data.banner;
         })
     }
}
</script>