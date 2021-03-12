<template>
    <div>
        <a
            :href="this.route"
            class="border border-gray-300 rounded-md mx-auto transition duration-300 block my-3 p-2 w-24 text-center font-bold hover:text-white hover:bg-gray-700"
        ><i class="fas fa-plus"></i> {{ this.buttonText }}</a>
    </div>
</template>
<script>
export default {
    props: ['route', 'buttonText'],
}
</script>
