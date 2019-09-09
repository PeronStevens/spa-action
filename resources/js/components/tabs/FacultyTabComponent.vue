<template>
    <div class="tab-pane" id="faculty" role="tabpanel" aria-labelledby="faculty-tab" >
        <h2>Faculty</h2>
        <div v-for="content in facultyContent" :key="content.id" >            
            <div v-for="c in content" :key="c.id" >
                <img align="left" :src="c.image" alt="testing" >
                <p>
                    {{c.first_name}} {{c.last_name}}
                </p>
                <p v-html="c.short_description" >
                    {{c.short_description}}
                </p>
                <p v-html="c.full_description">
                    {{c.full_description}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    data: function() {
        return {
            facultyContent: []
        }
    },

    created: function() {
        axios.get('http://localhost:9001/api/programs/1/faculty')
        .then( res => {
            console.log(res.data);
            this.facultyContent = res.data; 
        })
        .catch(err => console.log(err));
    }
}
</script>