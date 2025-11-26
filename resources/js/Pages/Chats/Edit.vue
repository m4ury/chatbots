<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import ChatbotsForm from '@/Components/Chatbots/ChatbotsForm.vue';
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

const props = defineProps({
    chat: Object,
});

const editing = ref(false)

const form = useForm({
    name: props.chat.name,
})

const updateChatName = () => {
    form.patch(route('chats.update', props.chat.id), {
        preserveScroll: true,
        onSuccess: () => {
            editing.value = false;
        },
        onError: () => {
            editing.value = false;
            form.reset()
        }
    })
}

</script>

<template>
    <AppLayout :title="chat.name">
        <template #header>
            <TextInput
                @blur="updateChatName"
                @keyup.enter="updateChatName"
                v-if="editing"
                v-model="form.name"
                autofocus
                />
            <h1
                v-else
                @click="editing = true"
                class="p-0 text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                {{chat.name}}
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
