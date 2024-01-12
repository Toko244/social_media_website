<template>
    <TextInput
        :model-value="searchKeyword"
        class="w-full mt-4"
        placeholder="Type To Search"
    />
        <div class="mt-5 h-[200px] lg:flex-1 overflow-auto">
            <div v-if="false" class="text-gray-600 text-center p-3">
                You don't have any friends yet.
            </div>
            <div v-else>
                <FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                />
                <FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                />
                <FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                />
                <FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                />
                <FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                /><FollowingItem
                  class="rounded-lg"
                  description="Lorem ipsum, dolor sit amet consectetur adipisicing elit"
                  image="https://picsum.photos/100"
                  title="John Doe"
                />
            </div>
        </div>
</template>

<script setup>
    import FollowingItem from '@/Components/app/FollowingItem.vue';
    import TextInput from '@/Components/TextInput.vue';
    import {
        ref
    } from "vue";

    const searchKeyword = ref()

    defineProps({

    });

</script>

<style>

</style>