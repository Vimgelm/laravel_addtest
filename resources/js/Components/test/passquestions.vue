<template>
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <fieldset>
                <legend class="text-base font-medium text-gray-900">{{question}}</legend>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check_1" v-on:input="send_check($event.target.value,$event.target.id)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check_1"
                               class="font-medium text-gray-700">Answer A:</label>
                        <p class="text-gray-500">{{answer1}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check_2" v-on:input="send_check($event.target.value,$event.target.id)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check_2"
                               class="font-medium text-gray-700">Answer B:</label>
                        <p class="text-gray-500">{{answer2}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check_3" v-on:input="send_check($event.target.value,$event.target.id)"></checkbox>

                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check_3"
                               class="font-meanswer2t-gray-700">Answer C:</label>
                        <p class="text-gray-500">{{answer3}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check_4" v-on:input="send_check($event.target.value,$event.target.id)"></checkbox>

                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check_4"
                               class="font-medium text-gray-700">Answer D:</label>
                        <p class="text-gray-500">{{answer4}}</p>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</template>

<script>
    import checkbox from '@/Components/Checkbox'

    export default {
        name: "passquestions",
        data() {
            return {}
        },
        props:
            ['question',
                'answer1',
                'answer2',
                'answer3',
                'answer4',],
        emits:['get_check'],
        methods: {
            send_check(value, id){
                this.$emit('get_check',value, id, this.question) //this.question это то что мы передаем когда заполняем данные в v-for
            }
        },
        components: {
            checkbox,
        },
    }
</script>

<style scoped>

</style>
