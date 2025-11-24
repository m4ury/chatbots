import { useForm } from '@inertiajs/vue3';

export const createForm = (chatbot = {}) =>
    useForm({
         name: chatbot.name,
        system_prompt: chatbot.system_prompt,
        model: chatbot.model,
        temperature: String(chatbot.temperature),
    });

export const store = (form) => {
    form.post(route('chatbots.store'), preserveScroll: true });

