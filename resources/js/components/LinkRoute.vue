<template>
    <a
        :href="this.route"
        class="font-bold "
    >{{ this.link }}</a>
</template>
<script>
export default {
    props: ['route', 'link']
}
</script>
