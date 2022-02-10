    <template>
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div class="p-error" v-for="error in errors">{{error[0]}}</div>
        <form class="mt-8 space-y-6" @submit.prevent="submit">
            <div>
                <mylabel for="name" value="Test name:"></mylabel>
                <myinput v-bind:value="name"
                         @input="name = $event.target.value"
                         id="name"
                         type="text"
                         class="mt-1 block w-full"/>
            </div>

            <div>
                <mylabel for="description" value="Description"></mylabel>
                <myinput v-bind:value="description"
                         @input="description = $event.target.value"
                         id="description"
                         type="text"
                         class="mt-1 block w-full"/>
            </div>
            <div>
                <question_c  v-for="question in test.questions"
                                    :key="question.id"
                                    :question="question"
                                    v-on:remove="remove_question"
                                    v-on:add = "getquestion">{{question}}
                </question_c>
            </div>
            <mybutton v-on:click="add_question" class="ml-4" >Add new question</mybutton>
            <mybutton v-on:click="send_form" v-on:add = "getquestion" class="ml-4" >Save Test</mybutton>
        </form>
            </div>
        </div>

    </template>

    <script>
        import mylabel from '@/Components/Label';
        import myinput from '@/Components/Input';
        import mybutton from '@/Components/Button';
        import question_c from '@/Components/add_question/question.vue';
        import axios from 'axios';
        import question from "@/Components/add_question/question";
        export default {
            name: "addtest",
            data(){
              return {
                  name:'',
                  description:'',
                  questions_count:0,
                  test:{questions:{}},
                  errors: null,
              }
            },
            methods:{
                add_question(){
                    var id = Date.now();
                    var new_question = {
                        id: id,
                        quest_name:"question123"
                    };
                        this.test.questions[this.questions_count] = new_question;
                    this.questions_count += 1;
                },
                //удаляет вопрос
                remove_question(question){
                    for (var key in this.test.questions){
                        if(this.test.questions[key].id == question.id){
                            delete this.test.questions[key];
                        }
                    }
                },
                //добавляет данные ввода отдельного input
                getquestion(value,el_id,question){
                    for(var key in this.test.questions){
                        if (this.test.questions[key]['id'] == question.id){
                            this.test.questions[key][el_id] = value;
                        }
                    };
                },
                //отправляем данные формы через axios
                send_form() {
                    var that = this; //какойто костыль
                    this.test.name = this.name;
                    this.test.description = this.description;
                    this.test.owner = 'vim'; //заглушка

                    axios({
                        method:'post',
                        url:'store/',
                        params:{},
                        data:this.questions,
                    })
                    .then(function(response) {
                    console.log(response);
                    })
                    .catch(function(error){
                         that.errors = error.response.data.errors //возращает массив ошибок
                        console.log(error.response.data.errors);
                    })
                }

            },
            components: {
                question_c,
                myinput,
                mylabel,
                mybutton,
                axios,
            },
        }
    </script>

    <style scoped>

    </style>
