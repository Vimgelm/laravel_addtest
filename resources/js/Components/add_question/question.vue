<template>
    <div>
        <mylabel for="question" value="Question:"></mylabel>
        <myinput id="question" type="text" class="mt-1 block w-full"/>
    </div>
    <div class="flex items-center justify-between">
                <mylabel for="answer1" value="Answer A:"></mylabel>
            <div class="flex items-center">
                <mycheckbox name="ok"/>
                <myinput id="answer_1" type="text" class="mt-1 block w-full"/>
            </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer2" value="Answer B:"></mylabel>
        <div class="flex items-center">
        <mycheckbox name="ok"/>
        <myinput id="answer_2" type="text" class="mt-1 block w-full"/>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer3" value="Answer C:"></mylabel>
        <div class="flex items-center">
        <mycheckbox name="ok"/>
        <myinput id="answer_3" type="text" class="mt-1 block w-full"/>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <mylabel for="answer4" value="Answer D:"></mylabel>
        <div class="flex items-center">
        <mycheckbox name="ok"/>
        <myinput id="answer_4" type="text" class="mt-1 block w-full"/>
        </div>
    </div>




</template>

<script>
    import mylabel from '@/Components/Label';
    import myinput from '@/Components/Input';
    import mycheckbox from '@/Components/Checkbox';
    export default {
        name: "question",
        props: ['id', 'name'],
        components: {
          mylabel,
            myinput,
            mycheckbox,
        },
    }
</script>

<style scoped>

</style>