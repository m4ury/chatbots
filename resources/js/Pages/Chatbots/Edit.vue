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
    //console.log(form.data());
    form.put(route('chatbots.update', props.chatbot.id), {
        preserveScroll: true,
    });
};

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
                <FormSection @submitted="handleSubmit()">
                    <template #title>
                       Editar Chatbot
                    </template>
                    <template #description>
                        Modifica los detalles del chatbot.
                    </template>
                    <template #form>
                        <ChatbotsForm :form="form" />
                    </template>
                    <template #actions>
                        <ActionMessage :on="form.recentlySuccessful" class="me-3">
                            Cambios guardados.
                        </ActionMessage>
                        <PrimaryButton
                        type="submit"
                        :class="{
                            'cursor-not-allowed opacity-50': form.processing, // Add your condition here
                        }"
                        :disabled="form.processing"
                        ariaLabel="Guardar Cambios"
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
