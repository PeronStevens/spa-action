<template>        
    <div class="tab-pane" id="monograph" role="tabpanel" aria-labelledby="monograph-tab" >
        <div v-for="content in monographContent" :key="content.id" >
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
            monographContent: []
        }
    },

    created: function() {
        axios.get('http://localhost:9001/api/programs/1/monograph')
        .then( res => {            
            // console.log(res.data);
            this.monographContent = res.data; 
        })
        .catch(err => console.log(err));
    }
}
</script>