<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ChatbotsListItem from '@/Components/Chatbots/ChatbotsListItem.vue';
defineProps({
    chatbots: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Listado de Chatbots">
                <template #header>
                    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Chatbots
                    </h1>
                </template>

        <section class="py-12" aria-label="Chatbots List">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="divide-y bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <ChatbotsListItem
                        v-for="chatbot in chatbots"
                        :key="chatbot.id"
                        :chatbot="chatbot"
                    />
                </div>
            </div>
        </section>
    </AppLayout>
</template>
