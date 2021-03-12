<template>
    <a
        :href="this.route"
        class="border border-gray-300 p-3 block rounded-lg max-w-max text-center mx-auto font-bold transition duration-300 hover:bg-gray-700 hover:text-white my-3"
    >Tema {{ this.temaNumero }}: {{ this.tema }}</a>
</template>
<script>
export default {
    props: ['route', 'tema', 'temaNumero']
}
</script>
