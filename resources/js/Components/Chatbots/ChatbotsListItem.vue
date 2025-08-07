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
    <section class="border-gray-200 p-5 dark:border-gray-700" :aria-label="chatbot.name">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <div class="text-gray-800 dark:text-gray-200">{{ chatbot.name }}</div>
                <div class="text-small text-gray-500 dark:text-gray-400">{{ chatbot.created_at }}</div>
            </div>
            <div class="flex space-x-2 mt-4 md:mt-0">
                <PrimaryButton>Edit</PrimaryButton>
                <SecondaryButton>View</SecondaryButton>
                <DangerButton>Delete</DangerButton>
            </div>
        </div>
    </section>
</template>

<style scoped>
</style>
