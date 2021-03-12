<template>
    <div>
        <a :href="this.route"
        class="block font-bold rounded-md mx-5 w-24 p-2 my-3 transition duration-300 hover:bg-gray-700 hover:text-white text-center border border-gray-300"><i class="fas fa-arrow-circle-left"
        ></i> {{ this.buttonText }}</a>
    </div>
</template>
<script>
export default {
    props: ['route', 'buttonText'],
}
</script>
