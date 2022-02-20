<template>
    <div>
        <label for="{{name}}" class="block text-sm font-medium text-gray-700">
            {{name}}
        </label>
        <div class="mt-1">
            <textarea id="{{name}}" name="{{name}}" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder=""></textarea>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value1: null,
                value2: null,
                value3: null
            }
        },
        props:['name']
    }
</script>