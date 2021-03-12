<template>
    <p
        v-html="this.desarrollo"
        class="text-left font-serif text-lg"
    ></p>
</template>
<script>
export default {
    props: ['desarrollo']
}
</script>
