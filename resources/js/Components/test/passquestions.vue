<template>
    <legend class="text-base font-medium text-gray-900">{{question}}</legend>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="answer1" name="answer1" type="checkbox"
                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="answer1"
                   class="font-medium text-gray-700">Answer A:</label>
            <p class="text-gray-500">{{answer1}}</p>
        </div>
    </div>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="answer2" name="answer2" type="checkbox"
                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="answer2"
                   class="font-medium text-gray-700">Answer B:</label>
            <p class="text-gray-500">{{answer2}}</p>
        </div>
    </div>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="answer3" name="answer3" type="checkbox"
                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="answer3"
                   class="font-meanswer2t-gray-700">Answer C:</label>
            <p class="text-gray-500">{{answer3}}</p>
        </div>
    </div>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="answer4" name="answer4" type="checkbox"
                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="answer4"
                   class="font-medium text-gray-700">Answer D:</label>
            <p class="text-gray-500">{{answer4}}</p>
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
        methods: {},
        components: {
            checkbox,
        },
    }
</script>

<style scoped>

</style>
