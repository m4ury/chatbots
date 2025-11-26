<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ChatbotsListItem from '@/Components/Chatbots/ChatbotsListItem.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { PlusIcon } from '@heroicons/vue/24/solid';

defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
    chats: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="chatbot.name">
                <template #header>
                    <h1>{{chatbot.name}}</h1>
                    <PrimaryButton
                        method="POST"
                        href="
                        route('chats.store', {chatbot: chatbot.id})
                        "
                        aria-label="Chat with chatbot"
                    >
                        Nuevo chat
                    </PrimaryButton>
                </template>
    </AppLayout>
</template>
