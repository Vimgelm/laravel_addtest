<template>
    <div>
        <InputText type="text" v-model="text" />
        <p>{{text}}</p>
    </div>
</template>

<script>
    export default {
        name: "App",
        data() {
            return {
                text: "",
            };
        },
    };
</script>
