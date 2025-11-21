<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '../TextInput.vue';
import InputError from '../InputError.vue';

defineProps({
    form: {
        type: Object,
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
            v-model="form.name"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.name" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="system_promt" value="System Prompt" class="mt-4" />
        <TextInput
            id="system_prompt"
            name="system_prompt"
            v-model="form.system_prompt"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.system_prompt" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="model" value="Model" class="mt-4" />
        <TextInput
            id="model"
            name="model"
            v-model="form.model"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.model" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="temperature" value="Temperature" class="mt-4" />
        <TextInput
            id="temperature"
            type="number"
            min="0"
            max="1"
            step="0.1"
            name="temperature"
            v-model="form.temperature"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.temperature" class="mt-2" />
    </div>
</template>
