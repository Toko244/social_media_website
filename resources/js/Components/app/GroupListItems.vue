

<template lang="">
    <TextInput :model-value="searchKeyword" placeholder="Type To Search" class="w-full mt-4" />
    <div class="mt-5 h-[200px] lg:flex-1 overflow-auto">
        <div v-if="false" class="text-gray-600 text-center p-3">
            You are not joined to any groups yet
        </div>
        <div v-else>
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Laravel Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
            <GroupItem image="https://picsum.photos/100" title="Vue.js Developers"
                description="Lorem ipsum, dolor sit amet consectetur adipisicing elit" class="rounded-lg" />
        </div>
    </div>
</template>
<script setup>
    import GroupItem from '@/Components/app/GroupItem.vue';
    import TextInput from '@/Components/TextInput.vue';
    import {
        ref
    } from "vue";

    const searchKeyword = ref()

    defineProps({

    });

</script>
<style lang="">

</style>
