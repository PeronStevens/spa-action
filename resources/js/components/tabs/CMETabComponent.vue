<template>
    <div class="tab-pane" id="cme" role="tabpanel" aria-labelledby="cme-tab" >
        <div v-for="content in cmeContent" :key="content.id" >
            <h3>{{ content.title }}</h3>
            <div v-html="content.content" ></div>
        </div>
    </div>
</template>

<script>
import { constants } from 'crypto';
export default {

    data: function() {
        return {
            cmeContent: []
        }
    },

    created: function() {
        axios.get('http://localhost:9001/api/programs/1/cme')
        .then( res => {            
            this.cmeContent = res.data; 
        })
        .catch(err => console.log(err));
    }
}
</script>