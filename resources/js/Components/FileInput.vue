<script setup>
import { onMounted, ref } from 'vue';
import {XCircleIcon} from '@heroicons/vue/24/outline'

defineProps({
    modelValue: Object,
});

const emit = defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });

const clearFile = () => {
    input.value.value = ''
    emit('update:modelValue', null)
}
</script>

<template>
    <div class="relative flex items-center justify-between">
        <input
            ref="input"
            type="file"
            v-bind="attrs"
            class="border-gray-300 file:mr-2 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-500 file:text-white hover:file:bg-indigo-600 file:cursor-pointer file:m-2 file:bg-opacity-10 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            @input="$emit('update:modelValue', $event.target.files[0])"
        />
        <button
            v-if="modelValue"
            class="absolute right-2 top-3.5 text-red-500 dark:text-red-700"
            @click="clearFile"
        >
            <XCircleIcon class="size-6"/>
        </button>
    </div>

</template>
