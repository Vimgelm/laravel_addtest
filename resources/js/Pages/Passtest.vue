<template>
    <div class="antialiased font-sans bg-gray-200 overflow-hidden">
        <div class="" style="">
            <div class="bg-gray-100">
                <div class="max-w-5xl mx-auto py-6 sm:px-6 lg:px-8">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" @submit.prevent="submit">
                                    <legend class="text-base font-medium text-gray-900">
                                        {{data_title[0]['name']}}
                                    </legend>
                                    <legend class="text-base font-medium text-gray-900">
                                        {{data_title[0]['description']}}
                                    </legend>
                                    <div class="mt-4 space-y-4">
                                        <passquestions v-on:getcheck="getAnswer"
                                                       v-for="(questions, index) in data_questions"
                                                       :key="index"
                                                       :index="index"
                                                       :question="questions.question"
                                                       :answer1="questions.answer1"
                                                       :answer2="questions.answer2"
                                                       :answer3="questions.answer3"
                                                       :answer4="questions.answer4"
                                        >
                                        </passquestions>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            @click="send_answer"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Send Test
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";
    import passquestions from '@/Components/test/passquestions';
    import authenticated from '@/Layouts/Authenticated'

    export default {
        name: "Passtest",
        data() {
            return {
                name: '',
                description: '',
                answers: {},
            }
        },
        props: ['data_title',
            'data_questions', 'id'],
        methods: {
            getAnswer(value, id, index) {
                // console.log(value, id, index)
                if(index in this.answers){
                    this.answers[index][id] = value;
                }else{
                    this.answers[index] = {};
                    this.answers[index][id] = value;
                }
                // this.answers[index] = {[id]:value}
                console.log(this.answers)
            },
            send_answer() {
                for(var key in this.answers){
                    if('check1' in this.answers[key]){}else{this.answers[key]['check1'] = false}
                    if('check2' in this.answers[key]){}else{this.answers[key]['check2'] = false}
                    if('check3' in this.answers[key]){}else{this.answers[key]['check3'] = false}
                    if('check4' in this.answers[key]){}else{this.answers[key]['check4'] = false}
                }
                //добавить id текущего теста
                this.answers['id'] = this.id;
                axios({
                    method: 'post',
                    url: '/test/pass/save/',
                    params: {},
                    data: this.answers,
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error.response.data.errors);
                    })
            }
        },
        components: {
            axios,
            passquestions,
            authenticated
        }

    }
</script>

<style scoped>

</style>
