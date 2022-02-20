<template>
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <fieldset>
                <legend class="text-base font-medium text-gray-900">{{question}}</legend>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check1"
                                  @click="sendCheck($event.target.checked,$event.target.id, this.index)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check1"
                               class="font-medium text-gray-700">Answer A:</label>
                        <p class="text-gray-500">{{answer1}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check2"
                                  v-on:click="sendCheck($event.target.checked,$event.target.id, this.index)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check2"
                               class="font-medium text-gray-700">Answer B:</label>
                        <p class="text-gray-500">{{answer2}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check3"
                                  v-on:click="sendCheck($event.target.checked,$event.target.id, this.index)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check3"
                               class="font-meanswer2t-gray-700">Answer C:</label>
                        <p class="text-gray-500">{{answer3}}</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <checkbox id="check4"
                                  v-on:click="sendCheck($event.target.checked,$event.target.id, this.index)"></checkbox>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="check4"
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
            ['index',
                'question',
                'answer1',
                'answer2',
                'answer3',
                'answer4',],
        emits: ['getcheck'],
        methods: {
            sendCheck(value, id, index) {
                this.$emit('getcheck', value, id, index) //this.question это то что мы передаем когда заполняем данные в v-for
            }
        },
        components: {
            checkbox,
        },
    }
</script>

<style scoped>

</style>
