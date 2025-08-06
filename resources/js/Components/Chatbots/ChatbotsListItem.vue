<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';

defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <section class="border-b border-gray-200 p-5 dark:border-gray-700" :aria-label="chatbot.name">
        <div class="flex flex-col">
            <div>
                <div class="text-gray-800 dark:text-gray-200">{{ chatbot.name }}</div>
                <div class="text-small text-gray-500 dark:text-gray-400"">{{ chatbot.created_at }}</div>
            </div>
            <div class="flex space-x-2">
                <PrimaryButton @click="$emit('edit', chatbot.id)">Edit</PrimaryButton>
                <SecondaryButton @click="$emit('view', chatbot.id)">View</SecondaryButton>
                <DangerButton @click="$emit('delete', chatbot.id)">Delete</DangerButton>
            </div>
        </div>
    </section>
</template>

<style scoped>
</style>
