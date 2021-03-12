<template>
    <div>
        <a
            :href="this.route"
            class="border border-gray-300 rounded-md transition duration-300 mx-auto block my-3 p-2 w-24 text-center font-bold hover:text-white hover:bg-gray-700"
        ><i class="fas fa-edit"></i> {{ this.buttonText }}</a>
    </div>
</template>
<script>
export default {
    props: ['route', 'buttonText'],
}
</script>
