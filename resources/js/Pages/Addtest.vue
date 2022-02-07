    <template>
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
        <form class="mt-8 space-y-6" @submit.prevent="submit">
            <div>
                <mylabel for="name" value="Test name:"></mylabel>
                <myinput v-bind:value="name" @input="name = $event.target.value" id="name" type="text" class="mt-1 block w-full"/>
            </div>

            <div>
                <mylabel for="description" value="Description"></mylabel>
                <myinput v-bind:value="description" @input="description = $event.target.value" id="description" type="text" class="mt-1 block w-full"/>
            </div>
            <div>
                <question_c  v-for="question in questions"
                                    :key="question.id"
                                    :question="question"
                                    v-on:remove="remove_question"
                                    v-on:add = "getquestion">
                    {{question}}
                </question_c>
            </div>
            <mybutton v-on:click="add_question" class="ml-4" >Add new question</mybutton>
            <mybutton class="ml-4" >Save Test</mybutton>
        </form>
            </div>
        </div>

    </template>

    <script>
        import mylabel from '@/Components/Label';
        import myinput from '@/Components/Input';
        import mybutton from '@/Components/Button';
        import question_c from '@/Components/add_question/question.vue';
        export default {
            data(){
              return {
                  name: '',
                  description:'',
                  questions:[],
              }

            },
            methods:{
                add_question(){
                    var new_question = {
                        id: Date.now(),
                        quest_name:"question123"
                    }
                    this.questions.push(new_question);
                },
                remove_question(question){
                    this.questions = this.questions.filter(p => p.id!== question.id )
                    console.log(question.id);
                },
                getquestion(value,id,question){
                    console.log(question.id);

                },
            },
            name: "addtest",
            components: {
                question_c,
                myinput,
                mylabel,
                mybutton,
            },
        }
    </script>

    <style scoped>

    </style>
