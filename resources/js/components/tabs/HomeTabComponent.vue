<template>        
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" >
        <!-- <div v-for="content in homeContent" :key="content.id"  >
            <p v-html="content.content" >{{ content }}</p>
        </div> -->

		<p>Asthma affects about <strong>20 million</strong> people in the United States and <strong>more than 300 million</strong> worldwide. </p>
        <p>Between 5% and 10% have severe asthma, which is refractory to medications that are usually effective for asthma that is not severe. But severe asthma is more than just difficult-to-treat asthma. Severe asthma differs from mild or moderate asthma in its characteristics and complex pathophysiology.</p>
        <p>This monograph will:</p>
        <ul>
            <li>Describe how the phenotypes and endotypes of severe asthma can be used to inform the delivery of effective treatment of this disease.</li>
            <li>Explain the mechanisms of action for newly introduced or emerging biologic medications that are targeted to the specific pathophysiology of severe asthma.</li>
            <li>Discuss how clinicians can practice personalized medical care by identifying and assessing biomarkers for severe asthma that guide selection of optimal therapeutic agents.</li>
            <li>Demonstrate optimal shared decision-making practices with patients for managing severe asthma.</li>
            <li>Illustrate this topic with a patient case from Nicholas S. Hill, MD, professor of medicine at Tufts University School of Medicine </li>
        </ul>

        <p v-if="!auth" >
            <a href="#" class="btn btn-yellow btn-lg dkb_log_in start-program-btn" data-toggle="none">Start Program</a>
        </p>				        
    </div>
</template>

<script>
export default {

    data: function() {
        return {
            // homeContent: []
            auth: false
        }
    },

    created: function() {
        this.auth = this.$root.$data.auth
        // axios.get('http://localhost:9001/api/programs/1/home')
        // .then( res => {            
        //     console.log(res.data);
        //     this.homeContent = res.data; 
        // })
        // .catch(err => console.log(err));
    }
}
</script>