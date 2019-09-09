<template>
    <div class="right-side">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tab-content">
                        <mobile-banner-component></mobile-banner-component>                        

                        <monographtab-component></monographtab-component>


                        <hometab-component></hometab-component>
                        
                        <cmetab-component></cmetab-component>
                        <facultytab-component></facultytab-component>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            auth: false
        }
    },
    created: function() {
        this.auth = this.$root.$data.auth
    }
}
</script>