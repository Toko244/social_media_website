<script setup>
    import PostItem from "@/Components/app/PostItem.vue";

    const post1 = {
        user: {
            id: 1,
            avatar: 'https://randomuser.me/api/portraits/men/20.jpg',
            name: 'John Smith'
        },
        attachments: [{
                id: 1,
                name: 'test.png',
                url: 'https://picsum.photos/1000',
                mime: 'image/png',
            },
            {
                id: 2,
                name: 'test2.png',
                url: 'https://picsum.photos/1000',
                mime: 'image/png',
            },
            {
                id: 3,
                name: 'MyDocument.docx',
                url: '#',
                mime: 'application/msword',
            },
        ],
        group: null,
        body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                `,
        created_at: '2023-11-19 15:12'
    }

    const post2 = {
        user: {
            id: 1,
            avatar: 'https://randomuser.me/api/portraits/men/22.jpg',
            name: 'John Doe'
        },
        group: {
            id: 1,
            name: 'Laravel Developers'
        },
        body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id impedit exercitationem molestias ex rem tempore accusantium iste laborum, vitae laudantium maxime consequatur qui! Voluptatibus excepturi officia perferendis illum, sequi sint!
                </p>
                `,
        created_at: '2023-11-19 15:12'
    }

</script>

<template>
    <div class="flex-1 overflow-auto">
        <PostItem :post="post1" />
        <PostItem :post="post2" />
    </div>
</template>



<style>

</style>
