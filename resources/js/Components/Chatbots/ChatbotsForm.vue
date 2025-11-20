<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '../TextInput.vue';
defineProps({
    chatbot: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="name" value="Nombre" class="mt-4" />
        <TextInput
            id="name"
            name="name"
            v-model="chatbot.name"
            class="mt-1 block w-full"
        />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="system_promt" value="System Prompt" class="mt-4" />
        <TextInput
            id="system_promt"
            name="system_promt"
            v-model="chatbot.system_promt"
            class="mt-1 block w-full"
        />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="model" value="Model" class="mt-4" />
        <TextInput
            id="model"
            name="model"
            v-model="chatbot.model"
            class="mt-1 block w-full"
        />
    </div>
</template>
