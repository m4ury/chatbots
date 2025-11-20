<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ArrowUturnLeftIcon} from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import ChatbotsForm from '@/Components/Chatbots/ChatbotsForm.vue';

defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
});

</script>


<template>
    <AppLayout :title="`Editar Chatbot: ${chatbot.name}`">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Chatbot: {{chatbot.name}}
            </h1>
        </template>
        <section class="py-6" aria-label="Editar Chatbot">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <FormSection>
                    <template #title>
                       Editar Chatbot
                    </template>
                    <template #description>
                        Modifica los detalles del chatbot.
                    </template>
                    <template #form>
                        <ChatbotsForm :chatbot="chatbot" />
                    </template>
                    <template #actions>
                        <ActionMessage :on="false" class="me-3">
                            Cambios guardados.
                        </ActionMessage>
                        <PrimaryButton type="submit"
                        :class="{
                            'cursor-not-allowed opacity-50': false, // Add your condition here
                        }"
                        :disabled="false"
                           >
                            Guardar Cambios
                        </PrimaryButton>
                    </template>
                </FormSection>
	        </div>
        </section>
    </AppLayout>
</template>
<style scoped></style>
