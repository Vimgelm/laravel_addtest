<template>
    <div>
        <label  class="block text-sm font-medium text-gray-700">
            {{name}}
        </label>
        <div class="mt-1">
            <textarea
                    :="$attrs"
                    name=""
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                    placeholder=""
                    @input="$emit('update', $event.target.value)"
            ></textarea>
        </div>
    </div>
</template>

<script>
    export default {
        inheritAttrs: false,
        props:['name',],
        emits: ['update'],
        data() {
            return {
            }
        },
        methods: {

        }

    }
</script>