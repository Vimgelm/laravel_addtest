<template>
    <div>
        <mylabel for="question" value="Question">{{question.quest_name}}</mylabel>
        <myinput v-on:input="addvalue($event.target.value,$event.target.id)" id="question" type="text" class="mt-1 block w-full"/>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer1" value="Answer A:"></mylabel>
        <div class="flex items-center">
            <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_1"/>
            <myinput v-on:input="addvalue($event.target.value,$event.target.id)"
                         id="answer1"
                         type="text"
                         class="mt-1 block w-full"/>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer2" value="Answer B:"></mylabel>
        <div class="flex items-center">
            <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_2"/>
            <myinput v-on:input="addvalue($event.target.value,$event.target.id)"
                 id="answer2"
                 type="text"
                 class="mt-1 block w-full"/>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer3" value="Answer C:"></mylabel>
        <div class="flex items-center">
            <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_3"/>
            <myinput v-on:input="addvalue($event.target.value,$event.target.id)"
                 id="answer3" type="text"
                 class="mt-1 block w-full"/>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer4" value="Answer D:"></mylabel>
        <div class="flex items-center">
            <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_4"/>
            <myinput v-on:input="addvalue($event.target.value,$event.target.id)"
                 id="answer4"
                 type="text"
                 class="mt-1 block w-full"/>
        </div>
        <mybutton v-on:click="$emit('remove',this.question)"
        >Delete question</mybutton>
    </div>




</template>

<script>
    import mylabel from '@/Components/Label';
    import myinput from '@/Components/Input';
    import mycheckbox from '@/Components/Checkbox';
    import mybutton from '@/Components/Button'
    export default {
        data(){
          return{
              question_value:'',
          }
        },
        props:{
            question:{
             type: Object,
             required: true,
            }
        },
        emits: ['remove','add']
        ,
        methods:{
          addvalue(value,el_id){
              this.$emit('add',value,el_id,this.question)
          },
        },
        name: "question",
        components: {
          mylabel,
            myinput,
            mycheckbox,
            mybutton
        },
    }
</script>

<style>

</style>
