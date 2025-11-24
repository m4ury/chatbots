<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import ChatbotsForm from '@/Components/Chatbots/ChatbotsForm.vue';
import {createForm} from '@/Forms/chatbot';

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
});

const form = createForm(props.chatbot);


const handleSubmit = () => {
    form.post(route('chatbots.store'), {
        preserveScroll: true,
    });
};

</script>

<template>
    <AppLayout title="Nuevo Chatbot">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Chatbot: {{chatbot.name}}
            </h1>
        </template>
        <section class="py-6" aria-label="Crear Chatbot">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <FormSection @submitted="handleSubmit()">
                    <template #title>
                       Crear Chatbot
                    </template>
                    <template #description>
                        Crea un nuevo chatbot para tu aplicacion.
                    </template>
                    <template #form>
                        <ChatbotsForm :form="form" />
                    </template>
                    <template #actions>

                        <PrimaryButton
                        type="submit"
                        :class="{
                            'cursor-not-allowed opacity-50': form.processing, // Add your condition here
                        }"
                        :disabled="form.processing"
                        ariaLabel="Crear Chatbot"
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
