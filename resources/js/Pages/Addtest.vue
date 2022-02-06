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
            <div>
                <question></question>
            </div>
            <mybutton class="ml-4" >Add new question</mybutton>
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