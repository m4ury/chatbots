<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '../TextInput.vue';
import InputError from '../InputError.vue';
import TextArea from "@/Components/TextArea.vue"
import SelectInput from "@/Components/SelectInput.vue";


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
        <InputLabel for="system_promt" value="System Prompt" />
        <TextArea
            id="system_prompt"
            name="system_prompt"
            v-model="form.system_prompt"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.system_prompt" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="model" value="Model" class="mt-4" />
        <SelectInput
            id="model"
            name="model"
            v-model="form.model"
            class="mt-1 block w-full"
            placeholder="Selecciona un modelo"
            :options="[
                { label: 'gpt-3.5-turbo', value: 'gpt-3.5-turbo' },
                { label: 'gpt-4', value: 'gpt-4' },
                { label: 'gpt-4-32k', value: 'gpt-4-32k' },
                { label: 'gpt-3.5-turbo-16k', value: 'gpt-3.5-turbo-16k' },
                { label: 'gpt-4-1106-preview', value: 'gpt-4-1106-preview' },
            ]"
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
