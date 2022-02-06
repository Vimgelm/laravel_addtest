    <template>
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
        <form class="mt-8 space-y-6" @submit.prevent="submit">
            <div>
                <mylabel for="name" value="Test name:"></mylabel>
                <myinput id="name" type="text" class="mt-1 block w-full"/>
            </div>
            <div>
                <mylabel for="description" value="Description"></mylabel>
                <myinput id="description" type="text" class="mt-1 block w-full"/>
            </div>
            <question v-for="quest in questions" v-bind="questions">
                {{quest}}
            </question>
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
        import question from '@/Components/add_question/question.vue';
        export default {
            data(){
              return {
                  questions: [
                      {id:'1',name:'asdfas'},
                      {id:'2', name: 'asddasa'}
                  ]

              }
            },
            methods:{
                add_question(){
                    this.questions.push ={
                        id: '23',
                        name:'123asds',
                    }
                    console.log(this.questions);

                }
            },
            name: "addtest",
            components: {
                question,
                myinput,
                mylabel,
                mybutton,
            },
        }
    </script>

    <style scoped>

    </style>