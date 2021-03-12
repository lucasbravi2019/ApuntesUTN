<template>
    <div class="text-center">
        <a class="my-3 font-bold inline-block transition duration-300 text-center mx-auto p-3 rounded-lg border border-gray-300 hover:text-white hover:bg-gray-700" :href="this.route" ><i class="fas fa-book-reader"></i> {{ this.buttonText }}</a>
    </div>
</template>
<script>
export default {
    props: ['route', 'buttonText'],
}
</script>
