<script setup lang="ts">
import {XMarkIcon, ArrowTopRightOnSquareIcon, CheckIcon, ArrowPathIcon} from "@heroicons/vue/24/outline";
import dayjs from "dayjs";


defineProps({
    knowledgeSource: Object,
});
</script>

<template>
    <div class="grid grid-cols-12 gap-3 p-2 even:bg-gray-100/30 dark:even:bg-gray-900/30 dark:hover:bg-gray-900 hover:bg-gray-100 rounded-lg">
        <div class="col-span-3 text-gray-700 dark:text-gray-300">{{knowledgeSource.name}}</div>
        <div class="col-span-3 text-gray-700 dark:text-gray-300">
            <a
                class="flex items-center justify-start space-x-2 underline underline-offset-4"
               :href="route(
                   'chatbots.knowledge-sources.show',
                    {
                    chatbot: knowledgeSource.chatbot_id,
                    knowledge_source: knowledgeSource.id
                    }
                )">
                <span>
                    {{knowledgeSource.type}}
                </span>
                <ArrowTopRightOnSquareIcon class="size-4"></ArrowTopRightOnSquareIcon>
            </a>
        </div>
        <div class="col-span-1">
                    {{knowledgeSource.extracted_content ? 'SI' : 'NO'}}
                <CheckIcon
                    v-if="knowledgeSource.extracted_content"
                    class="size-4 text-green-500"></CheckIcon>
                <ArrowPathIcon
                    v-else
                    class="size-4 animate-spin text-orange-500"></ArrowPathIcon>
        </div>
        <div class="col-span-4 text-gray-700 dark:text-gray-300">{{dayjs(knowledgeSource.created_at).format('DD-MM-YYYY')}}</div>
        <div class="col-span-1">
            <XMarkIcon class="size-4 text-red-500"></XMarkIcon>
        </div>
    </div>
</template>

<style scoped></style>
