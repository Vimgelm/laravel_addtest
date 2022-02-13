<template>
    <div class="antialiased font-sans bg-gray-200 overflow-hidden">
        <div class="" style="">
            <div class="bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" method="POST">
                                    <legend class="text-base font-medium text-gray-900">
                                        {{data_title[0]['name']}}
                                    </legend>
                                    <legend class="text-base font-medium text-gray-900">
                                        {{data_title[0]['description']}}
                                    </legend>
                                    <div class="mt-4 space-y-4">
                                        <passquestions v-for="question in data_questions"
                                                       :key="question.id"
                                                       :question="question.question"
                                                       :answer1="question.answer1"
                                                       :answer2="question.answer2"
                                                       :answer3="question.answer3"
                                                       :answer4="question.answer4"
                                        >
                                        </passquestions>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button v-on:get_question="send_answer"></button>
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
            'data_questions'],
        methods: {
            send_answer(value,id,question) {

                axios({
                    method: 'post',
                    url: 'pass/',
                    params: {},
                    data: '',
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
