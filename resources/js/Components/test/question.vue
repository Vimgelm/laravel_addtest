<template>
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <fieldset>
                <div>
                    <textrow rows="3"
                             :name="question.quest_name"
                             :id="'question'"
                             v-on:input="addvalue($event.target.value,$event.target.id)"></textrow>
                </div>
                <div class="flex items-center mt-2">
                    <mylabel for="answer1" value="Answer A:"
                             class="whitespace-pre"></mylabel>
                        <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_1"/>
                    <textrow v-on:input="addvalue($event.target.value,$event.target.id)"
                             id="answer1"
                             type="text"
                             class="mt-1 block w-full ml-2"></textrow>
                </div>
                <div class="flex items-center mt-2">
                    <mylabel for="answer2" value="Answer B:"
                                class="whitespace-pre"></mylabel>
                    <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)"
                                name="ok"
                                id="check_2"/>
                    <textrow v-on:input="addvalue($event.target.value,$event.target.id)"
                             id="answer2"
                             type="text"
                             class="mt-1 block w-full ml-2"></textrow>
                </div>
                <div class="flex items-center mt-2 ">
                    <mylabel for="answer3" value="Answer C:"
                             class="whitespace-pre"></mylabel>
                        <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_3"/>
                    <textrow v-on:input="addvalue($event.target.value,$event.target.id)"
                             id="answer3"
                             type="text"
                             class="mt-1 block w-full ml-2"></textrow>
                </div>
                <div class="flex items-center mt-2">
                    <mylabel for="answer4" value="Answer D:"
                             class="whitespace-pre"></mylabel>
                        <mycheckbox v-on:input="addvalue($event.target.value,$event.target.id)" name="ok" id="check_4"/>
                    <textrow v-on:input="addvalue($event.target.value,$event.target.id)"
                             id="answer4"
                             type="text"
                             class="mt-1 block w-full ml-2"></textrow>
                </div>
                <mybutton class="mt-2" v-on:click="$emit('remove',this.question)"
                >Delete question
                </mybutton>
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
    import mylabel from '@/Components/Label';
    import myinput from '@/Components/Input';
    import mycheckbox from '@/Components/Checkbox';
    import mybutton from '@/Components/Button';
    import textrow from '@/Components/Textarea';

    export default {
        data() {
            return {
                question_value: '',
            }
        },
        props: {
            question: {
                type: Object,
                required: true,
            }
        },
        emits: ['remove', 'add']
        ,
        methods: {
            addvalue(value, el_id) {
                this.$emit('add', value, el_id, this.question)
            },
        },
        name: "question",
        components: {
            mylabel,
            myinput,
            mycheckbox,
            mybutton,
            textrow
        },
    }
</script>

<style>

</style>
